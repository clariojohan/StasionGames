<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\CartController;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $transactions = Transaction::where('user_id', $user_id)->get();

        return view('transactions.index', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->action === 'delete') {
            $cart_controller = new CartController;
            $cart_controller->destroy($request->item_id);
            return redirect('/carts');
        } else {
            $ids = $request->item_id;
            if ($ids === null) {
                return redirect('/carts');
            }
            $items = CartItem::find($ids);

            $totalCart = 0;

            foreach ($items as $item) {
                $totalCart += $item->game->price * $item->quantity;
            }

            return view('transactions.create', ['items' => $items, 'totalCart' => $totalCart]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s,]+$/',
            'delivery' => 'required|string|max:64|in:JNE,JNT,SiCepat',
        ]);

        $ids = $request->item_id;
        $cartItems = CartItem::find($ids);

        $user_id = auth()->user()->id;

        $transaction = Transaction::create([
            'status' => 'unpaid',
            'address' => $request->address,
            'delivery' => $request->delivery,
            'user_id' => $user_id,
        ]);

        $transactionItems = [];
        foreach ($cartItems as $key => $value) {
            $transactionItems[] = [
                'quantity' => $value->quantity,
                'type' => $value->type,
                'transaction_id' => $transaction->id,
                'game_id' => $value->game_id
            ];
        }
        TransactionItem::insert($transactionItems);

        $transaction_items = TransactionItem::where('transaction_id', $transaction->id)->get();

        $totalCart = 0;

        foreach ($transaction_items as $item) {
            $totalCart += $item->game->price * $item->quantity;
        }

        $transaction->update([
            'total_price' => $totalCart
        ]);

        $cartItems->each->delete();

        if ($request->action === 'pay-now') {
            return redirect()->route('transactions.show', $transaction->id);
        } else if ($request->action === 'pay-later') {
            return redirect()->route('transactions.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);

        $user = auth()->user();

        if ($user->id !== $transaction->user_id) {
            return view('andajelek');
        }

        return view('transactions.payment', ['transaction' => $transaction]);
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
    // change transaction status from unpaid to paid when the transaction is paid
    public function update(Request $request, $id)
    {
        $request->validate([
            'payment_type' => 'required|string|max:64|in:Bank,E-Money',
        ]);

        $transaction = Transaction::find($id);

        $payment = Payment::create([
            'type' => $request->payment_type,
            'invoice' => Str::uuid()->toString()
        ]);
        $transaction->update([
            'status' => 'paid',
            'payment_id' => $payment->id,
        ]);
        return redirect()->route('transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
