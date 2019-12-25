<?php

namespace Edaacil\Modules\Manager\Http\Repositories;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AuthRepository extends BaseRepository
{

    function model()
    {
        return Manager::class;
    }

    public function managerLogin(array $loginRequest)
    {
        $credentials = collect($loginRequest)->only(['email', 'password']);

        if (Auth::guard()->attempt(([$credentials,'status'=>'Active']), $loginRequest->has('remember'))){
            return $this->redirectTo();
        }
    }

    protected function redirectTo(){

        $role = Auth::user()->role;
        //check user role
        switch ($role){
            case 'Manager':
                return '/manager';//please fix correct dashboard
                break;
            case 'Agent':
                return '/agent';//please fix correct dashboard
                break;
            default:
                return '/login';//please fix correct dashboard
                break;
        }
    }

    public function logout($logoutRequest){
        Auth::logout();
        $logoutRequest->session()->invalidate();

        return $this->loggedOut($logoutRequest) ?: redirect(route(''));//kindly fix the redirect view name
    }

}