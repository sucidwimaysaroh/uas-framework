@extends('template.master')

@section('content')
<section class="shop spad">
    <div class="container">
        <div class="row">
          @foreach($order as $orderan)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{ asset ('storage/images/'.$orderan->Product->Foto) }}">
                        <div class="product__label">
                            <span>Nama Produk : {{$orderan->Product->NamaProduk}} </span>
                        </div>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="">Harga Item : {{$orderan->Product->Harga}}</a></h6>
                        <h6><a href="">Jumlah : {{$orderan->Jumlah}}</a></h6>
                        <div class="product__item__price">Total Harga : {{$orderan->HargaTotal}}</div>

                        <!-- Modal -->
                        <div class="cart_add">
                            <a href="/Transaksi" data-toggle="modal" data-target="#exampleModal">Bayar Sekarang</a>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Lakukan Pembayaran</h5>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="/Transaksi/ {{$orderan->IdOrder}}" enctype="multipart/form-data">
                                @csrf
                                    <input type="text" value="{{$orderan->IdOrder}}" name="IdOrder" hidden>
                                    <textarea class="form-control" placeholder="Masukkan Keterangan" name="Keterangan"></textarea>

                                    <<label class="text-start" for="FotoBukti"> Unggah Bukti Pembayaran</label>
                                    <input class="form-control" type="file" name="FotoBukti">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primmary" style="border: none; margin-bottom: 2%;">Simpan</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>

                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@stop
