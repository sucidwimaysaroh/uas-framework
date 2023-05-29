@extends('template.master')

@section('content')
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Detail Produk</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="akun-lihat.html">Akun</a>
                    <span>Detail Produk</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Details Section Begin -->
<section class="product-details spad" style="padding-bottom: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product__details__img">
                    <div class="product__details__big__img">
                        <img class="big_img" src="{{ asset ('storage/images/'.$Product->Foto) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <h4>NAMA PRODUK : {{$Product->NamaProduk}}</h4>
                    <h5>Harga : {{$Product->Harga}}</h5>
                    <p>Deskripsi : {{$Product->Deskripsi}}</p>
                    <ul>
                        <li>Stok : <span>{{$Product->Stok}}</span></li>
                        <li>Kategori: <span>{{$Product->Kategori}}</span></li>
                    </ul>
                    <div class="product__details__option">
                      <form action="/ProdukPengguna/{{ $Product->IdProduk }}" method="POST">
                        @method('delete')
                        @csrf
                        <a href="/ProdukPengguna/{{$Product->IdProduk}}/edit" class="primary-btn">Edit Produk</a>
                        <button type="submit" class="primary-btn" style="background-color: brown;"> Hapus Produk</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
