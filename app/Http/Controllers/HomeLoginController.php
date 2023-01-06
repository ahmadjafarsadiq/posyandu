<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Storage;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function index(Request $request)
    {
        return view('pages.homelogin');
    }
}
