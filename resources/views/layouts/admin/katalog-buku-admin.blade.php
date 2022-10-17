@extends('layouts.admin.master')    

@section('title','Katalog Buku')

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Katalog Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah">
                <i class="fa fa-plus" style="font-size:15px">Tambah Buku</i>
            </button>
                <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Tambah Buku</h3>
                                <div class="card-tools">
                                  <!-- Maximize Button -->
                                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                </div>
                              </div>
                                <!-- Form -->
                                <form action="{{url('/katalog-admin/store')}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                    <!-- Judul Buku -->
                                    <div style="line-height:normal;padding:0 20px 0 20px;margin:10px 0 10px 0;display:flex;align-items:center;">
                                      <label for="judul" style="width:20%;">Judul Buku</label>
                                      <p style="width:5%;"> : </p>
                                      <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan judul buku...">
                                    </div>
                                    <!-- End Judul Buku -->
                                    
                                    <!-- Link Direct -->
                                    <div style="line-height:normal;padding:0 20px 0 20px;margin:10px 0 10px 0;display:flex;align-items:center;">
                                      <label for="judul" style="width:20%;">Link Direct</label>
                                      <p style="width:5%;"> : </p>
                                      <input type="text" class="form-control" name="direct" id="judul" placeholder="Masukan Link Direct...">
                                    </div>
                                    <!-- End Link Direct -->
                                    <!-- Keterangan -->
                                    <div style="line-height:normal;padding:0 20px 0 20px;margin:10px 0 10px 0;display:flex;align-items:center;">
                                      <label for="judul" style="width:20%;">Keterangan</label>
                                      <p style="width:5%;"> : </p>
                                      <textarea name="keterangan" class="form-control" id="" cols="30" rows="10" placeholder="Masukan Keterangan..."></textarea>
                                    </div>
                                    <!-- End Keterangan -->

                                    <!-- <style>
                                      #test *{
                                        border:1px solid green;
                                      }
                                    </style> -->
                                    <!-- Kategori -->
                                    <div style="
                                    
                                    display:flex;
                                    align-items: center;
                                    justify-content: center;
                                    line-height:normal;
                                    padding:0 20px 0 20px;
                                    margin:10px 0 10px 0;
                                    "
                                     id="test">
                                      <label for="judul" style="width:16%;">Kategori</label>
                                      <p style="width:4%;"> : </p>
                                      <select id="cars" name="kategori" style="width:80%;height:50px;">
                                        <option value="Agama">Agama</option>
                                        <option value="Ilmu Sosial">Ilmu Sosial</option>
                                        <option value="Psikologi">Psikologi</option>
                                        <option value="Ilmu Hukum">Ilmu Hukum</option>
                                      </select>
                                    </div>
                                    <!-- End Kategori -->

                                    <!-- Gambar -->
                                    <!-- <div style="line-height:normal;padding:0 20px 0 20px;margin:10px 0 10px 0;display:flex;align-items:center;">
                                      <label for="judul" style="width:20%;">Gambar</label>
                                      <p style="width:5%;"> : </p>
                                      <input type="file" name="gambar" class="form-control" id="judul" placeholder="Masukan Gambar...">
                                    </div> -->
                                    <!-- End Gambar -->

                                    <!-- Link Gambar -->
                                    <div style="line-height:normal;padding:0 20px 0 20px;margin:10px 0 10px 0;display:flex;align-items:center;">
                                      <label for="judul" style="width:20%;">Link Gambar</label>
                                      <p style="width:5%;"> : </p>
                                      <input type="text" class="form-control" name="gambar" id="gambar" placeholder="Masukan Link gambar...">
                                    </div>
                                    <!-- End Link Gambar -->
                                    
                                    <div style="display:flex;justify-content:flex-end;padding:0 20px 0 20px;margin-bottom:20px;">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                <!-- End Form -->
                        </div>
                    </div>
                </div>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Buku</th>
                      <th>Gambar</th>
                      <th>Keterangan</th>
                      <th>Link Direct</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach($katalog as $data)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $data->judul }}</td>
                      <td>
                          <img src="{{ $data->gambar }}" height=200 alt="">
                      </td>
                      <td>{{ substr($data->keterangan,0,50) }}...</td>
                      <td>{{ $data->direct }}</td>
                      <td>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


@endsection