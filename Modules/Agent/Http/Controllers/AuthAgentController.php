<?php

namespace Edaacil\Modules\Agent\Http\Controllers;

use Edaacil\Modules\Agent\Http\Repositories\AuthAgentRepository;
use Edaacil\Modules\Agent\Http\Requests\AgentLoginRequest;
use Edaacil\Modules\Agent\Http\Requests\ForgotPassword;
use Edaacil\Modules\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
    public function agentLogin(AgentLoginRequest $request)
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

    public function agentForgotPassword(Request $forgotPassword){
        try {
            $this->validate($forgotPassword, [
                'email' => 'required|exists:managers,email'
            ]);
        } catch (ValidationException $e) {
        }
        dd($forgotPassword->email);
        $agent = $this->authAgentRepository->agentForgotPassword($forgotPassword->all());
        dd($agent);
        if ($agent)
            session()->flash('success', 'we have e-mailed your password reset link!');
        return redirect()->back();
    }

    /**
     * Return Reset password page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function passwordReset()
    {
        return view($this->_config['view']);
    }

//    public function agentResetPassword(){
//        $agent = $this->authAgentRepository->agentForgotPassword();
//        if ($agent)
//            session()->flash('success', 'Congratulations,You have Successfully Reset Your Password!');
//        return redirect()->back();
//    }

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
