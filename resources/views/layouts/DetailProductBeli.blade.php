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
                        <div class="quantity">
                          <form method="POST" action="/Order" class="bg-light p-5 contact-form" >
                          @csrf
                          <div class="form-group">
                          <input type="text" name="Harga" placeholder="Alamat Pengiriman"></div> <br>
                          <input type="text" id="Harga" name="Harga" value="{{$Product->Harga}}" onkeyup="Total();" hidden >
                          <input type="text" name=IdProduk value="{{$Product->IdProduk}}" hidden>
                          <input type="text" name="id" value="{{auth()->user()->id}}" hidden>
                          <input type="text" name="Status" value="Belum Bayar" hidden>
                            <div class="pro-qty">
                              <input type="number" name="Jumlah" id="Jumlah" value="1" onchange="Total();" >
                            </div>
                            <input type="text" name="HargaTotal" id="Total" hidden><br>
                            <div class="form-group">
                              <input type="submit" class="primary-btn">
                            </div>
                        </div>

                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
