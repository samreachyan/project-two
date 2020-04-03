<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Wishlist;

class WishlistController extends Controller
{
    function getWishlist(){
        $data['wishlist'] = Wishlist::get();
        // dd($data);
        return view('shopping.wishlist.wishlist', $data);
    }
}
