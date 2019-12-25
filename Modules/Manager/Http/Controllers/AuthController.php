<?php

namespace Edaacil\Modules\Manager\Http\Controllers;

use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Repositories\AuthRepository;
use Edaacil\Modules\Manager\Http\Repositories\ManagerRepository;
use Edaacil\Modules\Manager\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Validator;
use Symfony\Component\Console\Input\Input;

class AuthController extends BaseController
{
    /**
     * @var ManagerRepository
     */
    private $authRepository;

    /**
     * @var array|\Illuminate\Http\Request|string
     */
    private $_config;

    /**
     * AuthController constructor.
     * @param AuthRepository $authRepository
     */
    public function __construct(AuthRepository $authRepository)
    {
        $this->_config = request('_config');
        $this->authRepository = $authRepository;
    }

    /**
     * Return manager login view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    public function showManagerLoginForm()
    {
        return view('');
    }


    public function managerLogin(LoginRequest $loginRequest)
    {
        return $this->authRepository->managerLogin($loginRequest->all());
    }

    public function logout(Request $logoutRequest){
        return $this->authRepository->logout($logoutRequest->all());
    }
}
