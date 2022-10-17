@extends('layouts.master')      

@section('title','Press Release')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('assets')}}/images/backgrounds/page-header.JPG);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Press Release</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li ><span>About</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="about-one">
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
            <div class="card-body">
            <div class="container">
                <img src="assets/images/resources/about-1-1.png" class="img-fluid mx-auto d-block" alt="" style="width: 21cm;height: 33cm;">
            </div><!-- /.container -->
            </div>
            <div class="card-footer text-muted">
            2 days ago
            </div>
            </div>
           
        </section><!-- /.about-one -->
@endsection