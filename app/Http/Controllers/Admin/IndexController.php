<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\carbon;
use App\Model\Order;

class IndexController extends Controller
{
    public function getIndex () {
        $data['product'] = DB::table('product')->count();
        $data['user'] = DB::table('user')->count();
        $data['comment'] = DB::table('product_comment')->count();
        $data['order'] = DB::table('order')->count();

        $month_now = carbon::now()->format('m');
        $year_now = carbon::now()->format('Y');
        for($i = 1; $i <= $month_now ; $i++){
            $dl['Tháng '.$i] = Order::where('state','1')->whereMonth('updated_at',$i)->whereYear('updated_at',$year_now)->sum('total');
        }
        $data['dl'] = $dl;
        $data['ordered'] = order::where('state','2')->count();

        return view('admin.admin', $data);
    }
}
