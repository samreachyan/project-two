<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            //unique:table_db_name
           'user_email'=>'required|email|unique:user,email,'.$this->id.',id',
           'password'=>'required|min:5',
           'new_password'=>'required|min:5',
           'user_full'=>'required|min:4',
           'user_phone'=>'required|min:7,'.$this->id.',id',
           'user_address'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'user_email.required'=>'Email Không được để trống!',
            'user_email.email'=>'Email Không đúng định dạng!',
            'user_email.unique'=>'Email Đã tốn tại!',
            'password.required'=>'Mật khẩu Không được để trống!',
            'password.min'=>'Mật khẩu không được nhỏ hơn 5 ký tự!',
            'new_password.required'=>'Mật khẩu Không được để trống!',
            'new_password.min'=>'Mật khẩu không được nhỏ hơn 5 ký tự!',
            'user_full.required'=>'Họ tên Không được để trống!',
            'user_full.min'=>'Họ tên Không được nhỏ hơn 4 ký tự!',
            'user_phone.required'=>'số điện thoại Không được để trống!',
            'user_phone.min'=>'Số điện thoại Không được nhỏ hơn 7 ký tự!',
            'user_address.required'=>'Address không được để trống!'
        ];
    }
}
