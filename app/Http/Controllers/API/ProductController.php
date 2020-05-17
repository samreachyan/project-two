<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    function getProduct(){
        $data = Product::take(3)->get();
        return response()->json($data, 200);
    }
}
