<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formposyandu(Request $request)
    {
        return view('pages.form');
    }
    public function formpilihan(){
        return view('pages.form');
    }
}
