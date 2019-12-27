<?php

namespace Edaacil\Modules\Manager\Http\Repositories;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Support\Facades\Hash;
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
           'phone_no'=>$data->phone_no,
           'role'=>$data->role,
           'status'=>'Active',
           'address'=>$data->address,
           'city'=>$data->city,
           'state'=>$data->state,
           'country'=>$data->country,
            'password'=>Hash::make('password'),
        ]);
        return redirect()->back()->with('success', 'Agent Created Successfully');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function editAgents($id){
        $manager = Manager::where('id', $id)->first();
        return $manager;
    }

    public function updateAgentAccount(array $request,$id){

        $data = (object) $request;
        $manager = Manager::where('id', $id)->first();
        $manager->update([
            'email'=>$data->email,
            'status'=>$data->staus,
        ]);
        return back()->with('success','Agent Updated Successfully');
    }

}