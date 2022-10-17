@extends('layouts.master')      

@section('title','Manajemen')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('assets')}}/images/backgrounds/page-header.jpg);"></div>
            <!-- /.page-header__bg -->
        <div class="container">
            <h2>Manajemen</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>Manajemen</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="About-one">
    <div class="container">
        <div class="row">
            <img src="assets/images/shapes/about-leaf-1-1.png" alt="" class="about-one__shape-1">
        </div>        
    </div>
</section>
         <section>
            <img src="assets/images/shapes/team-shape-1.png" alt="" class="team-one__shape-1">
            <img src="assets/images/shapes/team-shape-2.png" alt="" class="team-one__shape-2">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__decor"></div>
                    <p>Professional People</p>
                    <h3>Struktur Manajemen Perusahaan</h3>
                </div>
                <div class="col-lg-12 justify-content-center">
                    <div class="team-card">
                            <div class="team-card__content">
                                <img src="assets/images/12.JPG" style="width:300px; height: 400px;" >
                                <h3>Aep Syaiful Hamidin</h3>
                                <p>CEO & FOunder</p>
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__content -->
                        </div>
                </div>
                <div class="col-lg-12 justify-content-center">
                    <div class="team-card">
                            <div class="team-card__content">
                                <img src="assets/images/12.JPG" style="width:300px; height: 400px;">
                                <h3>Ripqi Zdulfikor</h3>
                                <p>CEO & Co-Founder</p>
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__content -->
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="team-card">
                            <div class="team-card__content">
                                <img src="assets/images/12.JPG" style="width:300px; height: 400px;">
                                <h3>Vera Diana</h3>
                                <p></p>
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-6">
                        <div class="team-card">
                            <div class="team-card__content">
                                <img src="assets/images/12.JPG" style="width:300px; height: 400px;">
                                <h3>Ayu Rizki</h3>
                                <p></p>
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.col-md-6 col-lg-3 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one -->
@endsection