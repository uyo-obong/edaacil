<?php

namespace Edaacil\Modules\Agent\Http\Repositories;

use Carbon\Carbon;
use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Edaacil\Notifications\ConfirmPasswordReset;
use Edaacil\Notifications\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthAgentRepository extends BaseRepository
{

    function model()
    {
        return Manager::class;
    }

    /**
     * Login agent to his/her dashboard
     * @param $data
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function agentLogin($data)
    {
        $credentials = collect($data)->only('email', 'password');
        Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password']
        ]);

        if (auth()->user() != null && auth()->user()->role == 'Agent') {
            if (auth()->user()->status == 'Active') {
                return redirect('/agent');
            }
            return redirect()->route('agent.auth.view')->with("disabled", "Oops! Your account has been disconnected");
        }
        return redirect()->route('agent.auth.view')->with("invalid", "Invalid email/or password");
    }


    /**
     * Send password reset url with token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function agentForgotPassword(){

        $data = (object) request()->all();

        $agent = $this->model()::where('email', $data->email)->first();


        if ($agent == null){
            session()->flash('danger', 'User does not exist with this email ');
            return redirect()->back();
        }

        DB::table('password_resets')->updateOrInsert([
            'email' => $data->email,
            'token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);


        $tokenData = DB::table('password_resets')
            ->where('email', $data->email)->latest()->first();

        $email_reset = $this->emailResetPasswordLink($data->email, $tokenData->token);

        if ($email_reset == true) {
            session()->flash('success', 'We have email you password reset link');
            return redirect()->back();
        } else {
            session()->flash('danger', 'A Network Error occurred. Please try again.');
            return redirect()->back();
        }

    }


    /**
     * Password reset logic for agent
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function agentResetPassword()
    {
        $validator = Validator::make(request()->all(), [
            'password' => 'required|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            session()->flash('danger', 'Password does not match');
            return redirect()->back();
        }

        $url = url()->previous();
        $explode = explode('/', $url);
        $token = explode('?', $explode[6]);

        $password = request()->password;

        $tokenData = DB::table('password_resets')
            ->where('token', $token[0])
            ->where('created_at','>',Carbon::now()->subMinutes(60))
            ->latest()->first();

        //* Check if the token has expired
        if ($tokenData == null) {
            session()->flash('danger', 'The token you requested has expired');
            return redirect(route('agent.auth.forgot'));
        }

        $agent = $this->model()::where('email', $tokenData->email)->first();

        if ($agent == null) {
            session()->flash('danger', 'Email not found, try again');
            return redirect()->back();
        }

        // Update password
        $agent->update(['password' => Hash::make($password) ]);

        //login the user immediately they change password successfully
        Auth::login($agent);

        //Delete the token
        DB::table('password_resets')->where('email', $agent->email)
            ->delete();

        //Send Email Reset Success Email
        if ($agent) {
            Notification::route('mail', $agent->email)->notify(new ConfirmPasswordReset($agent));
            return redirect(route('agent.dashboard.view'));
        } else {
            session()->flash('danger', ' Network Error occurred. Please try again.');
            return redirect()->back();
        }

    }

    /**
     * Send password reset to user
     * @param $email
     * @param $token
     * @return bool
     */
    private function emailResetPasswordLink($email, $token)
    {
        $manager = $this->model()::where('email', $email)->select('first_name', 'email')->first();

        $link = config('base_url') . route('agent.auth.reset', $token). '?email=' . urlencode($manager->email);

        try {
            Notification::route('mail', $email)->notify(new PasswordReset($manager, $link));
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

}