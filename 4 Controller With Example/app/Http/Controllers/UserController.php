<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        // return "hello";
        return view('user');
    }

    public function peramiter($peramiter)
    {
        return view('user',['peramiter'=>$peramiter]);
    }
   

}
