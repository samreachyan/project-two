<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    public function getProduct () {
        $data['product'] = Product::paginate(5);
        return view('admin.product.product', $data);
    }
    public function getAddProduct () {
        return view('admin.product.add_product');
    }
    public function StatusUpdate($id){
        $prd = Product::find($id);
        if ($prd->state == 1) {
            $prd->state = 0;
        } else {
            $prd->state = 1;
        }
        $prd->save();
        return redirect()->back()->with('thongbao', 'You changed status product id '.$id);
    }
    public function postAddProduct(request $request){
        $request->validate([
            'code'=>'required|min:3',
            'name'=>'required|min:3',
            'price'=>'required|numeric',
            'info'=>'required|min:10',
            'describe'=>'required|min:10',
            'img'=>'image'
        ],[
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
            'img.image'=>' Ảnh sản phẩm không đúng định dạng'
        ]);
    }
    public function getEditProduct () {
        return view('admin.product.edit_product');
    }
}
