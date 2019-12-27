<?php

namespace Edaacil\Modules\Manager\Http\Controllers;

use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Repositories\AccountRepository;

use Edaacil\Modules\Manager\Http\Requests\UpdateAgentAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class AccountController extends BaseController
{

    /**
     * @var array|\Illuminate\Http\Request
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

    /**
     * Return profile page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        return view($this->_config['view']);
    }


    public function createAgentAccount(Request $createAgentAccount){

        Validator::make($createAgentAccount->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

//        dd($createAgentAccount->all());
        return $this->accountRepository->createAgentAccount($createAgentAccount->all());
    }


    /**
     * Return Edit profile page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editProfile()
    {
        $manager = Auth::user();
        return view($this->_config['view'], ['manager' => $manager]);
    }

    /**
     * @param UpdateAgentAccount $updateAgentAccount
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAgentAccount(Request $updateAgentAccount,$id){
        Validator::make($updateAgentAccount->all(), [
            'email' => 'required',
            'status'=> 'required',
        ]);

        return $this->accountRepository->updateAgentAccount($updateAgentAccount->all(),$id);
    }



}
