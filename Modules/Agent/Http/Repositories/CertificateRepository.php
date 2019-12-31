<?php

namespace Edaacil\Modules\Agent\Http\Repositories;

use Carbon\Carbon;
use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Certificate;
use Edaacil\Modules\Manager\Http\Models\Token;
use Edaacil\Modules\Manager\Http\Requests\CertificateIssueRequest;

class CertificateRepository extends BaseRepository
{

    /**
     * @return string
     */
    function model()
    {
        return Certificate::class;
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

        $token = Token::where('token', $data['token'])->where('status', 'Unused')->first();

        if ($token === null || $this->checkUsedToken() === true) {
            session()->flash('danger', 'Sorry, seem you are trying to access wrong/used token!');
            return redirect(route('agent.dashboard.view'));
        }
        $certificate = $this->model()::where('manager_id', auth()->user()->id)->with('manager')->latest()->first();
        return view('agent::certificate.index', ['certificate' => $certificate]);
    }

    /**
     * Issue out certificate to client
     * @param array $data
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function certificateIssue(array $data)
    {
        $data = (object)$data;

        $verifyEmail = $this->model()::where('email', $data->email)->first();

        if ($verifyEmail) {
            session()->flash('danger', 'Oopz! email has already been used');
            return redirect()->back();
        }

        $url = url()->previous();
        $explode = explode('=', $url);

        $certificate = $this->model()::create([
            'id'                    => $this->generateUuid(),
            'manager_id'            => auth()->user()->id,
            'token_id'              => $explode[1],
            'email'                 => $data->email,
            'phone_number'          => $data->phone_number,
            'certificate_number'    => '7383736',
            'policy_number'         => '82726383',
            'index_mark'            => '723834394',
            'plate_number'          => $data->plate_number,
            'chassis_number'        => $data->chassis_number,
            'make_of_vehicle'       => $data->make_of_vehicle,
            'name_of_policy_holder' => $data->name_of_policy_holder,
            'registration_date'     => $this->registrationDate(),
            'expiring_date'         => $data->expiring_date,
            'type_of_cover'         => $data->type_of_cover,
        ]);

        if ($certificate)
            session()->flash('success', 'Certificate is ready to issue out');
        return redirect()->back();
    }

    /**
     * Get current data from carbon
     * @return string
     */
    private function registrationDate()
    {
        $now = Carbon::now();
        return $now->day.'/'.$now->month.'/'.$now->year;
    }

    /**
     * Verify if the token has been used in any certificate before
     * @return array
     */
    private function checkUsedToken()
    {
        $token = [];

        $verifyCertificates = Certificate::all();
        foreach ($verifyCertificates as $verified) {
            $token = Token::where('token', $verified->token_id)->update([
                'status' => 'Used'
            ]);
        }
        return $token;
    }

}