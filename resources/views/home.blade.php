@extends('template.master')

@section('content')

<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="{{asset ('assets/img/hero/hero-1.jpg')}}">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <h2>Segalanya akan menjadi baik dengan sepotong kue!</h2>
                            <a href="#" class="primary-btn">Cari Kue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item set-bg" data-setbg="{{ asset ('assets/img/hero/hero-1.jpg')}}">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <h2>Temukan bahagiamu disetiap gigitnya!</h2>
                            <a href="#" class="primary-btn">Cari Kue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="instagram__text">
                    <div class="section-title">
                        <span>Temukan favoritmu</span>
                        <h2>Momen manis disimpan sebagai kenangan.</h2>
                    </div>
                    <h5></h5>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="{{ asset ('assets/img/instagram/instagram-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic middle__pic">
                            <img src="{{ asset ('assets/img/instagram/instagram-2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="{{ asset ('assets/img/instagram/instagram-3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="{{ asset ('assets/img/instagram/instagram-4.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic middle__pic">
                            <img src="{{ asset ('assets/img/instagram/instagram-5.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="{{ asset ('assets/img/instagram/instagram-3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Testimoni</span>
                    <h2>Apa kata mereka?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="{{ asset ('assets/img/testimonial/ta-1.jpg')}}" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Kerry D.Silva</h5>
                                <span>Jakarta</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Beli kue di sini gampang dan rasanya ga ngecewain</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="{{ asset ('assets/img/testimonial/ta-2.jpg')}}" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Chelsea Islan</h5>
                                <span>Bandung</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Jual kue selalu laris, customernya banyak dari seluruh Indonesia</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="{{ asset ('assets/img/testimonial/ta-1.jpg')}}" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Ophelia Nunez</h5>
                                <span>Papua</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Pengiriman kue cepat. Tidak basi sampai diPapua sini.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="{{ asset ('assets/img/testimonial/ta-2.jpg')}}" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Asyanti</h5>
                                <span>Malang</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Kuenya beragam, jadi gampang cari sesuai dengan keinginan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="section-title">
                    <span>Tim Pengembang</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team__item set-bg" data-setbg="{{ asset ('assets/img/team/team-1.jpg')}}">
                    <div class="team__item__text">
                        <h6>Suci Dwi Maysaroh</h6>
                        <span>182410101006</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team__item set-bg" data-setbg="{{ asset ('assets/img/team/team-3.jpg')}}">
                    <div class="team__item__text">
                        <h6>Lailatul Qomariah</h6>
                        <span>182410101018</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team__item set-bg" data-setbg="{{ asset ('assets/img/team/team-4.jpg')}}">
                    <div class="team__item__text">
                        <h6>Iga Novinda Rantaya</h6>
                        <span>182410101020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
