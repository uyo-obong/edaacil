<?php

namespace Edaacil\Modules\Agent\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificateIssueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "phone_number"          => "required",
            "amount"                => "required",
            "plate_number"          => "required|string",
            "chassis_number"        => "required",
            "make_of_vehicle"       => "required",
            "name_of_policy_holder" => "required",
            "expiring_date"         => "required",
            "type_of_cover"         => "required",
        ];
    }
}
