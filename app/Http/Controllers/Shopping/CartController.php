<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use Cart;

class CartController extends Controller
{
    function getCart() {
        $data['cart'] = Cart::getContent();
        // dd($data);
        return view('shopping.cart.cart', $data);
    }

    function addCartQuick($id) {
        $prd = Product::find($id);

        Cart::add([
            'id' => $prd->id, 
            'name' => $prd->name, 
            'quantity' => '1', 
            'price' => $prd->price,  
            'img' => $prd->img,
            'attributes' => array(
                'img' => $prd->img,
            )
        ]);
        return redirect()->back();
    }

    function delCart($id) {
        Cart::remove($id);
        return 'success';
    }

    function updateCart($id, $qty){
        Cart::update($id, $qty);
        return 'success';
    }

}
