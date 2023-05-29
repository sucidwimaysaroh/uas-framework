<!DOCTYPE html>
<html lang="zxx">
@include('template.header')

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
                          <li><a href="{{route ('home')}}">Beranda</a></li>
                          <li><a href="{{route ('SemuaProduk')}}">Toko</a></li>
                          <li><a href="{{route ('OrderProduk')}}">Keranjang</a></li>
                          <li><a href="{{route ('SemuaOrder')}}">Pesanan</a></li>
                          <li><a href="{{route ('Penjualan')}}">Penjualan</a></li>
                          <li><a href="{{route ('AkunPengguna')}}">Akun</a>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
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
