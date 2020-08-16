<?php

namespace Edaacil\Modules\Agent\Http\Controllers;

use Edaacil\Modules\Agent\Http\Repositories\AuthAgentRepository;
use Edaacil\Modules\Agent\Http\Requests\LoginRequest;
use Edaacil\Modules\BaseController;
use Illuminate\Support\Facades\Auth;

class AuthAgentController extends BaseController
{

    /**
     * @var array|\Illuminate\Http\Request|string
     */
    private $_config;

    /**
     * @var AuthAgentRepository
     */
    private $authAgentRepository;

    /**
     * AuthAgentController constructor.
     * @param AuthAgentRepository $authAgentRepository
     */
    public function __construct(AuthAgentRepository $authAgentRepository)
    {
        $this->_config = request('_config');
        $this->authAgentRepository = $authAgentRepository;
    }

    /**
     * Return agent login view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    /**
     * Return authenticated agent
     * @param AgentLoginRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function agentLogin(LoginRequest $request)
    {
        return $this->authAgentRepository->agentLogin($request);
    }

    /**
     * Return forgot password page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function forgotPassword()
    {
        return view($this->_config['view']);
    }

    public function agentForgotPassword()
    {
        return $this->authAgentRepository->agentForgotPassword();
    }

    /**
     * Return Reset password page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function passwordReset()
    {
        return view($this->_config['view']);
    }

    /**
     * Return new password
     * @return \Illuminate\Http\RedirectResponse
     */
    public function agentResetPassword(){
        return $this->authAgentRepository->agentResetPassword();
    }

    /**
     * Logout Agent
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function agentLogout()
    {
        Auth::logout();
        return redirect(route('agent.auth.view'));
    }
}
