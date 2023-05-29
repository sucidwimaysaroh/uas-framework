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
                        <h5 style="margin-bottom: 2%;">Edit Akun</h5>
                    </div>
                    <form method="POST" action="/EditAkunPengguna/{{$User->id}}" enctype="multipart/form-data">
                      @method('patch')
                      @csrf
                        <input type="text"  value="{{ $User->name}}" name="name">
                        <input type="text"  value="{{ $User->username}}" name="username">
                        <input type="text"  value="{{ $User->email}}" name="email" >
                        <!-- <input type="text"  value="{{ auth()->user()->password}}"> -->
                       <div class="form-group">
                        <input type="submit" value="Simpan" class="primary-btn" style="border: none; margin-bottom: 2%;">
                        <a  class="site-btn" href="{{route ('AkunPengguna')}}" style="background-color: rgba(0, 0, 0, 0); color: black; width: 100%; text-align: center;">Batal</a>
                      </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
            </div>
        </div>
    </div>
</section>

@endsection
