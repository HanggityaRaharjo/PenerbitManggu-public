@extends('layouts.master')      

@section('title','Manggu Info')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
<section class="page-header">
            <div class="page-header__bg" style="background-image: url({{url('assets')}}/images/backgrounds/page-header.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Manggu Info</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>About</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <div class="blog-page">
            <div class="container">
                <div class="row">
                    @foreach($berita as $b)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="blog-card" style="margin-bottom: -85px;">
                            <div class="blog-card__image" style="margin-bottom: 5px;">
                                <div class="blog-card__date">{{ Carbon\Carbon::parse($b->created_at)->locale('id')->translatedFormat('d M') }}</div><!-- /.blog-card__date -->
                                <img src="{{url($b->photo)}}" style="width: 370px; height: 280px;">
                                <a href="{{ route('manggu-info-halaman', $b->slug) }}"></a>
                            </div><!-- /.blog-card__image -->
<!--                             <div class="post-meta">
                                <h3 class="title">
                                </h3>
                                <p>{!! Str::subStr($b->deskripsi, 0, 150) !!}</p>
                                <a href="{{ route('manggu-info-halaman', $b->slug) }}" class="btn btn-primary"style="background-color: #a01f24; border-color: #615253;">Selengkapnya »</a>
                            </div> -->

                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                </div><!-- /.blog-card__meta -->
                                <h3 class="title"><a href="{{ route('manggu-info-halaman', $b->slug) }}">{!! Str::subStr($b->judul, 0, 50) !!}...</a></h3>
                                <p>{!! Str::subStr($b->deskripsi, 0, 150) !!}...</p>
                                <a href="{{ route('manggu-info-halaman', $b->slug) }}" class="btn btn-primary" style="background-color: #a01f24; border-color: #615253;">Selengkapnya »</a>
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div>
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.blog-page -->
        <div style="margin: 20px;">
            {{ $berita->links('vendor.pagination.custom') }}
        </div>
 
@endsection