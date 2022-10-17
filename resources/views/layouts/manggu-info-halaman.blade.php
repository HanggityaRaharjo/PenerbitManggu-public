@extends('layouts.master')      

@section('title','Halaman Berita')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('assets')}}/images/backgrounds/page-header.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Manggu Info Berita</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>Halaman Info</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="blog-card__image blog-details__image">
                            <div class="blog-card__date" style="width: 200px;height: 35px;">{{ Carbon\Carbon::parse($berita->created_at)->locale('id')->translatedFormat('l, d F Y') }}</div><!-- /.blog-card__date -->
                            <img src="{{url($berita->photo)}}" class="img-fluid" alt="">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i>by {{ $berita->Users->name }}</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <div class="blog-details__content blog-card__content">
                            <h3>{{ $berita->judul }}</h3>
                            <p>{!! $berita->deskripsi !!}</p>
                        <!-- /.blog-details__content -->
                        <div class="blog-details__meta">
                            <p class="blog-details__tags"><span>Tags:</span><a href="#">Oragnic,</a><a href="#">Healthy,</a><a href="#">Recipes</a></p>
                            <div class="blog-details__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div><!-- /.blog-details__social -->
                        </div>
                        </div><!-- /.blog-details__meta -->
                        <div id="disqus_thread"></div>
                    </div><!-- /.col-md-12 col-lg-9 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar__search">
                                <form action="{{ url('berita') }}" method="GET">
                                    <input type="text" placeholder="Search" value="{{ $keyword }}">
                                    <button type="submit"><i class="organik-icon-magnifying-glass" area-hidden="true"></i></button>
                                </form>
                            </div><!-- /.blog-sidebar__search -->
                            <div class="blog-sidebar__posts">
                                <h3>Recent Posts</h3>
                                <ul>
                                    <li>
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        <span>20 Nov, 2020</span>
                                        <h4><a href="news-details.html">Healthy Farm Diary
                                                Products</a></h4>
                                    </li>
                                    <li>
                                        <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        <span>20 Nov, 2020</span>
                                        <h4><a href="news-details.html">Healthy Farm Diary
                                                Products</a></h4>
                                    </li>
                                    <li>
                                        <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                        <span>20 Nov, 2020</span>
                                        <h4><a href="news-details.html">Healthy Farm Diary
                                                Products</a></h4>
                                    </li>
                                </ul>
                            </div><!-- /.blog-sidebar__posts -->
                            <div class="blog-sidebar__categories">
                                <h3>Catgories</h3>
                                <ul>
                                    <li>
                                        <a href="#">Agriculture <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">

                                            Organic Food <i class="fa fa-angle-right"></i></a>
                                    </li>

                                    <li>
                                        <a href="#">Dairy Farm <i class="fa fa-angle-right"></i></a>
                                    </li>

                                    <li>
                                        <a href="#">Economy Solution <i class="fa fa-angle-right"></i></a>
                                    </li>

                                    <li>
                                        <a href="#">Harvests Innovations <i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div><!-- /.blog-sidebar__categories -->
                            <div class="blog-sidebar__tags">
                                <h3>Tags</h3>
                                <div class="blog-sidebar__tags-links">
                                    <a href="#">Agriculture,</a>
                                    <a href="#">Food,</a>
                                    <a href="#">Healthy,</a>
                                    <a href="#">Dairy,</a>
                                    <a href="#">Organic,</a>
                                    <a href="#">Farm,</a>
                                    <a href="#">Economy</a>
                                </div><!-- /.blog-sidebar__tags-links -->
                            </div><!-- /.blog-sidebar__tags -->
                        </div><!-- /.blog-sidebar -->
                    </div><!-- /.col-md-12 col-lg-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->

@endsection