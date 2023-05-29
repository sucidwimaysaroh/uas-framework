@extends('template.master')

@section('content')
<div class="blog-hero set-bg" data-setbg="{{ asset ('assets/img/blog/details/blog-hero.jpg')}}">
    <div class="container">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status')}}
    </div>
    @endif
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="blog__hero__text">
                    <h2>Nama Lengkap : {{auth()->user()->name}}</h2>
                    <ul>
                        <li>Nama pengguna :  {{auth()->user()->username}} </span></li>
                        <li>Email :  {{auth()->user()->email}}</li>
                    </ul>
                    <br>
                    <div class="label">
                        <a href="/EditAkunPengguna/{{auth()->user()->id}}/edit" style="color:white">EDIT AKUN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Hero End -->

<!-- Shop Section Begin -->
<section class="shop spad" style="padding-top: 0%;">
    <div class="container">
        <div class="shop__option">
            <div class="row">
                <div class="col-lg-12" style="padding-top: 5%;">
                    <div class="blog__details__content">
                        <a href="{{route ('CreateProduk')}}" class="primary-btn col-lg-12" style="text-align: center;">+ Tambahkan Produk</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex  col-lg-6 blog__hero__text">
          <h2>Produk Yang Anda Jual</h2>
        </div>
        <div class="row">
          @foreach($product as $prdct)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{ asset ('storage/images/'.$prdct->Foto) }}">
                        <div class="product__label">
                            <span>Kategori</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="produk-detail-beli.html">Nama Produk : {{$prdct->NamaProduk}}</a></h6>
                        <div class="product__item__price">Harga : {{$prdct->Harga}}</div>
                        <div class="cart_add">
                            <a href="/ProdukPengguna/{{$prdct->IdProduk}}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@stop
