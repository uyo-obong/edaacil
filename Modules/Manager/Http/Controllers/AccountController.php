<?php

namespace Edaacil\Modules\Manager\Http\Controllers;

use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Repositories\AccountRepository;
use Edaacil\Modules\Manager\Http\Requests\ChangeManagerPassword;
use Edaacil\Modules\Manager\Http\Requests\CreateAccountRequest;
use Edaacil\Modules\Manager\Http\Requests\UpdateAccountRequest;
use Edaacil\Modules\Manager\Http\Requests\UpdateMangerInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
        $accounts =  $this->accountRepository->model()::latest()->get();
        return view($this->_config['view'], ['accounts' => $accounts]);
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

    /**
     * Create new account
     * @param CreateAccountRequest $createAccount
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function createAccount(CreateAccountRequest $createAccount)
    {
        $account =  $this->accountRepository->createAccount($createAccount->all());
        if ($account)
            session()->flash('success', 'Account Created Successfully');
        return redirect()->back();
    }

    /**
     * @param UpdateAccountRequest $updateAccount
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAccount(UpdateAccountRequest $updateAccount)
    {
        $account = $this->accountRepository->updateAccount($updateAccount->all());
        if ($account)
            session()->flash('success', 'Account Updated Successfully');
        return Redirect::back();
    }

    /**
     * Update Account Information
     * @param UpdateMangerInformation $updateMangerInformation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateManagerInformation(UpdateMangerInformation $updateMangerInformation)
    {

        $manager = $this->accountRepository->updateManagerInformation($updateMangerInformation->all());
        if ($manager)
            session()->flash('success', 'Manager-Profile Updated Successfully');
        return Redirect::back();
    }

    public function managerChangePassword(ChangeManagerPassword $changeManagerPassword){
//        dd($changeManagerPassword);
        $manager = $this->accountRepository->managerChangePassword($changeManagerPassword->all());
//        dd($manager);
        if ($manager)
            session()->flash('success', 'Manager Password Changed Successfully');
        return redirect()->back();
    }

}
