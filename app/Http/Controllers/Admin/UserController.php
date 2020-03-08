<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\{AddUserRequest,EditUserRequest};

class UserController extends Controller
{
    public function getUser() {
        return view('admin.user.user');
    }
    public function getAddUser(){
        return view('admin.user.add_user');
    }
    public function postAddUser(AddUserRequest $request){
        
    }
    public function getEditUser(){
        return view('admin.user.edit_user');
    }
    public function postEditUser(EditUserRequest $request){

    }
}
