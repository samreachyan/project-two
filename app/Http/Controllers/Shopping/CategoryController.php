<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\{Product,};
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function getCategory ($id){
        $data['product'] = Product::where('category_id', $id)->paginate(12);
        // dd($data);
        return view('shopping.product.product', $data);
    }
}
