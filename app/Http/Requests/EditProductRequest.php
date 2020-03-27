<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
             'code'=>'required|min:3|unique:product,code,'.$this->id.',id',
             'name'=>'required|min:3|unique:product,name,'.$this->id.',id',
             'price'=>'required|numeric',
             'img'=>'image'
        ];
    }
    public function messages()
    {
        return [
            'code.required'=>'Không được để trống Mã sản phẩm',
            'code.min'=>'Mã Sản phẩm không được nhỏ hơn 3 ký tự',
            'code.unique'=>'Mã sản phẩm không được trung',
            'name.required'=>'Không được để trống Tên sản phẩm',
            'name.min'=>'Tên sản phẩm không được nhỏ hơn 3 ký tự',
            'name.unique'=>'Tên sảm phẩm không được trung tên khác',
            'price.required'=>'Không được để trống Giá sản phẩm',
            'price.numeric'=>'Giá sản phẩm không đúng định dạng',
            'img.image'=>' Ảnh sản phẩm không đúng định dạng',
        ];
    }
}
