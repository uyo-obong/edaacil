<?php

namespace Edaacil\Modules\Manager\Http\Controllers;

use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Repositories\AuthRepository;
use Edaacil\Modules\Manager\Http\Repositories\ManagerRepository;
use Edaacil\Modules\Manager\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Login manager into his dashboard
     * @param LoginRequest $loginRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function managerLogin(LoginRequest $loginRequest)
    {
        return $this->authRepository->managerLogin($loginRequest->all());
    }

    /**
     * Logout manager from dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function managerLogout()
    {
        Auth::logout();
        return redirect(route('manager.auth.view'));
    }
}
