<?php

namespace App\Http\Controllers;

use App\order;
use App\transaction;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
            $order = order::where('Status','Belum Bayar')->get();
            return view('layouts.Orderan', compact('order'));
    }
    public function OrderSelesai()
    {
            $transaction = transaction::all();
            return view('layouts.OrderSemua', compact('transaction'));
    }
    public function penjualan()
    {
            $order = order::where('id',auth()->user()->id)->get();
            $transaction = transaction::all();
            // $transaction = transaction::with('IdOrder', $order->Jumlah)->get();
            return view('layouts.Penjualan', compact('order', 'transaction'));
            // dd($order, $transaction);
    }

    public function create()
    {
        return view('layouts.DetailProductBeli');
    }


    public function storeOrderan(Request $request)
    {
        $order = new order;
        $order->IdProduk = $request->IdProduk;
        $order->id = $request->id;
        $order->Status = $request->Status;
        $order->Jumlah = $request->Jumlah;
        $order->HargaTotal = $request->Jumlah * $request->Harga;
        $order->save();
      // dd($order);

      return redirect('/OrderProduk')->with('status', 'Produk Berhasil Dimasukkan Ke Keranjang!!');
    }


    public function show(order $order)
    {

    }


    public function edit(order $order)
    {
        return view('layouts.OrderUpdate', compact('order'));
    }

    public function update(Request $request, order $order)
    {


    }

    public function destroy(order $order)
    {
        //
    }
}
