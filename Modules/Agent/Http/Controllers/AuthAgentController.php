<?php

namespace Edaacil\Modules\Agent\Http\Controllers;

use Edaacil\Modules\Agent\Http\Repositories\AuthAgentRepository;
use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Requests\AgentLoginRequest;
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
    public function agentLogin(AgentLoginRequest $request)
    {
        return $this->authAgentRepository->agentLogin($request);
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
