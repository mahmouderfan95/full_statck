<?php

namespace App\Http\Requests\BackEnd\users;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'firstName' => 'required',
            'lastName'  => 'required',
            'image'     => 'image',
            'email'     => 'required|email',
            'phoneNumber'   => 'required',
            'is_admin'      => 'required'
        ];
    }
}
