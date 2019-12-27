<?php

namespace Edaacil\Modules\Manager\Http\Repositories;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Ramsey\Uuid\Uuid;

class AccountRepository extends BaseRepository
{

    function model()
    {
        return Manager::class;
    }

    public function createAgentAccount(array $agentData){
        $data = (object)$agentData;
        Manager::create([
           'id'=>$this->generateUuid(),
           'first_name'=>$data->first_name,
           'last_name'=>$data->last_name,
           'email'=>$data->email,
           'phone_number'=>$data->phone_number,
           'role'=>$data->role,
           'status'=>'Active',
           'address'=>$data->address,
           'city'=>$data->city,
           'state'=>$data->state,
           'country'=>$data->country,
        ]);
        return redirect()->back()->with('success', 'Agent Created Successfully');
    }

    public function listAgents(){

    }

    public function editAgents($id){
        $manager = Manager::where('id', $id)->first();
        return $manager;
    }

    public function updateAgents(array $request,$id){

        $data = (object) $request;
        $manager = Manager::where('id', $id)->first();
        $manager->update([
            'first_name'=>$data->first_name,
            'last_name'=>$data->last_name,
            'email'=>$data->email,
            'phone_number'=>$data->phone_number,
            'address'=>$data->address,
            'city'=>$data->city,
            'state'=>$data->state,
            'country'=>$data->country,
        ]);
        return back()->with('success','Agent Updated Successfully');
    }

}