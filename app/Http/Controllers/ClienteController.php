<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request){
        $data = [];

        return view("register", $data);
    }
}
