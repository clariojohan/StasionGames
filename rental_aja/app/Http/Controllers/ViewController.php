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


    public function viewGameDetails($id)
    {
        $game = DB::table('games')->where('id', $id)->first();

        $title = $game->title;
        $release_date = $game->release_date;
        $description = $game->description;
        $rating = $game->rating;
        $price = $game->price;

        $publisher = DB::table('publishers')->where('id', $game->publisher_id)->first();
        $publisher_name = $publisher->name;

        return view('game-details', compact('title', 'release_date', 'description', 'rating', 'price', 'publisher_name'));
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
