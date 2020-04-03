<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use Cart;

class IndexController extends Controller
{
    function getIndex(){
        $data['total'] = 0;
        if (!Cart::isEmpty()){
            foreach (Cart::getContent() as $item)
                $data['total'] += $item->price * $item->quantity;
        }

        $data['new_prd'] = Product::orderBy('id', 'desc')->take(10)->get();
        $data['featured_prd'] = Product::where('featured','1')->take(10)->get();
        // $data['cateOne'] = Category::where('id',1)->get();
        // $data['cateTwo'] = Product::where('category_id',2)->take(5)->get();
        // dd($data);
        return view('shopping.index', $data);
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
