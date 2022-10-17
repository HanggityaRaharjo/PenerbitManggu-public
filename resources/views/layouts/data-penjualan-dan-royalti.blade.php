@extends('layouts.master')    

@section('title','Data Penjualan dan Royalti')

@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
      <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('assets')}}/images/backgrounds/page-header.JPG);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h5 style="color:white">Data Penjualan dan Royalti</h5>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li><span>Data Royalti</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        

        <!-- Modal Ketentuan -->

        <div class="modal fade" id="ketentuan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Ketentuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>      
                  </div>
                  <div class="modal-body">
                    <p>1. Minimal royalti yang bisa dicairkan sebesar Rp. 500,000</p>
                    <P>2. Setiap transaksi pencairan royalti akan dikenakan biaya admin sebesar 10.000 </P>
                    <P>3. Periode royalty bulan maret-september 2022 belum diterapkan pajak </P>
                    <P>4. Pembayaran royalty periode penjualan bulan Maret-Agustus akan dijadwalkan pada bulan oktober-desember </P>
                    <P>5. Per Januari 2023, Penulis dapat mengajukan pencairan royalti tanpa dijadwalkan </P>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- End Modal Ketentuan -->
        <!-- Modal Syarat -->

        <div class="modal fade" id="syarat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Syarat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>      
                  </div>
                  <div class="modal-body">
                    <p>1. Foto KTP</p>
                    <p>2. Foto NPWP</p>
                    <p>3. Foto Diri(Terbaru)</p>
                    <p>4. Foto Buku Tabungan</p>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- End Modal Syarat -->

        <!-- Coba -->
        <nav style="margin-top:20px;margin-bottom:10px;">
            <form action="{{ url('data-penjualan-dan-royalti')}}" method="GET" class="form-inline" >
            <div style="display:flex;justify-content:space-between;width:100%; padding:10px;">
              <div style="font-weight:bold">Data Royalti</div>
              <div>
                <a type="button" data-toggle="modal" class="btn btn-primary" style="background-color:#A01F24;border:#A01F24" data-target="#ketentuan">Ketentuan</a href="">
                <a type="button" data-toggle="modal" class="btn btn-primary" style="background-color:#A01F24;border:#A01F24" data-target="#syarat">Syarat<i class="fa-light fa-circle-info"></i></a href="">
              </div>
              <div>

                <input type="text" name="search" autocomplete="off" placeholder="Cari Judul Buku.." value="{{request('search')}}" style="border:1px solid #E9ECEF;border-radius:5px;color:#717573;">
                <button class="btn btn-danger" type="submit" style="background-color: #a01f24;border-color: #a01f24;">Cari</button>
              </div>
            </div>
            </form>
        </nav>
        <div style="padding:2px;border:1px solid #E9ECEF">
        <div style="display:flex;background-color:#E9ECEF;font-size:12px;height:60px;align-items:center;font-weight:bold;">
          <div style="width:5%;">No</div>
          <div  style="width:45%;">Judul Buku</div>
          <div  style="width:20%;">Penulis</div>
          <div  style="width:20%;">Harga</div>
          <div style="width:10%;"></div>
          
        </div>
        

        <?php $no=1; ?>
        @foreach($dataroyalti as $data)
          <div style="display:flex;font-size:14px;color:black;line-height: normal;height:100px;align-items:center;border-bottom:1px solid #E9ECEF">
            <div style="width:5%;">{{ $no++ }}</div>
            <div  style="width:45%;">{{ substr($data->judul,0,30) }}...</div>
            <div  style="width:20%;">{{ $data->penulis }}</div>
            <div  style="width:20%;">{{ $data->harga }}</div>
            <div style="width:10%;">
              <a type="button" data-toggle="modal" data-target="#detail{{$data->id}}">Detail</a href="">
            </div>
    
        
            <!-- Modal -->

              <div class="modal fade" id="detail{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">{{ $data->judul }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>      
                                        </div>
                  <div class="modal-body">
                    <table style="width:100%; height:100%;font-size: 16px;">
                      <tr>
                        <td>Penulis</td>
                        <td>:</td>
                        <td>{{ $data->penulis }}</td>
                      </tr>
                      <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>{{ $data->harga }}</td>
                      </tr>
                      <tr>
                        <td>Terjual</td>
                        <td>:</td>
                        <td>{{ $data->terjual }}</td>
                      </tr>
                      <tr>
                        <td>Nilai Royalti</td>
                        <td>:</td>
                        <td>{{ $data->nilairoyalti }}</td>
                      </tr>
                      <tr>
                        <td>Penambahan</td>
                        <td>:</td>
                        <td>{{ $data->penambahan }}</td>
                      </tr>
                      <tr>
                        <td>Saldo Royalti</td>
                        <td>:</td>
                        <td>{{ $data->saldoroyalti }}</td>
                      </tr>
                      <tr>
                        <td>Total Royalti</td>
                        <td>:</td>
                        <td>{{ $data->saldoroyalti+$data->penambahan  }}</td>
                      </tr>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- End Modal -->
            
          </div>
          @endforeach
        </div>
        <div style="width:100% ;display:flex;justify-content:center;">
            {{ $dataroyalti->links()}}
          </div>
        <!-- End Coba -->


        <!-- <section class="about-one">
           <div class="container">
            <div class="tabs-content">
              <div class="tab" id="desc">
                  <div class="product-details-content" style="padding: 4px 4px 8px;">
                      <div class="desc-content-box">
                        <nav class="navbar navbar-light bg-light justify-content-between">
                          <a class="navbar-brand">
                            
                          </a>
                          ▪ NR = Nilai Royalti, ▪ P = Penambahan, ▪ SR = Saldo Royalti
                          <i class="fa fa-square text-primary" style="padding-left: 325px;" data-toggle="tooltip" data-placement="top" title="Total Royalti Diatas Rp.500.000.-"></i>
                          <i class="fa fa-square text-secondary pr-4" data-toggle="tooltip" data-placement="top" title="Total Royalti Belum Mencapai Batas Minimum"></i>
                          <form action="{{ url('data-penjualan-dan-royalti')}}" method="GET" class="form-inline">
                            <input type="text" name="search" autocomplete="off" class="form-control mr-sm-2"  placeholder="Cari..." value="{{request('search')}}">
                            <button class="btn btn-danger" type="submit" style="background-color: #a01f24;border-color: #a01f24;">Cari</button>
                          </form>
                        </nav>
                          <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" style="width: 10%;">No</th>
                                <th scope="col" style="width: 20%;">Judul Buku</th>
                                <th scope="col" style="width: 20%;">Penulis</th>
                                <th scope="col" style="width: 20%;">Harga</th>
                                <th scope="col" style="width: 20%;">NR(15%)</th>
                                <th scope="col" style="width: 10%;">Terjual</th> -->
                                <!-- <th scope="col">P</th>
                                <th scope="col">SR</th>
                                <th scope="col" style="width:10%">Total Royalti</th> -->
                                <!-- <th scope="col">Net Royalti</th>                            -->
                                <!-- <th scope="col"></th> -->
                              <!-- </tr>
                            </thead>
                            <?php $no=1; ?>
                            @foreach($dataroyalti as $data)
                            <tbody>
                              <tr>
                                <th scope="col">{{ $no++ }}</th>
                                <td style="width: 10%;">{{ $data->judul }}</td>
                                <td style="width: 10%;">{{ $data->penulis }}</td>
                                <td style="width: 10%;">Rp.{{ number_format($data->harga) }}.-</td>
                                <td style="width: 10%;">Rp.{{ number_format($data->harga*0.15) }}.-</td>
                                <td style="width: 10%;">{{ $data->terjual }} eks</td> -->
                                <!-- <td>Rp.{{ number_format(($data->harga*0.15)*$data->terjual) }}.-</td>
                                <td>Rp.{{ number_format($data->hutangroyalti) }}.-</td>
                                <td>Rp.{{ number_format ($data->hutangroyalti+($data->harga*0.15)*$data->terjual) }}.-</td> -->
                                <!-- <td>Rp.{{ $data->saldonet }}</td> -->
                                <!-- @if($data->saldoroyalti >= 500000)
                                <td><a href="/data-penjualan-dan-royalti/{{ $data->id }}" class="btn btn-primary" disabled>Ambil</a></td>
                                @endif
                                @if($data->saldoroyalti < 500000)
                                <td><a class="btn btn-secondary" disabled>Ambil</a></td>
                                @endif
                               -->
                                <!-- <td><a class="btn btn-success" disabled>Ambil</a></td> -->
<!--                                
                              
                              </tr>
                            </tbody>
                            @endforeach
                          </table> -->
                      <!-- </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="pagination justify-content-center mt-4">
            {{ $dataroyalti->links()}}
          </div>
        </section>     -->
                       
@endsection