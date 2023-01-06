<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DaBalitaController extends Controller
{
    public function index()
    {
        $daftar = Pendaftaran::all();
        return view('admin.user')->with('Pendaftaran', $daftar);
    }
}
