@extends('layouts.master')      

@section('title','Katalog Buku')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('assets')}}/images/backgrounds/page-header.JPG);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>Katalog Buku</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><span>About</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<style>
    /* #konten *{
        border: 1px solid red;
    } */
</style>
<!-- Content -->
<section id="konten" style="padding:10px;">
    <!-- Header -->
    <div class="row" style="padding:10px;border:1px solid #E9ECEF;margin-bottom:10px;">
        <div class="col-12 col-lg-6 col-md-6 col-sm-12">
            <h1 >Katalog Buku</h1>
        </div>
        <div class="col-12 col-lg-6 col-md-6 col-sm-12">
            <div class="input-group" >
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- kategori -->
    <!-- <div style="margin-bottom:10px;padding:10px;font-weight:bold">
        <a href="">| Agama |</a>
        <a href="">| Akuntansi |</a>
        <a href="">| Arsitektur Komputer |</a>
        <a href="">| Bahasa |</a>
        <a href="">| EkonomI Bisnis |</a>
        <a href="">| Eksakta |</a>
        <a href="">| Filsafat |</a>
        <a href="">| Hukum |</a>
        <a href="">| Ilmiah |</a>
        <a href="">| Ilmu Sosial |</a>
        <a href="">| Ilmu Kesehatan |</a>
        <a href="">| Kewirausahaan |</a>
        <a href="">| Manajemen |</a>
        <a href="">| Pemerintahan |</a>
        <a href="">| Pendidikan |</a>
        <a href="">| Pertanian |</a>
        <a href="">| Politik |</a>
        <a href="">| Psikologi |</a>
        <a href="">| Sosial Budaya |</a>
        <a href="">| Teknologi |</a>
        <a href="">| Teknologi Pangan |</a>
    </div> -->
    <!-- End kategori -->
    <!-- Main Content -->
    <!-- <style>
        #card *{
            border: 1px solid green;
        }
    </style> -->
    <div class="row" style="margin: 0 1px 0 1px;" id="card">
        @foreach($katalog as $data)
        <!-- Card Buku -->
        <div class="col-12 col-lg-3 col-md-4 col-sm-6" style="margin-bottom:15px;" >
            <a href="{{ $data->direct }}" target=_blank>

                <div class="shadow" style="border:0.5px solid #E9ECEF;border-radius:5px;">
                    <img src="{{ $data->gambar }}" class="card-img-top" alt="...">
                    <div class="card-body" style="height:100px;">
                        <h6 class="card-title">{{ $data->judul }}</h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- End Card Buku -->
        @endforeach
    </div>
    <!-- End Main Content -->
    <!-- katalog -->
    <div style="display:flex;justify-content:center;padding:0 20px 0 20px;">
        <div>
            {{ $katalog->links()}}
        </div>
    </div>
    <!-- End katalog -->
    
</section>
<!-- End Content -->
@endsection