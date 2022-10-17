@extends('layouts.admin.master')    

@section('title','Penulis')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PENULIS</h1>
                    @foreach($texts as $text)
                    <h1>{{ $text->judul }}</h1>
                    @endforeach
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah">
                <i class="fa fa-plus" style="font-size:15px">Tambah Penulis</i>
            </button>
                <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah penulis</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('/penulis-admin/store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body" style="text-align: left;">
                                        <div class="form-group">
                                            <label>Photo(370x310)</label>
                                            <input type="file" class="form-control " name="photo" style="height: 45px;">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" placeholder="Enter..." autocomplete="off">
                                        </div>
                                        <div class="form-group">
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
                </div>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Nama Penulis</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <?php $no=1; ?>
                     @foreach($penulis as $p)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td style="width: 150px;">
                                <img src="{{url($p->photo)}}" alt="Image" class="image" style="max-width: 100%">
                            </td>
                            <td style="width: 200px;">{{ $p->nama }}</td>
                            <td style="width: 500px;">{!! Str::subStr($p->deskripsi, 0, 270) !!}</td>
                            <td>
                                <a type="button" class="btn btn-sm btn-info fas fa-eye" data-toggle="modal" data-target=".view-lg"></a>
                                <div class="modal fade view-lg" id="view-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Lihat Penulis</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="card-body" style="text-align: left;">
                                              <div class="form-group">
                                                  <img src="{{url($p->photo)}}" alt="Image" class="image" style="width: 120px;">
                                                  <div>{{ $p->nama }}</div>
                                                  <div>{!! $p->deskripsi !!}</div>
                                              </div>
                                          </div>
                                      </div>
                                      </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <a type="button" class="btn btn-warning btn-sm fas fa-edit" data-toggle="modal" data-target="#ubah{{$p->id}}">
                                </a>
                                <div class="modal fade" id="ubah{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Ubah Penulis</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                      <form action="{{url('/penulis-admin/update')}}/{{$p->id}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          <div class="card-body" style="text-align: left;">
                                              <div class="form-group">
                                                  <label>Photo</label>
                                                  <input type="file" class="form-control " name="photo">
                                              </div>
                                              <div class="form-group">
                                                  <label>Nama Penulis</label>
                                                  <input class="form-control" name="judul" placeholder="Enter..." value="{{ $p->nama }}">
                                              </div>
                                              <div class="form-group">
                                                  <label>Deskripsi</label>
                                                  <textarea class="form-control" name="deskripsi" id="editor2" placeholder="Enter...">{{ $p->deskripsi }}</textarea>
                                           
                                              </div>
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
                                <a class="btn btn-sm btn-danger fas fa-trash-alt" href="{{url('/penulis-admin/delete')}}/{{$p->id}}" onclick="return confirm('yakin?');"></a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>    
            </div>
          </div>      
          <div style="margin: 20px;">
            {{ $penulis->links('vendor.pagination.custom') }}
        </div>
        </div>
    </section>
</div>
@endsection