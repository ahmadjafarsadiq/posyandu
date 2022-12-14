<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class ProfileController extends Controller
{
    public function index()
    {
        $users = User::findorFail(Auth::id());
        return view('pages.profile', compact('users'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name'       => 'required|string|min:2|max:100',
            'email'      => 'email|unique:users,email,id',
            'old_password' => 'nullable|string',
            'password' => 'nullable|required_with:old_password|string|confirmed|min:8',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $photo = $request->photo->extension();
        $request->photo->move(public_path('users', $photo));

        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->photo = $photo;
        $user->save();
        return redirect('profile');


        //     $user = User::find($id);

        //     $user->name = $request->name;
        //     $user->email = $request->email;

        //     if ($request->filled('old_password')) {
        //         if (Hash::check($request->old_password, $user->password)) {
        //             $user->update([
        //                 'password' => Hash::make($request->password)
        //             ]);
        //         } else {
        //             return back()
        //                 ->withErrors(['old_password' => __('Please enter the correct password')])
        //                 ->withInput();
        //         }
        //     }

        //     if (request()->hasFile('photo')) {
        //         if ($user->photo && file_exists(storage_path('app/public/photos/' . $user->photo))) {
        //             Storage::delete('app/public/photos/' . $user->photo);
        //         }

        //         $file = $request->file('photo');
        //         $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
        //         $request->photo->move(storage_path('app/public/photos'), $fileName);
        //         $user->photo = $fileName;
        //     }


        //     $user->save();

        //     return back()->with('status', 'Profile updated!');
        // }
    }
}
