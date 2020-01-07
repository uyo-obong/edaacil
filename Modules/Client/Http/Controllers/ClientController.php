<?php

namespace Edaacil\Modules\Client\Http\Controllers;

use Edaacil\Modules\BaseController;

class ClientController extends BaseController
{

    /**
     * @var array|\Illuminate\Http\Request
     */
    private $_config;

    /**
     * ClientController constructor.
     */
    public function __construct()
    {
        $this->_config = request('_config');
    }

    /**
     * render landing page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

}