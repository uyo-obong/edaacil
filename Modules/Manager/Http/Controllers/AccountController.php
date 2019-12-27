<?php

namespace Edaacil\Modules\Manager\Http\Controllers;

use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Repositories\AccountRepository;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Return profile page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        return view($this->_config['view']);
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
