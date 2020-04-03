<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShoppingRegisterRequest extends FormRequest
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
            'reg-name' => 'required|min:5',
            'reg-phone'=> 'required|unique:client',
            'reg-address'=> 'required|min:5',
            'reg-email'=>'required|email|min:10|unique:client',
            'reg-password'=>'required|min:5',
            'reg-re-password'=> 'required|min:5',
        ];
    }
}
