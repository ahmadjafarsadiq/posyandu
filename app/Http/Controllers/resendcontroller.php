<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class resendcontroller extends Controller
{
    public function show(Request $request)
    {
        return view('auth.verify');
    }
}
