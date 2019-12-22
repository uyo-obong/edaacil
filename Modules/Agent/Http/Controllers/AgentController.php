<?php

namespace Edaacil\Modules\Agent\Http\Controllers;

use Edaacil\Modules\Agent\Http\Repositories\AgentRepository;
use Edaacil\Modules\BaseController;

class AgentController extends BaseController
{

    /**
     * @var array|\Illuminate\Http\Request|string
     */
    private $_config;

    /**
     * @var AgentRepository
     */
    private $agentRepository;

    /**
     * AgentController constructor.
     * @param AgentRepository $agentRepository
     */
    public function __construct(AgentRepository $agentRepository)
    {
        $this->_config = request('_config');

        $this->agentRepository = $agentRepository;
    }

    /**
     * Return agent dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        return view($this->_config['view']);
    }
}
