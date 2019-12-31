<?php

namespace Edaacil\Modules\Agent\Http\Controllers;

use Edaacil\Modules\Agent\Http\Repositories\AgentRepository;
use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Models\Certificate;
use Edaacil\Modules\Manager\Http\Models\Token;

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
        $certificates = Certificate::where('manager_id', auth()->user()->id)->get();

        $verifyCertificates = Certificate::all();
        foreach ($verifyCertificates as $verified) {
            $token = Token::where('token', $verified->token_id)->update([
                'status' => 'Used'
            ]);
        }

        return view($this->_config['view'], ['certificates' => $certificates]);
    }

    /**
     * Return agent profile details
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        $agent = auth()->user();
        return view($this->_config['view'], ['agent' => $agent]);
    }

}
