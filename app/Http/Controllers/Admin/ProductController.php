<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\{Product, Category};
use App\Http\Requests\{AddProductRequest, EditProductRequest};
use Illuminate\Support\Str;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProduct () {
        $data['product'] = Product::orderBy('id','desc')->paginate(5);
        return view('admin.product.product', $data);
    }
    public function getAddProduct () {
        $data['category'] = Category::all()->toArray();
        return view('admin.product.add_product', $data);
    }
    public function StatusUpdate($id){
        $prd = Product::find($id);
        if ($prd->state == 1) {
            $prd->state = 0;
        } else {
            $prd->state = 1;
        }
        $prd->save();
        return redirect()->back()->with('thongbao', 'You changed status product id '.$id);
    }

    public function postAddProduct(AddProductRequest $request){
        $now = Carbon::now()->format('d-m-Y');
        // echo $now;
        // dd($request->all());
        $prd = new Product;
        $prd->code = $request->code;
        $prd->category_id = $request->category;
        $prd->name = $request->name;
        $prd->price = $request->price;
        $prd->state = $request->state;
        $prd->featured = $request->featured;
        $prd->info = $request->info;
        $prd->describe = $request->describe;
        $prd->slug = Str::slug($request->name, '-');

        if ($request->hasFile('img')) {
            $file = $request->img;
            $fileName = Str::slug($request->name,"-").'-'.$now.'.'.$file->getClientOriginalExtension();
            $file->move('backend/img/', $fileName);
            $prd->img = $fileName;
        } else {
            $prd->img = 'no-img.jpg';
        }
        $prd->save();

        return redirect('/admin/product')->with('thongbao', 'You add new product successfully');
    }

    public function getEditProduct ($id) {
        $data['category']= Category::all()->toarray();
        $data['product'] = Product::find($id);
        // dd($data);
        return view('admin.product.edit_product', $data);
    }
    public function postEditProduct ($id, EditProductRequest $request){
        // dd($request->all());

        $prd = Product::find($id);
        $prd->code = $request->code;
        $prd->category_id = $request->category;
        $prd->name = $request->name;
        $prd->price = $request->price;
        $prd->state = $request->state;
        $prd->featured = $request->featured;
        $prd->info = $request->info;
        $prd->describe = $request->describe;
        $prd->slug = Str::slug($request->name, '-');

        if ($request->hasFile('img')) {
            if ($prd->img != "no-img.jpg"){
                // delete old img from workspace
                unlink('backend/img/'.$prd->img);
            }

            $file = $request->img;
            $fileName = Str::slug($request->name,"-").'-'.$now.'.'.$file->getClientOriginalExtension();
            $file->move('backend/img/', $fileName);
            $prd->img = $fileName;
        }

        $prd->save();
        
        return redirect('/admin/product')->with('thongbao', 'You edited product successfully');
    }

    public function deleteProduct ($id){
        Product::destroy($id);
        return redirect('/admin/product')->with('thongbao', 'You deleted a product id '.$id);
    }
}
