<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;

class LoginController extends Controller
{
    public function getLogin(){
        return view('admin.login.login');
    }
    public function postLogin(loginRequest $request) {
        
    }
}
