@extends('layouts.admin.master')    

@section('title','Beranda')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DASHBOARD ADMIN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Jumlah Produk Buku</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Jumlah Penulis</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/penulis-admin" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-olive">
              <div class="inner">
                <h3>{{$dataroyalti}}</h3>

                <p>Jumlah Data Royalti</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/data-royalti-admin" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-teal">
              <div class="inner">
                <h3>65</h3>

                <p>Jumlah Pengajuan Royalti</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
      </div>
      <!-- Default box -->
    <div id="accordion">  
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-info btn-lg btn-block collapsed text-center " data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h5>⇓ SLIDE BERANDA ⇓</h5>
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body" style="padding-top: 0;">
            <section>
              <div>
              <button type="button" class="btn btn-info my-2" data-toggle="modal" data-target="#tambah">
                <i class="fa fa-plus" style="font-size:15px">Tambah Slide</i>
              </button>
              <!-- Modal Slide -->
              <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="card">
                          <form action="{{url('/index/store')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="card-body" style="text-align: left;">
                                  <div class="form-group">
                                      <label>Gambar Slide(370x310)</label>
                                      <input type="file" class="form-control " name="photo" style="height: 45px;">
                                  </div>
                              </div>
                              <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
                      </div>
                    </div>
                </div>
              </div> 
              <!-- EndModal Slide -->
                <table class="table table-hover">
                  <thead>
                  <tr>
                    <th scope="row">Slide</th>
                    <th colspan="2">Gambar(370x310)</th>
                    <th scope="row">Aksi</th>
                  </tr>
                  </thead>
                  <?php $no=1; ?>
                  @foreach($slide as $s)
                <tbody>
                <tr>
                  <td scope="row">{{ $no++ }}</th>
                  <td colspan="2">{{ $s->photo}}
                    <!-- <img src="{{url($s->photo)}}" alt="Image" class="image" style="max-width: 100%"> -->
                  </td>
                  <td>
                    <a type="button" class="btn btn-warning btn-sm fas fa-edit" data-toggle="modal" data-target="#ubah">
                    </a>
                    <a class="btn btn-sm btn-danger fas fa-trash-alt" href="{{url('/Dashboard/delete')}}/{{$s->id}}" onclick="return confirm('yakin?');">
                    </a>
                  </td>
                </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
              </section>
            </div>
          </div>
      </div>
    </div>
    <!-- <div id="accordion">  
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-info btn-lg btn-block collapsed text-center" data-toggle="collapse" data-target="#youtube" aria-expanded="false" aria-controls="collapseThree"><h5>
            ⇓ Youtube ⇓</h5>
            </button>
          </h5>
        </div>

      </div>
    </div> -->
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
@endsection

