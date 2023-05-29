<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        return view('layouts.Product', compact('product'));
        // dd($product);
    }



    public function create()
    {
        return view('layouts.CreateProduct');
    }


    public function store(Request $request)
    {
    //   $this->validate($request,[
    //       'NamaPaketRumah' => 'required|max:50',
    //       'KetegoriRumah' => 'required|max:10',
    //       'LuasBangun' => 'required|numeric|between:1,9999999999',
    //       'JumlahLantai' => 'required|numeric|between:1,9999999999',
    //       'TinggiBangun' => 'required|numeric|between:1,9999999999',
    //       'JumlahKamar' => 'required|numeric|between:1,9999999999',
    //       'RangeHarga' => 'required|numeric|between:1,9999999999',
    //       'Keterangan' => 'required',
    //       'WaktuPembuatan' => 'required|numeric|between:1,9999999999',
    //       'GamabarRumah' => 'required|mimes:jpg,jpeg,png,webp',
    // ]);

      $product = Product::create($request->all());
      if($request->IdUser)
      {
       $product->IdUser = auth()->user()->id;
      }
      if($request->hasFile('Foto'))
        {
        $request->file('Foto')->move('storage/images/',$request->file('Foto')->getClientOriginalName());
        $product->Foto=$request->file('Foto')->getClientOriginalName();
        $product->save();
        }
        // dd($request);
      return redirect('/AkunPengguna')->with('status', 'Data Produk Berhasil Ditambahkan!!');

  }



    public function show(Product $Product)
    {
      // dd($Product);
        return view('layouts.DetailProductBeli',compact('Product'));
    }

    public function edit(Product $Product)
    {
      return view('layouts.EditProduct',compact('Product'));
      // dd($Product);
    }

    public function update(Request $request, Product $Product)
    {
  
    $updateProduct = Product::find($Product->IdProduk);
    $updateProduct->update($request->all());
    if($request->hasFile('Foto'))
          {
          $request->file('Foto')->move('storage/images/',$request->file('Foto')->getClientOriginalName());
          $updateProduct->Foto=$request->file('Foto')->getClientOriginalName();
          $updateProduct->save();
          }
    return redirect('/AkunPengguna')->with('status', 'Data Produk Berhasil Dirubah!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product)
    {
      Product::destroy($Product->IdProduk);
    return redirect('/AkunPengguna')->with('status', 'Data Produk Berhasil DIHAPUS!!');
    }
}
