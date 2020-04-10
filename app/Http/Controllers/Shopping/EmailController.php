<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\Subscribe;

class EmailController extends Controller
{
    function getSubscribe(Request $r) {
        $email = $r->email;

        Mail::to($email)->send(new Subscribe($email));
        // dd('email sent');
        return redirect('/index.html');
    }
}
