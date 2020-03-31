<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;

class ProductController extends Controller
{
    function getProduct() {
        return view('shopping.product.product');
    }

    function getProductDetail($id) {
        $data['prd'] = Product::find($id);
        // $data['cate'] = Product::where('category_id',$data['prd']->product_category->id)->toArray();
        $data['new_prd'] = Product::orderBy('id', 'desc')->take(10)->get();
        // dd($data);
        return view('shopping.product.product-detail', $data);
    }
}
