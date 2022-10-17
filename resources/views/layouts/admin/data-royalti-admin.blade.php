@extends('layouts.admin.master')    

@section('title','Data Royalti')


@section('content')
  <div class="content-wrapper">
    <section class="content-header" style="padding-bottom: 0px;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Royalti</h1>
          </div>
          <div class="col-sm-6">
            <ol class="float-sm-right">
            <a href="{{route('exportdataroyalti')}}" type="button" class="btn btn-success btn-sm mr-2">
                <i class="fa fa-download" style="font-size:15px"> Download Data</i>
              </a>
              <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#importdata">
                <i class="fa fa-upload" style="font-size:15px"> Import Data</i>
              </button>
                <div class="modal fade" id="importdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{route('importdataroyalti')}}" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                          {{ csrf_field()}}
                          <div class="form-group">
                            <input type="file" name="file" required="required">
                          </div>
                      </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Selesai</button>
                          <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                      </form>
                      </div>
                  </div>
                </div>
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambah">
                <i class="fa fa-plus" style="font-size:15px"> Tambah Data</i>
              </button>
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Berita</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/data-royalti-admin/store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body" style="text-align: left;">
                                    <div class="form-group">
                                        <label>Judul Buku</label>
                                        <input class="form-control" name="judul" placeholder="Enter..." autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Penulis</label>
                                        <input class="form-control" name="penulis" placeholder="Enter..." autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" name="harga" placeholder="Enter..." autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Terjual</label>
                                        <input class="form-control" name="terjual" placeholder="Enter..." autocomplete="off">
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
      </div>
    </section>
    <section class="content">
      <div class="card">
        <div class="card-body" style="padding-top: 0px;">
            <div class="table-responsive">
              <nav class="navbar navbar-light justify-content-between float-sm-right">
                <!-- Search -->
                <form action="{{ url('data-royalti-admin')}}" method="GET" class="form-inline">
                  <input type="text" name="search" autocomplete="off" class="form-control mr-sm-2"  placeholder="Cari..." value="{{request('search')}}">
                  <button class="btn btn-primary" type="submit">Cari</button>
                </form>
                <!-- end Search -->
              </nav>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">kode</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Terjual</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <?php $no=1; ?>
                    @foreach($dataroyalti as $d)
                    <tbody>
                        <tr>
                            <th scope="row">{{ ($d->kode)}}</th>
                            <td>{{ Str::subStr($d->judul,0,20) }}..</td>
                            <td>{{ Str::subStr($d->penulis,0,20) }}..</td>
                            <td>Rp.{{ $d->harga }}</td>
                            <td>{{ $d->terjual }}</td>
                          
                            <td>
                                <a class="btn btn-sm btn-warning fas fa-edit mr-2" data-toggle="modal" data-target="#ubah{{$d->id}}"></a href="">
                                <div class="modal fade" id="ubah{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Ubah Data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                      <form action="{{url('/data-royalti-admin/update')}}/{{$d->id}}" method="POST" enctype="multipart/form-data">
                                      @method('put')
                                          @csrf
                                          <div class="card-body" style="text-align: left;">
                                              <div class="form-group">
                                                  <label>Judul</label>
                                                  <input class="form-control" name="judul" placeholder="Enter..." value="{{ $d->judul }}">
                                              </div>
                                              <div class="form-group">
                                                  <label>Penulis</label>
                                                  <input class="form-control" name="penulis" placeholder="Enter..." value="{{ $d->penulis }}">
                                              </div>
                                              <div class="form-group">
                                                  <label>Harga</label>
                                                  <input class="form-control" name="harga" placeholder="Enter..." value="{{ $d->harga }}">
                                              </div>
                                              <div class="form-group">
                                                  <label>Terjual</label>
                                                  <input class="form-control" name="terjual" placeholder="Enter..." value="{{ $d->terjual }}">
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
                                <a class="btn btn-sm btn-danger fas fa-trash-alt" href="{{url('/data-royalti-admin/delete')}}/{{$d->id}}" onclick="return confirm('yakin?');"></a>
                                <!-- <a class="btn btn-sm btn-danger fas fa-trash-alt" href="/exportpdf">Export</a> -->
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <!-- Pagination -->
                <div class="pagination justify-content-center">
                  {{ $dataroyalti->links()}}
                </div>
                <!-- End Pagination -->
            </div>
        </div>
      </div>
    </section>
  </div>
@endsection