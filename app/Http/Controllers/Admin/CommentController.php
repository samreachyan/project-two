<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\{Product, Product_Comment};


class CommentController extends Controller
{
    public function getCommnet() {
        // $data['product'] = Product::all();
        $data['comment'] = Product_Comment::paginate(15);
        return view('admin.comment.comment', $data);
    }
}
