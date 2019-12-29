<?php

namespace Edaacil\Modules\Manager\Http\Controllers;


use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Repositories\ManagerRepository;
use Edaacil\Modules\Manager\Http\Requests\UpdateMangerProfile;

class ManagerController extends BaseController
{
    /**
     * @var ManagerRepository
     */
    private $managerRepository;

    /**
     * @var array|\Illuminate\Http\Request|string
     */
    private $_config;

    public function __construct(ManagerRepository $managerRepository)
    {
        $this->_config = request('_config');

        $this->managerRepository = $managerRepository;
    }

    public function dashboard()
    {
        return view($this->_config['view']);
    }

    public function updateManagerInformation(UpdateMangerProfile $updateMangerProfile,$id)
    {
        dd([$updateMangerProfile,$id]);
        $manager = $this->managerRepository->updateManagerInformation($updateMangerProfile->all(),$id);
        if ($manager)
            session()->flash('success', 'Manager-Profile Updated Successfully');
        return redirect()->back();
    }
}
