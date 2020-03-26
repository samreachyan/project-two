<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Model\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function getCategory (){
        $data['category'] = Category::all()->toArray();
        // dd($data);
        return view('admin.category.category', $data);
    }
    public function postCategory(AddCategoryRequest $r){
        if (GetLevel(Category::all()->toarray(), $r->parent,1 ) > 2){
            return redirect('/admin/category')->withErrors(['name'=>'Category không hỗ trợ danh mục lớn hơn 2 cấp!!']);
        }
        // dd($r->all());
        else {
            $cate = new Category;
            $cate->name = $r->name;
            $cate->slug = Str::slug($r->name, '-');
            $cate->parent = $r->parent;
            $cate->save();
            return redirect('/admin/category')->with('thongbao','Đã thêm danh mục thành công! : '.$r->name);
        }
        
        
    }

    public function editCategory ($id){
        $data['category'] = Category::all()->toArray();
        $data['cate'] = Category::find($id);

        return view('admin.category.edit_category', $data);
    }

    public function PosteditCategory($id, EditCategoryRequest $r){
        // dd($r->toarray());
        if (GetLevel(Category::all()->toarray(), $r->parent,1 ) > 2){
            return redirect('/admin/category')->withErrors(['name'=>'Category không hỗ trợ danh mục lớn hơn 2 cấp!!']);
        } else {
            $cate = Category::find($id);
            $cate->name = $r->name;
            $cate->slug = Str::slug($r->name, '-');
            $cate->parent = $r->parent;
            $cate->save();
            return redirect('/admin/category')->with('thongbao','Đã sửa danh mục thành công! : '.$r->name);
        }
    }

    public function getDelete ($id){
        Category::destroy($id);
        return redirect('/admin/category')->with('thongbao','Đã xóa thành công !!');
    }
    
        
}
