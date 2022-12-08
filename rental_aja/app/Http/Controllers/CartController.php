<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Game;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $cart = Cart::where('user_id', $user_id)->first();
        $cart_items = CartItem::with(['game'])->where('cart_id', $cart->id)->get();
        return view('carts.index', ['cart_items' => $cart_items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;

        $request->validate([
            'quantity' => 'required|integer|between:1,10',
            'type' => 'required|string|in:Digital,Physical',
            'game_id' => 'required|integer|exists:games,id',
        ]);

        $cart = Cart::where('user_id', $user_id)->first();
        if (!$cart) {
            return Redirect::back()->withErrors('Cart not found');
        }

        CartItem::create([
            'quantity' => $request->quantity,
            'type' => $request->type,
            'game_id' => $request->game_id,
            'cart_id' => $cart->id
        ]);
        return redirect('/carts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ids)
    {
        if (!auth()->user()) {
            return abort(403);
        }

        foreach ($ids as $key => $id) {
            $cart_item = CartItem::find($id);
            $cart_item->delete();
        }

        return redirect('/carts');
    }
}
