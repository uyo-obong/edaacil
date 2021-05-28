<?php

namespace Edaacil\Modules\Agent\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentUpdateProfile extends FormRequest
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
            'first_name'=> 'required',
            'last_name'=> 'required',
            'phone_no'=> 'required',
            'address'=> 'required',
//            'profile_image'=> 'image|nullable|mimes:jpeg,png,jpg,gif|max:1999',


        ];
    }
}
