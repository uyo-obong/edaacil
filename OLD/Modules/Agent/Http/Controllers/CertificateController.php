<?php

namespace Edaacil\Modules\Agent\Http\Controllers;

use Edaacil\Modules\Agent\Http\Repositories\CertificateRepository;
use Edaacil\Modules\Agent\Http\Requests\CertificateIssueRequest;
use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends BaseController
{

    /**
     * @var array|\Illuminate\Http\Request|string
     */
    private $_config;

    /**
     * @var CertificateRepository
     */
    private $certificateRepository;

    /**
     * CertificateController constructor.
     * @param CertificateRepository $certificateRepository
     */
    public function __construct(CertificateRepository $certificateRepository)
    {
        $this->_config = request('_config');

        $this->certificateRepository = $certificateRepository;
    }


    /**
     * Return form view for obtaining certificate
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function certificate()
    {
        return $this->certificateRepository->certificate();
    }

    public function certificateIssue(CertificateIssueRequest $request)
    {
        return $this->certificateRepository->certificateIssue($request->all());

    }

}