<?php

namespace Edaacil\Modules\Manager\Http\Controllers;

use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Repositories\AccountRepository;

use Edaacil\Modules\Manager\Http\Requests\CreateAccountRequest;
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

    /**
     * Create new account
     * @param CreateAccountRequest $createAccount
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createAgentAccount(CreateAccountRequest $createAccount){
        $account =  $this->accountRepository->createAgentAccount($createAccount->all());
        if ($account)
            session()->flash('success', 'Account Created Successfully');
            return redirect()->back();
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





}
