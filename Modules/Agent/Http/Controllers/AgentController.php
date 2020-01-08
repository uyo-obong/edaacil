<?php

namespace Edaacil\Modules\Agent\Http\Controllers;

use Edaacil\Modules\Agent\Http\Repositories\AgentRepository;
use Edaacil\Modules\Agent\Http\Requests\AgentUpdateProfile;
use Edaacil\Modules\Agent\Http\Requests\ChangeAgentPassword;
use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

//use Illuminate\Http\Request;

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
        $counter = $this->agentRepository->certificateCounter();
        $certificates = Certificate::where('manager_id', auth()->user()->id)->with('token')->latest()->get();
        return view($this->_config['view'], ['certificates' => $certificates, 'counter' => $counter]);
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

    public function agentUpdateProfile(AgentUpdateProfile $agentUpdateProfile){
        $agent = $this->agentRepository->agentUpdateProfile($agentUpdateProfile->all());
        if ($agent)
            session()->flash('success', 'Profile Successfully Updated');
        return redirect()->back();
    }

    public function agentChangePassword(ChangeAgentPassword $changeAgentPassword){
        $agentPassword = $this->agentRepository->agentChangePassword($changeAgentPassword->all());
        if ($agentPassword)
            session()->flash('success', 'Password Changed Successfully');
        return redirect()->back();
    }

}
