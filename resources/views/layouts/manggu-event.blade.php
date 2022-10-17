@extends('layouts.master')      

@section('title','Manggu Event')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
<section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('assets')}}/images/backgrounds/page-header.JPG);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Manggu Event</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li ><span>About</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <div class="container">
                    <section class="feature-two" style="padding-bottom: 50px;padding-top: 50px;
">
            <div class="container-fluid">
                <div class="swiper-container thm-swiper__slider" data-swiper-options='{
            "slidesPerView": 1,
            "loop": true,
            "autoplay": {
                "delay": 5000
            }, "breakpoints": {
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "768": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                }
            }}'>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="feature-two__box" style="background-image: url(assets/images/blog/lomba.jpg);">
                                <h3>Lomba Menulis Artikel</h3>
                            </div><!-- /.feature-two__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="feature-two__box" style="background-image: url(assets/images/resources/feature-bg-1-2.png);">
                                <h3>Diet
                                    Recipe</h3>
                            </div><!-- /.feature-two__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="feature-two__box" style="background-image: url(assets/images/resources/feature-bg-1-3.png);">
                                <h3>Pure
                                    Organic</h3>
                            </div><!-- /.feature-two__box -->
                        </div>
                        <div class="swiper-slide">
                            <div class="feature-two__box" style="background-image: url(assets/images/resources/feature-bg-1-3.png);">
                                <h3>Pure
                                    Organic</h3>
                            </div><!-- /.feature-two__box -->
                        </div>
                        <div class="swiper-slide">
                            <div class="feature-two__box" style="background-image: url(assets/images/resources/feature-bg-1-3.png);">
                                <h3>Pure
                                    Organic</h3>
                            </div><!-- /.feature-two__box -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.row -->

                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </section><!-- /.row -->
        </div>
@endsection