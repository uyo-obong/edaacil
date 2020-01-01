<?php

namespace Edaacil\Modules\Agent\Http\Repositories;

use Carbon\Carbon;
use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Certificate;

class AgentRepository extends BaseRepository
{

    /**
     * @return string
     */
    function model()
    {

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
}