<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\{Product, User, Client, Order, Product_Order};

class IndexController extends Controller
{
    public function getIndex () {
        $data['product'] = DB::table('product')->count();
        $data['user'] = DB::table('user')->count();
        
        return view('admin.admin', $data);
    }
}
