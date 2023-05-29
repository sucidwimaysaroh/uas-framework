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
                        <h5 style="margin-bottom: 2%;">Tambahkan Produk</h5>
                    </div>
                    <form method="POST" action="/CreateProduk" class="bg-light p-5 contact-form" enctype="multipart/form-data">
                    @csrf
                        <input type="text" value="{{auth()->user()->id}}" name="IdUser" hidden>
                        <input type="text" placeholder="Nama Produk" name="NamaProduk">
                        <input type="text" placeholder="Kategori" name="Kategori">
                        <input type="text" placeholder="Deskripsi" name="Deskripsi">
                        <input type="text" placeholder="Harga" name="Harga">
                        <input type="text" placeholder="Stok" name="Stok">
                        Unggah Foto Produk
                        <input type="file" placeholder="Unggah Foto" name="Foto">
                        <button type="submit" class="primary-btn" style="border: none; margin-bottom: 2%;">Simpan</button>
                        <a  class="site-btn" href="{{route ('AkunPengguna')}}" style="background-color: rgba(0, 0, 0, 0); color: black; width: 100%; text-align: center;">Batal</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
            </div>
        </div>
    </div>
</section>

@stop
