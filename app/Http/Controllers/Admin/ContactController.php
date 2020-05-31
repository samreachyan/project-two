<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
    public function getContact(){
        $data['contact'] = Contact::orderBy('id', 'desc')->paginate(10);
        // dd($data);
        return view('admin.contact.contact', $data);
    }

    public function delContact($id) {
        Contact::destroy($id);
        return redirect('/admin/contact')->with('thongbao','Ban da xoa contact bao cao thanh cong!!!');
    }
}
