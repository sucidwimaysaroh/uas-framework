@extends('template.master')
@section('content')
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Tgl Pesanan</th>
                                <th>Produk</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Pembayaran</th>
                                <th>Tgl Pembayaran</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($transaction as $transaksi)
                            <tr>
                                <td class="cart__price">{{$transaksi->order->created_at}}</td>
                                <td class="cart__price"><a href="">Detail</a></td>
                                <td class="cart__price">{{$transaksi->order->HargaTotal}}</td>
                                <td class="cart__price">{{$transaksi->order->Status}}</td>
                                <td class="product__cart__item__pic">
                                  <!-- <a href="" class="btn-primary" style="padding: 5px;"
                                  data-toggle="modal" data-target="#exampleModal">Lihat Bukti</a></td>
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-body"> -->
                                        <img src="{{ asset ('storage/images/'.$transaksi->FotoBukti) }}">
                                      <!-- </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div> -->
                              </td>
                                <td class="cart__price">{{$transaksi->created_at}}</td>
                                <td class="cart__price">{{$transaksi->Keterangan}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
