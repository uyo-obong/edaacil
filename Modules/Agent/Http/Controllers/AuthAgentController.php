<?php

namespace Edaacil\Modules\Agent\Http\Controllers;

use Edaacil\Modules\Agent\Http\Repositories\AuthAgentRepository;
use Edaacil\Modules\BaseController;

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
     * Return manager login view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }
}
