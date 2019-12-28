<?php

namespace Edaacil\Modules\Manager\Http\Repositories;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;

class ManagerRepository extends BaseRepository
{

    /**
     * @return string
     */
    function model()
    {
        return Manager::class;
    }



    public function updateManagerInformation(array $request,$id){

        $data = (object) $request;
        $manager = $this->model()->where('id', $id)->first();
        $manager->update([
            'first_name'=>$data->first_name,
            'last_name'=>$data->last_name,
            'email'=>$data->email,
            'phone_no'=>$data->phone_no,
            'address'=>$data->address,
            'city'=>$data->city,
            'state'=>$data->state,
            'country'=>$data->country,
        ]);
    }


}