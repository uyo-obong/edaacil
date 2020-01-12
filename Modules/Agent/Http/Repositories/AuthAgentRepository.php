<?php

namespace Edaacil\Modules\Agent\Http\Repositories;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Edaacil\Notifications\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

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


    public function agentForgotPassword(array $request){
        $data = (object) $request;

        $agent = $this->model()::where('email', $data->email)->first();
        if (!$agent){
            return redirect('/agent/forgot/password');
        }
        # CHECK IF USER ALREADY EXIST
        if (count($agent) < 1) {
            return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
        }
        Notification::send($data->email, new PasswordReset($agent));

//        $agent->notify(new PasswordReset($data->email,$token));




    }

}