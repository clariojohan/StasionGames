<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class GameController extends Controller
{
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
}
