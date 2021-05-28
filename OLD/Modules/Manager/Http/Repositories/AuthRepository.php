<?php

namespace Edaacil\Modules\Manager\Http\Repositories;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Support\Facades\Auth;

class AuthRepository extends BaseRepository
{

    /**
     * @return string
     */
    function model()
    {
        return Manager::class;
    }

    /**
     * Login Manager to his dashboard
     * @param array $loginRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function managerLogin(array $loginRequest)
    {
        $credentials = collect($loginRequest)->only('email', 'password');

        Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password']
        ]);

        if (auth()->user() != null && auth()->user()->role == 'Manager') {

            return redirect('/manager');
        }
        return redirect()->route('manager.auth.view')->with("invalid", "Invalid email/or password");
    }


}