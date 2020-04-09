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

    function search (Request $r) { 
        if ($r->categoryId != 0 && $r->search == null) // selected category
            $data['product'] = Product::where('category_id', $r->categoryId)->paginate(12);
        elseif ($r->categoryId == 0 && $r->search == null ) // All
            $data['product'] = Product::orderBy('id', 'desc')->paginate(12);
        elseif ($r->categoryId != 0 && $r->search != null) // selected category
            $data['product'] = Product::where('name', 'LIKE', '%'.$r->search.'%')->where('category_id', $r->categoryId)->paginate(12);
        else
            $data['product'] = Product::where('name', 'LIKE', '%'.$r->search.'%')->paginate(12);
        // dd($product->all());
        return view('shopping.product.product', $data);
    }
}
