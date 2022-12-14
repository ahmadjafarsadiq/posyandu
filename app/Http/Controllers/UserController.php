<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $Users = User::paginate(20);
        return view('pages.admin.user', [
            'user' => $Users
        ]);
    }
}
