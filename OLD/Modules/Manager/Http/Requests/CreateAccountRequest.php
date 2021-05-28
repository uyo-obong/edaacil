<?php

namespace Edaacil\Modules\Manager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:managers',
            'phone_no'   => 'required',
            'address'    => 'required',
            'city'       => 'required',
            'state'      => 'required',
            'country'    => 'required',
        ];

    }
}
