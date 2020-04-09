<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Cart;
use App\Model\Order;
use App\Model\Product_Order;

class CheckoutController extends Controller
{
    function getCheckout(){
        $data['cart'] = Cart::getContent();
        $data['total'] = 0;
        if (!Cart::isEmpty()){
            foreach (Cart::getContent() as $item)
                $data['total'] += $item->price * $item->quantity;
        }
        return view('shopping.checkout.checkout', $data);
    }

    function postCheckout(CheckoutRequest $r){
        // dd($r);
        $order = new Order();
        $order->full = $r->full_name;
        $order->email = $r->order_email;
        $order->phone = $r->order_phone;
        $order->address = $r->detail_address." ".$r->address." ".$r->city;
        $order->state = 2;

        $total = 0;
        foreach(Cart::getContent() as $item){
            $total += $item->price * $item->quantity;
        }
        $order->total = $total;
        $order->save();

        // check value Cart to Product_Order
        foreach(Cart::getContent() as $row){
            $prd_order = new Product_Order();
            $prd_order->code = $row->id;
            $prd_order->name = $row->name;
            $prd_order->price = $row->price;
            $prd_order->quantity = $row->quantity;
            $prd_order->img = $row->attributes->img;
            $prd_order->order_id = $order->id;
            $prd_order->save();
        }

        Cart::clear();
        return redirect()->back();
    }
}
