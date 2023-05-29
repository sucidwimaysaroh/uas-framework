@extends('template.master')

@section('content')
<section class="shop spad">
    <div class="container">
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
                            <a href="/SemuaProduk/{{$prdct->IdProduk}}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@stop
