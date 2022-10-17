@extends('layouts.master')      

@section('title','Penulis')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
<section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('assets')}}/images/backgrounds/page-header.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Penulis</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>Penulis</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
</section><!-- /.page-header -->
                    <div class="row">
                        @foreach($penulis as $p)
                        <div class="col-xl-12">
                            <div class="tabs-content">
                                <div class="tab active-tab" id="review">
                                    <div class="reviews-box" style="border: none;padding: 20px 50px;">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="product_reviews_box">
                                                    <div class="product_reviews_single">
                                                        <div class="product_reviews_image">
                                                            <img src="{{url($p->photo)}}" style="border-radius: 50%; width: 120px;">
                                                        </div>
                                                        <div class="product_reviews_content">
                                                            <h3>{{ $p->nama }}<span>15 Nov, 2019</span></h3>
                                                            <p>{!! Str::subStr($p->deskripsi, 0, 300) !!}...</p>
                                                            <div class="product_reviews_rating product_detail_review">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#" class="deactive"><i class="fa fa-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            <div style="margin: 20px;">
            {{ $penulis->links('vendor.pagination.custom') }}
        </div>
@endsection