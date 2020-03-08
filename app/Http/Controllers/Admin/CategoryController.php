<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddCategoryRequest;

class CategoryController extends Controller
{
    public function getCategory (){
        return view('admin.category.category');
    }
    public function postCategory(request $request){
        $request->validate([
            'name'=>'required|unique:category'
        ],[
            'name.required'=>'Tên danh mục không được để trống',
            'name.unique'=> 'Tên danh mục đã tồn tại'
        ]);
    }
        
}
