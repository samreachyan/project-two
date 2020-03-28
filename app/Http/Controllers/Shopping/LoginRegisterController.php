<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    function getLoginRegister(){
        return view('shopping.login-register.login-register');
    }
}
