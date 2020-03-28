<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getProduct() {
        return view('shopping.product.product')
    }

    function getProductDetail() {
        return view('shopping.product.product-detail')
    }
}
