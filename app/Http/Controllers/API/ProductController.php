<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    public function getProduct(){
        // $data = Product::paginate(5);
        return response()->json(Product::get()->take(3) , 200);
    }
}
