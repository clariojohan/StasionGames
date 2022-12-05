<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ids = $request->item_id;
        $items = CartItem::find($ids);
        return view('transactions.create', ['items' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $ids = $request->item_id;
        $cartItems = CartItem::find($ids);

        $user_id = auth()->user()->id;
        $transaction = Transaction::create([
            'status' => 'unpaid',
            'address' => $request->address,
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
        return redirect()->route('transactions.show', $transaction->id);
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
        return view('transactions.show', ['transaction' => $transaction]);
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
        $transaction = Transaction::find($id);
        $payment = Payment::create([
            'type' => $request->payment_type,
            'invoice' => Str::uuid()->toString()
        ]);
        $transaction->update([
            'status' => 'paid',
            'payment_id' => $payment->id,
        ]);
        return redirect()->route('transactions.show', $transaction->id);
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
