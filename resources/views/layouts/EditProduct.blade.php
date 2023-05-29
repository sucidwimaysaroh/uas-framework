@extends('template.master')

@section('content')
<section class="class-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
            </div>
            <div class="col-lg-8">
                <div class="class__sidebar">
                    <div style="text-align: center;">
                        <h5 style="margin-bottom: 2%;">Edit Produk</h5>
                    </div>
                    <form method="POST" action="/ProdukPengguna/{{$Product->IdProduk}}" class="bg-light p-5 contact-form" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <input type="text" name="NamaProduk"  value="{{$Product->NamaProduk}}">
                        <input type="text" name="Kategori" value="{{$Product->Kategori}}">
                        <input type="text" name="Deskripsi" value="{{$Product->Deskripsi}}">
                        <input type="text" name="Harga" value="{{$Product->Harga}}">
                        <input type="text" name="Stok" value="{{$Product->Stok}}">
                        Update Foto Produk
                        <input type="file" name="Foto" value="{{$Product->Foto}}">
                        <!-- <a href="#" class="primary-btn" style="margin-bottom: 2%; background-color: rgb(228, 220, 220); color:black">Unggah Foto</a> -->
                        <button type="submit" class="primary-btn" style="border: none; margin-bottom: 2%;">Simpan</button>
                        <a  class="site-btn" href="produk-detail-edit.html" style="background-color: rgba(0, 0, 0, 0); color: black; width: 100%; text-align: center;">Batal</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
            </div>
        </div>
    </div>
</section>
@stop
