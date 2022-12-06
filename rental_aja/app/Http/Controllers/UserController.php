<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function editAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->avatar;
        
        // $file->move(public_path('storage/images/avatar/'), $imageName);

        // Storage::putFile will update the original file name to a random string, 
        // and store it in the storage folder, 
        // and return the path
        $dbImagePath = Storage::putFile('images/avatar', $file);


        $user = User::find(auth()->user()->id);
        $user->update([
            'avatar' => $dbImagePath
        ]);

        return redirect()->back();
    }

    public function viewAccount()
    {
        $user = User::find(auth()->user()->id);
        $name = $user->name;
        $email = $user->email;
        $phone = $user->phone;
        $address = $user->address;
        $avatar = $user->avatar;
        return view('account', compact('name', 'email', 'phone', 'address', 'avatar'));
    }
}
