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
    public function postCategory(AddCategoryRequest $request){
        
    }
        
}
