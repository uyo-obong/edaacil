<?php

namespace Edaacil\Modules\Agent\Http\Repositories;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Token;

class AgentRepository extends BaseRepository
{

    /**
     * @return string
     */
    function model()
    {
        return Token::class;
    }

    /**
     * Verify token brfore you can access certificate page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function certificate()
    {
        $data = request()->all();

        if ($data === []) {
            session()->flash('danger', "you don't have required details to view this page");
            return redirect(route('agent.dashboard.view'));
        }

        $token = $this->model()::where('token', $data['token'])->where('status', 'Unused')->first();

        if ($token === null) {
            session()->flash('danger', 'Sorry, seem you are trying to access wrong/used token!');
            return redirect(route('agent.dashboard.view'));
        }
        return view('agent::certificate.index');
    }

}