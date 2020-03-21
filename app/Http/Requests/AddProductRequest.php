<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'code'=>'required|min:3',
            'name'=>'required|min:3',
            'price'=>'required|numeric',
            'info'=>'required|min:10',
            'describe'=>'required|min:10',
            'img'=>'image'
        ];
    }
    public function messages()
    {
        return [
            'code.required'=>'Không được để trống Mã sản phẩm',
            'code.min'=>'Mã Sản phâmr không được nhỏ hơn 3 ký tự',
            'name.required'=>'Không được để trống Tên sản phẩm',
            'name.min'=>'Tên sản phẩm không được nhỏ hơn 3 ký tự',
            'price.required'=>'Không được để trống Giá sản phẩm',
            'price.numeric'=>'Giá sản phẩm không đúng định dạng',
            'info.required'=> 'Không được để trống thong tin sản phẩm',
            'info.min'=> 'Thoong tin sản phẩm không được nhỏ hơn 10 ký tự',
            'describe.required' => 'Không được để trống mo ta sản phẩm',
            'describe.min'=> 'Describe sản phẩm không được nhỏ hơn 10 ký tự',
            'img.image'=>' Ảnh sản phẩm không đúng định dạng',
        ];
    }
}
