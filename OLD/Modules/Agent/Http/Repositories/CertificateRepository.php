<?php

namespace Edaacil\Modules\Agent\Http\Repositories;

use Carbon\Carbon;
use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Certificate;
use Edaacil\Modules\Manager\Http\Models\Token;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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

        $data = request()->token;

        if ($data === "") {
            session()->flash('danger', "you don't have required details to view this page");
            return redirect(route('agent.dashboard.view'));
        }

        // Get token when the certificate has been created, this token is store in a session
        $certificateToken = "";
        if (Session::has('verify_certificate'))
        {
            $get_certificate_token = Session::get('verify_certificate');
            $explode = explode('/', $get_certificate_token);
            $certificateToken = $explode[1];
        }

        // Query Token table
        $token = Token::where('token', $data)->first();

        // Validate if the token has been used and determine if there is a token in a session
        if ($token == null || $token->status == "Used") {
            if ($data == $certificateToken) {

                $certificate = $this->model()::where('manager_id', auth()->user()->id)->with('manager')->latest()->first();
                $urlPath = $this->urlPath()->id;
                return view('agent::certificate.index', ['certificate' => $certificate, 'urlPath' => $urlPath]);

            } else {

                session()->flash('danger', 'Sorry, seem you are trying to access wrong/used token!');
                return redirect(route('agent.dashboard.view'));

            }
        }

        // Flush token stored in a session
        Session::forget('verify_certificate');

        $certificate = $this->model()::where('manager_id', auth()->user()->id)->with('manager')->latest()->first();
        $urlPath = $this->urlPath()->id;
        return view('agent::certificate.index', ['certificate' => $certificate, 'urlPath' => $urlPath]);
    }

    /**
     * Issue out certificate to client
     * @param array $data
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function certificateIssue(array $data)
    {
        DB::beginTransaction();

        try {
            $data = (object)$data;

            $url = url()->previous();
            $explode = explode('=', $url);
            $token = Token::where('token', $explode[1])->first();

            $certificate = $this->model()::create([
                'id'                    => $this->generateUuid(),
                'manager_id'            => auth()->user()->id,
                'token_id'              => $token->id,
                'amount'                => $data->amount ?: 'NILL',
                'phone_number'          => $data->phone_number,
                'certificate_number'    => $this->certificateNumber(),
                'policy_number'         => $this->policyNumber($data),
                'policy_name'           => $data->policy_number == 'PM' ? 'PRIVATE USE' : 'COMMERCIAL USE',
                'index_mark'            => $this->indexMarkNumber(),
                'plate_number'          => $data->plate_number,
                'chassis_number'        => $data->chassis_number,
                'make_of_vehicle'       => $data->make_of_vehicle,
                'name_of_policy_holder' => $data->name_of_policy_holder, #name_of_policy_holder,
                'registration_date'     => $this->registrationDate(),
                'expiring_date'         => $data->expiring_date,
                'type_of_cover'         => $data->type_of_cover,
            ]);

            $token->update([ 'status' => 'Used' ]);

            $this->getClientNumber($data);

            Session::put('verify_certificate', Str::random(36).'/'.$token->token);

            DB::commit();

            session()->flash('success', 'Certificate is ready to issue out');
            return redirect()->back();

        } catch (\Throwable $e) {
            DB::rollback();
            session()->flash('error', 'Oops! something went wrong');
            return redirect()->back();
        }
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

        $verifyCertificates = Certificate::with('token')->get();
        dd($verifyCertificates);
        foreach ($verifyCertificates as $verified) {
            $token = Token::where('id', $verified->token['id'])->update([
                'status' => 'Used'
            ]);
        }
        return $token;
    }

    /**
     * Getting full url for verification
     * @return mixed
     */
    private function urlPath()
    {
        $url = request()->fullUrl();
        $explode = explode('=', $url);
        return Token::where('token', $explode[1])->first();
    }

    /**
     * Generate policy number
     * @param $data
     * @return string
     */
    private function policyNumber($data)
    {
        // Get last policy number from database
        $certificate =  $this->model()::select('policy_number')->latest()->first();
        $oldPolicyNumber = $certificate !== null ? $certificate->policy_number : '00100920';

        $explode = explode('/', $oldPolicyNumber);
        $setPolicyNumber = $explode[0] == '00100920' ? $explode[0] : $explode[3] ;

        // increment the last digit
        $lastIncreament = str_pad($setPolicyNumber + 1, 8, 0, STR_PAD_LEFT);

        // Get the first three letters in the plate number
        $plateAbbr = substr($data->plate_number, 0, 3);

        $year = Carbon::now()->year;
        return 'ECIL/S/'.$data->policy_number.'/'.$lastIncreament.'/'.$plateAbbr.'/'.$year;
    }

    /**
     * Generate index mark number
     * @return string
     */
    private function indexMarkNumber()
    {
        // Get last index mark number from database
        $indexMark = $this->model()::select('index_mark')->latest()->first();
        $oldIndexNumber = $indexMark !== null ? $indexMark->index_mark : '00000';

        // increment the last digit
        return str_pad($oldIndexNumber + 1, 5, 0, STR_PAD_LEFT);
    }

    private function certificateNumber()
    {
        // Get last certificate number from database
        $certificateNumber = $this->model()::select('certificate_number')->latest()->first();
        $oldCertificateNumber = $certificateNumber !== null ? $certificateNumber->certificate_number : '0063111';

        // increment the last digit
        return str_pad($oldCertificateNumber + 1, 7, 0, STR_PAD_LEFT);
    }

}
