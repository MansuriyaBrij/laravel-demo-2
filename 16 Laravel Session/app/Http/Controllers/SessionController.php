<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        $fname = $request->input('fname');
        Session::put('fname', $fname);
        return redirect('Session');
    }
    public function Delete(Request $request)
    {
        session()->forget('fname');
        return redirect('Session');
    }
}
