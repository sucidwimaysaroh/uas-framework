<?php

namespace App\Http\Controllers;

use App\transaction;
use App\order;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = transaction::all();
        return view('layouts.OrderSemua', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, order $order)
    {
      $transaction = transaction::create($request->all());
      if($request->hasFile('FotoBukti'))
        {
        $request->file('FotoBukti')->move('storage/images/',$request->file('FotoBukti')->getClientOriginalName());
        $transaction->FotoBukti=$request->file('FotoBukti')->getClientOriginalName();
        $transaction->save();
        }

        $order = order::find($order->IdOrder);
        $order->Status = 'Sudah Bayar';
        $order->save();


        // dd($order,$transaction);
      return redirect('/SemuaOrder')->with('status', 'Produk Telah dipesan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(transaction $transaction)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
