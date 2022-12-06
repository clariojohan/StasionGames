<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class viewController extends Controller
{
    public function viewIndex()
    {
        if (auth()->user()) {
            $name = auth()->user()->name;
        } else {
            $name = 'guest';
        }

        return view('index', compact('name'));
    }

    public function viewAboutUs()
    {
        return view('about-us');
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

    public function viewGameDetails($id)
    {
        
        return view('game-details');
    }

    public function viewCart()
    {
        return view('cart');
    }

    public function viewCheckout()
    {
        return view('checkout');
    }

    public function viewAdmin()
    {
        if (auth()->user()->role == 'admin') {
            return view('admin');
        } else
            abort(403);
    }
}
