<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Model\Contact;

class ContactController extends Controller
{
    public function getContact(){
        return view('shopping.contact.contact');
    }

    public function postContact(ContactRequest $r){
        // dd($r);
        $contact = new Contact;
        $contact->name = $r->customerName;
        $contact->email = $r->customerEmail;
        $contact->subject = $r->contactSubject;
        $contact->message = $r->contactMessage;
        $contact->save();

        return redirect()->back()->with('thongbao', 'You sent reported contact to admin page. Thanks you!!!');
    }
}
