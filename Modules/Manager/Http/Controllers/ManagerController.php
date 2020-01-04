<?php

namespace Edaacil\Modules\Manager\Http\Controllers;


use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Edaacil\Charts\Charts;
use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Models\Certificate;
use Edaacil\Modules\Manager\Http\Repositories\ManagerRepository;
use Illuminate\Support\Facades\DB;

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
        $certificates = Certificate::with('token', 'manager')->latest()->get();
        $chart = $this->managerRepository->dashboard();
        return view($this->_config['view'], ['certificates' => $certificates, 'chart' => $chart]);
    }


}
