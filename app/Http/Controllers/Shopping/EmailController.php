<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    function getSubscribe(Request $r) {
        // dd($r->all());
        $email = $r->email;

        Mail::send('shopping.mail.subscribe', $email, function ($message) {
            $message->from('samreachyan@gmail.com', 'SAMREACH SHOP');
            $message->to($email, 'Subscriber');
            $message->subject('Subject');
        });

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        }else{
            return response()->success('Great! Successfully send in your mail');
        }

        // \Mail::to("'".$email."'")->send(new Subscribe($email));
        dd('email sent');
        // return redirect('/index.html');
    }
}
