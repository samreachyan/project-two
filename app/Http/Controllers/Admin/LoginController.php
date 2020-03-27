<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function getLogin(){
        return view('admin.login.login');
    }
    public function postLogin(loginRequest $request) {
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('/admin');
        } else {
            return redirect()->back()->with('thongbao','Tài khoản không hợp lệ !')->withInput();
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
