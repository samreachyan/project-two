<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    function getWishlist(){
        return view('shopping.wishlist.wishlist');
    }
}
