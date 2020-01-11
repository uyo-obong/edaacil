<?php

namespace Edaacil\Modules\Agent\Http\Repositories;

use Carbon\Carbon;
use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Certificate;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Support\Facades\Hash;

//use Edaacil\Traits\StoreImageTrait;


class AgentRepository extends BaseRepository
{
//    use StoreImageTrait;
    /**
     * @return string
     */
    function model()
    {
        return Manager::class;
    }

    /**
     * Keep track of a certificates issued out in a day for a particular agent
     * @return mixed
     */
    public function certificateCounter()
    {
        $today = Carbon::now();
        $day = Certificate::where('manager_id', auth()->user()->id)->whereDay('created_at', $today->day)
            ->get();
       return $day->count();
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function agentUpdateProfile(array $request){
        $data = (object) $request;

        $agent = $this->model()::where('id', auth()->user()->id)->first();
        return $agent->update([
           'first_name'=>$data->first_name,
           'last_name'=>$data->last_name,
           'phone_no'=>$data->phone_no,
           'address'=>$data->address,
        ]);
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function agentChangePassword(array $request){
        $data = (object) $request;
        $agent = $this->model()::where('id', auth()->user()->id)->where('email', auth()->user()->email)->first();
        return $agent->update([
            'password'=> Hash::make($data->password),
        ]);
    }
}