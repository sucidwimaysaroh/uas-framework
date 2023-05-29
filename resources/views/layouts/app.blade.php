<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <head> -->

    @include('template.header')
<!-- </head> -->
<body>


  <body>
      <!-- Header Section Begin -->
      <header class="header">
          <div class="header__top">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="header__top__inner">
                              <div class="header__logo">
                                  <a href="./index.html"><img src="{{ asset ('assets/img/logo.png')}}" alt=""></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="canvas__open"><i class="fa fa-bars"></i></div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <nav class="header__menu mobile-menu navbar navbar-expand-md navbar-light ">
                          <ul>
                              <li><a href="">Beranda</a></li>
                              <li><a href="">Toko</a></li>
                              <li><a href="">Pesanan</a></li>
                              <li><a href="">Penjualan</a></li>
                              <li><a href="">Akun</a>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </header>
    @yield('content')

@include('template.footer')

</body>
</html>
