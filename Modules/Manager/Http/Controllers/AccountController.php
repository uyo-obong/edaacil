<?php

namespace Edaacil\Modules\Manager\Http\Controllers;

use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Repositories\AccountRepository;
use Edaacil\Modules\Manager\Http\Requests\CreateAgentAccount;
use Edaacil\Modules\Manager\Http\Requests\UpdateAgentAccount;

class AccountController extends BaseController
{

    /**
     * @var array|\Illuminate\Http\Request|string
     */
    private $_config;

    /**
     * @var AccountRepository
     */
    private $accountRepository;

    /**
     * AccountController constructor.
     * @param AccountRepository $accountRepository
     */
    public function __construct(AccountRepository $accountRepository)
    {
        $this->_config = request('_config');
        $this->accountRepository = $accountRepository;
    }

    /**
     * List manager's account
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list()
    {
        return view($this->_config['view']);
    }

    public function createAgentAccount(CreateAgentAccount $createAgentAccount){
        return $this->accountRepository->createAgentAccount($createAgentAccount->all());
    }

    public function listAgents(){

    }

    public function editAgents($id){
        $manager = $this->accountRepository->editAgents($id);
        return view($this->_config['view'], ['manager' => $manager]);

    }

    public function updateAgents(UpdateAgentAccount $updateAgentAccount,$id){
        return $this->accountRepository->updateAgents($updateAgentAccount->all(),$id);
    }
}
