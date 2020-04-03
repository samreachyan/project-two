<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ShoppingLoginRequest;
use App\Http\Requests\ShoppingRegisterRequest;
use App\Model\Client;

class LoginRegisterController extends Controller
{
    function getLoginRegister(){
        return view('shopping.login-register.login-register');
    }
    function Login(ShoppingLoginRequest $r){
        dd($r->all());
        echo 'click login client';
    }

    function Register( ShoppingRegisterRequest $r){
        if ($r->reg-password == $r->reg-re-password) {
            $client = new Client;
            $client->name = $r->reg-name;
            $client->address = $r->reg-address;
            $client->phone = $r->reg-phone;
            $client->email = $r->reg-email;
            $client->password = $r->reg-password;
            $client->save();

            return redirect('/my-account.hmtl');
        } else {
            return redirect()->back()->with('thongbao', 'Create new account failed...!');
        }

    }

    function Account(){
        return view('shopping.login-register.account');
    }
}
