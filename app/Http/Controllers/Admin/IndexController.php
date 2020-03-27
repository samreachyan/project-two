<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function getIndex () {
        $data['product'] = DB::table('product')->count();
        $data['user'] = DB::table('user')->count();
        $data['comment'] = DB::table('product_comment')->count();
        $data['order'] = DB::table('order')->count();
        return view('admin.admin', $data);
    }
}
