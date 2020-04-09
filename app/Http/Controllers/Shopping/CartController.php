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
        $data['total'] = 0;
        if (!Cart::isEmpty()){
            foreach (Cart::getContent() as $item)
                $data['total'] += $item->price * $item->quantity;
        }
        
        // dd($data);
        return view('shopping.cart.cart', $data);
    }

    function addCart(Request $r, $id) {
        $prd = Product::find($id);

        Cart::add(array(
            'id' => $prd->id, 
            'name' => $prd->name, 
            'quantity' => $r->quantity, 
            'price' => $prd->price,  
            'img' => $prd->img,
            'attributes' => array(
                'img' => $prd->img,
            )
        ));

        return redirect('/cart.html');
    }

    function addCartQuick($id) {
        $prd = Product::find($id);

        Cart::add(array(
            'id' => $prd->id, 
            'name' => $prd->name, 
            'quantity' => '1', 
            'price' => $prd->price,  
            'img' => $prd->img,
            'attributes' => array(
                'img' => $prd->img,
            )
        ));
        return 'success';
    }

    function delCart($id) {
        Cart::remove($id);
        return 'success';
    }

    function updateCart($id, $qty){
        // Cart::update($id, $qty);
        // dd($qty);
        Cart::update($id, array(
            'quantity' => $qty,
        ));
        return 'success';
    }

}
