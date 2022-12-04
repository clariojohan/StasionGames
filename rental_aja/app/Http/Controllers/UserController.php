<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function editAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->avatar;

        $hashName = $file->hashName();
        // $extension = $file->extension();

        $imageName = time() . "-" . $hashName;

        $file->move(public_path('storage/images/avatar/'), $imageName);

        $user = User::find(auth()->user()->id);
        $user->update([
            'avatar' => $imageName
        ]);

        return redirect()->back();
    }
}
