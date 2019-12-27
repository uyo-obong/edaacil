<?php

namespace Edaacil\Modules\Manager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgentAccount extends FormRequest
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
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required|string',
            'phone_number'=>'required|string',
            'address'=>'required|string',
            'city'=>'required|string',
            'state'=>'required|string',
            'country'=>'required|string',
            'password'=>'nullable',
        ];
    }
}
