<?php

namespace Edaacil\Modules\Agent\Http\Repositories;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->route('agent.auth.view')->with("disabled", "Oopz! Your account has been disconnected");
        }
        return redirect()->route('agent.auth.view')->with("invalid", "Invalid email/or password");
    }

}