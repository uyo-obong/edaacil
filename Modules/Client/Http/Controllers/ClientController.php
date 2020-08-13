<?php

namespace Edaacil\Modules\Client\Http\Controllers;

use Edaacil\Modules\BaseController;
use Edaacil\Modules\Client\Http\Repositories\ClientRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientController extends BaseController
{

    /**
     * @var array|\Illuminate\Http\Request
     */
    private $_config;
    private $clientRepository;

    /**
     * ClientController constructor.
     * @param ClientRepository $clientRepository
     */
    public function __construct(ClientRepository $clientRepository)
    {
        $this->_config = request('_config');
        $this->clientRepository=$clientRepository;
    }

    /**
     * render landing page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    public function createContact(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'subject'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);

        $client  = $this->clientRepository->createContact($request->all());
//        dd($client);
        if ($client)
            session()->flash('alert', 'Message Sent Successfully');
        return redirect()->back();
    }



}