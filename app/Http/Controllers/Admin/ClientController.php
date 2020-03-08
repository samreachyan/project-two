<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getClient () {
        return view('admin.client.client');
    }

    public function getAddClient () {
        return view('admin.client.add_client');
    }

    public function getEditClient() {
        return view('admin.client.edit_client');
    }
}
