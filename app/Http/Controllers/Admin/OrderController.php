<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\Product_Order;
class OrderController extends Controller
{
    function getOrder () {
        $data['order'] = Order::where('state', 2)->orderBy('id', 'asc')->get();
        return view('admin.order.order', $data);
    }
    function getProceed () {
        $data['order'] = Order::where('state', 1)->orderBy('id', 'desc')->get();
        return view('admin.order.proceed', $data);
    }

    function getProceedDetail ($id){
        $data['order'] = Order::where('state',1)->orderBy('id', 'desc')->get();
        return view('admin.order.proceed', $data);
    }

    function getDetailProduct ($id) {
        $data['order'] = Order::find($id);
        // dd($data);
        return view('admin.order.detailorder', $data);
    }
    
    function getComfirme($id) {
        $order = Order::find($id);
        if ( $order->state == 2) {
            $order->state = 1;
            $order->save();
            return redirect('/admin/order/proceed')->witht('thongbao', 'Bạn đã thành toàn đơn hàng thanh công!');
        } else {
            return redirect('/admin/order')->with('thongbao', 'Bạn đã thành toàn đơn hàng xong!');
        }
        
    }
}
