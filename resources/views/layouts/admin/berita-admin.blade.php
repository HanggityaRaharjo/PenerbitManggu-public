@extends('layouts.admin.master')    

@section('title','Berita')

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah">
                <i class="fa fa-plus" style="font-size:15px">Tambah Berita</i>
            </button>
                <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Tambah Berita</h3>
                                <div class="card-tools">
                                  <!-- Maximize Button -->
                                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                </div>
                              </div>
                                <form action="{{url('/berita-admin/store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body" style="text-align: left;">
                                        <div class="form-group">
                                            <label>Photo(370x310)</label>
                                            <input type="file" class="form-control " name="photo" style="height: 45px;">
                                        </div>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" placeholder="Enter..." autocomplete="off">
                                        </div>
                                        <div class="form-group" data-spy="scroll">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="editor" placeholder="Enter..."></textarea>
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
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Diunggah</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <!-- <th scope="col">Status</th> -->
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <?php $no=1; ?>
                     @foreach($berita as $b)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ Carbon\Carbon::parse($b->created_at)->locale('id')->translatedFormat('d M Y') }}</td>
                            <td style="width: 200px;">
                                <img src="{{url($b->photo)}}" alt="Image" class="image" style="max-width: 100%">
                            </td>
                            <td style="width: 200px;">{{ $b->judul }}</td>
                            <td style="width: 300px;">{!! Str::subStr($b->deskripsi, 0, 175) !!}...</td>
                            <!-- <td>Draft</td> -->
                            <td>
                                <a type="button" class="btn btn-sm btn-info fas fa-eye" data-toggle="modal" data-target="#lihat{{$b->id}}" href=""></a>
                                        <div class="modal fade bd-example-modal-lg" id="lihat{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <center><img src="{{url($b->photo)}}" alt="Image" class="text-center" style="max-width: 50%"></center>
                                                    <div class="text-center">{{ $b->judul }}</div>
                                                    <div>{!! ($b->deskripsi) !!}</div>
                                                </div>
                                            </div>
                                        </div>
                                <a type="button" class="btn btn-warning btn-sm fas fa-edit" data-toggle="modal" data-target="#ubah{{$b->id}}">
                                </a href="">
                                <div class="modal fade" id="ubah{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title">Ubah Berita</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="{{url('/berita-admin/update')}}/{{$b->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body" style="text-align: left;">
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" class="form-control " name="photo" style="height: 45px;">
                                        </div>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" placeholder="Enter..." value="{{ $b->judul }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="editor2" placeholder="Enter...">{{ $b->deskripsi }}</textarea>
                                     
                                        </div>
                                    </div>
                                </div>
                        <!-- /.card-body -->
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                                </div>
                            </div>
                        </div>
                  </div>
                                <a class="btn btn-sm btn-danger fas fa-trash-alt" href="{{url('/berita-admin/delete')}}/{{$b->id}}" onclick="return confirm('yakin?');"></a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


@endsection