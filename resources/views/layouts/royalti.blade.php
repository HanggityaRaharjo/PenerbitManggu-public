@extends('layouts.master')    

@section('title','Data Penjualan dan Royalti')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
      <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('assets')}}/images/backgrounds/page-header.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Data Penjualan dan Royalti</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li><span>Data Royalti</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <section class="about-one">
           <div class="container">
            <div class="tabs-content">
              <div class="tab" id="desc">
                  <div class="product-details-content" style="padding: 4px 4px 8px;">
                      <div class="desc-content-box">
                        <!-- Content -->
                        <div>
                            <!-- Formulir -->
                                <div class="mx-2" style="text-align: center;">
                                    <h3>Data Lengkap Royalti</h3>
                                </div>
                                <!-- Judul -->
                                <div class="mb-3 mx-2 row">
                                    <label for="judul" class="form-label col-md-2">Judul Buku</label>
                                    <input type="text" name="judul" value="{{ $dataroyalti->judul }}"  class="form-control col-md-10" id="judul" disabled>
                                </div>
                                <!-- End Judul -->
                                
                                <!-- penulis -->
                                <div class="mb-3 mx-2 row">
                                    <label for="penulis" class="form-label col-md-2">Penulis Buku</label>
                                    <input type="text" value="{{ $dataroyalti->penulis }}"  class="form-control col-md-10" id="penulis" disabled>
                                </div>
                                <!-- End penulis -->
                                
                                <!-- Harga -->
                                <div class="mb-3 mx-2 row">
                                    <label for="nilai_royalti" class="form-label col-md-2">Harga</label>
                                    <input type="text" value="Rp.{{ $dataroyalti->harga }},-"  class="form-control col-md-10" id="nilai_royalti" disabled>
                                </div>
                                <!-- End Harga -->
                                <!-- Nilai Royalti -->
                                <div class="mb-3 mx-2 row">
                                    <label for="nilai_royalti" class="form-label col-md-2">Nilai Royalti</label>
                                    <input type="text" value="Rp.{{ $dataroyalti->nilairoyalti }},-"  class="form-control col-md-10" id="nilai_royalti" disabled>
                                </div>
                                <!-- End Nilai Royalti -->
                                <!-- Terjual -->
                                <div class="mb-3 mx-2 row">
                                    <label for="terjual" class="form-label col-md-2">Terjual</label>
                                    <input type="text" value="{{ $dataroyalti->terjual }} Eksemplar"  class="form-control col-md-10" id="terjual" disabled>
                                </div>
                                <!-- End Terjual -->
                                <!-- Penambahan -->
                                <div class="mb-3 mx-2 row">
                                    <label for="penambahan" class="form-label col-md-2">Penambahan</label>
                                    <input type="text" value="Rp.{{ $dataroyalti->penambahan }},-"  class="form-control col-md-10" id="penambahan" disabled>
                                </div>
                                <!-- End Penambahan -->
                                
                                <!-- Saldo Royalti -->
                                <div class="mb-3 mx-2 row">
                                    <label for="saldo_royalti" class="form-label col-md-2">Saldo Royalti</label>
                                    <input type="text" value="Rp.{{ $dataroyalti->hutangroyalti }},-"  class="form-control col-md-10" id="saldo_royalti" disabled>
                                </div>
                                <!-- End Saldo Royalti -->                            
                                <!-- Saldo Royalti -->
                                <div class="mb-3 mx-2 row">
                                    <label for="saldo_royalti" class="form-label col-md-2">Total Royalti</label>
                                    <input type="text" value="Rp.{{ $dataroyalti->saldoroyalti }},-"  class="form-control col-md-10" id="saldo_royalti" disabled>
                                </div>
                                <!-- End Saldo Royalti -->                            
                                <!-- Pph Penulis -->
                                <div class="mb-3 mx-2 row">
                                    <label for="saldo_net" class="form-label col-md-2" data-toggle="tooltip" data-placement="top" title="UU No.36 Tahun 2008 Pasal 23">Pph Penulis(15%)</label>
                                    <input type="text" value="Rp.{{ $dataroyalti->pphpenulis }},-"  class="form-control col-md-10" id="saldo_net" disabled>
                                </div>
                                <!-- End Pph Penulis -->
                                <!-- Admin Bank -->
                                <div class="mb-3 mx-2 row">
                                    <label for="saldo_net" class="form-label col-md-2">Admin Bank</label>
                                    <input type="text" value="Rp.{{ $dataroyalti->adminbank }},-"  class="form-control col-md-10" id="saldo_net" disabled>
                                </div>
                                <!-- End Admin Bank -->
                                <!-- Saldo Net -->
                                <div class="mb-3 mx-2 row">
                                    <label for="saldo_net" class="form-label col-md-2">Royalti Net</label>
                                    <input type="text" value="Rp.{{ $dataroyalti->saldonet }},-"  class="form-control col-md-10" id="saldo_net" disabled>
                                </div>
                                <!-- End Saldo Net -->
                 
                            <form action="/data-penjualan-dan-royalti/send/{{$dataroyalti->id}}" method="post" enctype="multipart/form-data">
                            @csrf

                                <div class="mx-2" style="text-align: center;">
                                    <h3>Biodata Diri</h3>
                                </div>

                                <!-- nama -->
                                <div class="mb-3 mx-2 row">
                                    <label for="nama" class="form-label col-md-2">Nama</label>
                                    <input type="text" name="nama" placeholder="Masukan Nama"  class="form-control col-md-10" id="nama" required autofocus>
                                </div>
                                <!-- End nama -->

                                <!-- email -->
                                <div class="mb-3 mx-2 row">
                                    <label for="email" class="form-label col-md-2">Email</label>
                                    <input type="email" name="email" placeholder="example@gmail.com"  class="form-control col-md-10" id="email" required>
                                </div>
                                <!-- End email -->
                            
                                <!-- ktp -->
                                <div class="mb-3 mx-2 mr-2 row input-group">
                                    <label for="no_ktp" class="form-label col-md-2">Nomor KTP</label>
                                    <input type="number" placeholder="320xxxx" name="no_ktp" class="form-control col-md-4" id="no_ktp" required>
                                    <label for="file_ktp" class="form-label col-md-2">Upload KTP<small><i> jpg/png</i></small></label>
                                    <input type="file" name="file_ktp" class="form-control pt-1 mr-3 col-md-4" id="file_ktp" required>
                                </div>
                                <!-- End ktp -->
                            
                                <!-- npwp -->
                                <div class="mb-3 mx-2 mr-2 row input-group">
                                    <label for="no_npwp" class="form-label col-md-2">Nomor NPWP</label>
                                    <input type="text" placeholder="Masukan NPWP" name="no_npwp" class="form-control col-md-4" id="no_npwp" required>
                                    <label for="file_npwp" class="form-label col-md-2">Upload NPWP<small><i> jpg/png</i></small></label>
                                    <input type="file" name="file_npwp" class="form-control pt-1 mr-3 col-md-4" id="file_npwp" required>
                                </div>
                                <!-- End npwp -->
                            
                                <!-- Pilihan Bank -->
                                <div class="mb-3 mx-2 row input-group">
                                    <label for="no_rekening" class="form-label col-md-2">Nomor Rekening</label>
                                    <input type="text" placeholder="Masukan Nomor Rekening" name="no_rekening" class="form-control col-md-4" id="no_rekening" required>
                                <label for="pilihan_bank" class="form-label col-md-2">Jenis Bank</label> 
                                    <select id="pilihan_bank" class="form-control col-md-4 mr-3" name="pilihan_bank">
                                        <option value="bri">BRI</option>
                                        <option value="bni">BNI</option>
                                        <option value="mandiri">Mandiri</option>
                                    </select>
                                </div>
                                <!-- End Pilihan Bank -->

                                <div class="relative mx-2" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            
                            <!-- End Formulir -->
                        </div>
                        <!-- End Content -->
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </section>    
                       
@endsection