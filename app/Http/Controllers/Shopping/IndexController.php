<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function getIndex(){
        return view('shopping.index');
    }

    function getAboutUs() {
        return view('shopping.about.about-us');
    }
    function getFaq() {
        return view('shopping.about.faq');
    }
    function get404() {
        return view('shopping.404.404');
    }
}
