<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function AkunPengguna(Product $product)
    {
      $product = Product::where('IdUSer','=',auth()->user()->id)->get();
      return view ('layouts.akun', compact('product'));
      // dd($product);
    }

    public function EditAkunPengguna(User $User)
    {
      $User = User::all()->where('id','=',auth()->user()->id)->first();
      return view ('layouts.AkunEdit', compact('User'));
      // dd($User);
    }

    public function show(Product $Product)
    {
      // dd($Product);
        return view('layouts.DetailProductEdit',compact('Product'));
    }

    public function UpdateAkun(Request $request, User $User)
    {
      $this->validate($request,[
            'name' => 'required|max:20',
            'username' => 'required|max:20',
            'email' => 'required|email',

      ]);

      $User = User::find($User->id);
      $User->update($request->all());
      return redirect('/AkunPengguna')->with('status', 'Data Akun Berhasil Diperbarui');
      // dd($User);
    }
}
