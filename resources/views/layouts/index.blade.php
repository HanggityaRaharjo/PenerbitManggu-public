@extends('layouts.master')

@section('title','Official Website')

@section('content')



        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!-- Slide Carousel -->
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('assets')}}/images/main-slider/picture-flayer-beasiswa.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets')}}/images/main-slider/picture-flayer-beasiswa.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets')}}/images/main-slider/picture-flayer-beasiswa.jpeg" alt="First slide">
                    </div>
                    @foreach($slide as $s)
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{url($s->photo)}}" alt="Second slide">
                    </div>
                    @endforeach
                </div>

              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </section>
        <!-- End Slide Carousel -->
        <!-- Content 1 -->
        <section class="about-one">
            <img src="assets/images/shapes/about-leaf-1-1.png" alt="" class="about-one__shape-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <img src="assets/images/buku.png" class="img-fluid my-4" alt="" style="max-width: 75%;text-align: center!important;">
                    </div><!-- /.col-md-12 -->
                    <div class="col-md-12 col-lg-6">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <div></div><!-- /.block-title__decor -->
                                <p>Hallo Sahabat Manggu...</p>
                                <h3>Kenapa Harus Penerbit Manggu?</h3>
                            </div><!-- /.block-title -->
                            <p>Mengapa menghabiskan waktu lagi Atau uang anda pada Penerbit yang tidak terpercaya?</p>
                            <p>Mari kita Membuat buku yang berkualitas terpercaya dan mulai bergabung untuk menerbitkan buku Anda sehingga Anda dapat kembali melakukan yang terbaik - menjalankan bisnis Anda</p>
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="about-one__box">
                                        <h3><i class="fa fa-check-circle"></i> Bersahabat Terpercaya</h3>
                                        <p>Lebih dari 100 Buku Telah Kami Terbitkan</p>
                                    </div><!-- /.about-one__box -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="about-one__box">
                                        <h3><i class="fa fa-check-circle"></i> Cepat Berkualitas</h3>
                                        <p>Mecetak Buku dengan Kualitas yang baik</p>
                                    </div><!-- /.about-one__box -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- End Content 1 -->
        <!-- Swipe Content -->
        <section class="featured-category">
            <div class="container-fluid">
                <div class="block-title text-center">
                    <div class="block-title__decor"></div>
                     <h3>Grup Bisnis</h3><!-- /.block-title__decor -->
                </div>
                <br><br><br>
             <div class="featured-category__carousel-wrap wow fadeInUp" data-wow-duration="1500ms">
                <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "navigation": {
            "nextEl": "#featured-category__swiper-button-next",
            "prevEl": "#featured-category__swiper-button-prev"
        },
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
            },
            "1200": {
                "spaceBetween": 30,
                "slidesPerView": 4
            }
        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="featured-category__box">
                                <i class="fas fa-upload"></i>
                                <h3><a href="/">Penerbitan Buku</a></h3>
                            </div><!-- /.featured-category__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="featured-category__box">
                                <i class="fas fa-print"></i>
                                <h3>Percetakan Buku</h3>

                            </div><!-- /.featured-category__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <a href="https://toko.penerbitmanggu.co.id/">
                            <div class="featured-category__box">
                                <i class="fas fa-store"></i>
                                <h3>Manggu Store</h3>
                            </div><!-- /.featured-category__box -->
                            </a>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="featured-category__box">
                                <i class="fab fa-medium"></i>
                                <h3><a href="https://www.manggumedia.com/">Manggu Media</a></h3>
                            </div><!-- /.featured-category__box -->
                        </div><!-- /.swiper-slide --><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->

                </div>

                <!-- If we need navigation buttons -->
                <div class="featured-category__nav">
                    <div class="swiper-button-prev" id="featured-category__swiper-button-prev"><i class="organik-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="featured-category__swiper-button-next"><i class="organik-icon-right-arrow"></i></div>
                </div><!-- /.featured-category__nav -->
            </div><!-- /.featured-category__carousel-wrap -->
        </section><!-- /.feature-box -->
        <!-- End Swipe Content -->

        <div class="blog-page" style="padding-top: 20px;">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__decor"></div>
                     <h3>Berita & Artikel</h3><!-- /.block-title__decor -->
                </div>
                <div class="row">
                    @foreach($berita as $b)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="elementor-post__card">
                            <div class="blog-card__image">
                                <div class="blog-card__date" style="width: 200px;height: 35px;">{{ Carbon\Carbon::parse($b->created_at)->locale('id')->translatedFormat('l, d F Y') }}</div><!-- /.blog-card__date -->
                                <img src="{{url($b->photo)}}" style="width: 370px; height: 280px;">
                                <a href="{{ route('manggu-info-halaman', $b->slug) }}"></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__meta" style="margin-top: -16px; margin-bottom: 0;">
                                    <a href="news-details.html"><i class="far fa-user-circle"></i> by {{ $b->users->name }}</a>
                                    <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                </div><!-- /.blog-card__meta -->
                                <h3 style="font-family: revert; margin-bottom: 13px; font-size: 21px;"><a href="{{ route('manggu-info-halaman', $b->slug) }}">{{ $b->judul }}</a></h3>
                            
                            </div><!-- /.blog-card__content -->
                       
                        </div>
                    </div>
                    @endforeach
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/0E98ovG7q6k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/AGnuglHUheA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
        <section class="feature-two">
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
                        @foreach($berita as $b)
                        <div class="swiper-slide">
                            <div class="feature-two__box">
                                <div class="blog-card__date" style="width: 210px;height: 35px;">{{ Carbon\Carbon::parse($b->created_at)->locale('id')->translatedFormat('l, d F Y') }}</div><!-- /.blog-card__date -->
                                <img src="{{url($b->photo)}}" style="width: 370px; height: 280px;" >
                                <h3>{{$b->judul}}</h3>
                            </div><!-- /.feature-two__box -->
                        </div><!-- /.swiper-slide -->
                        @endforeach
                    </div><!-- /.row -->

                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </section><!-- /.row -->
        <section>
            <div ></div>
        </section>
                <!-- /.post-pagination -->
            </div><!-- /.container -->
        </div>

<!--  --><!-- /.gallery-one --><!-- /.page-wrapper -->

    <!-- /.search-popup -->
@endsection