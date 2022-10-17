@extends('layouts.admin.master')    

@section('title','Data Royalti')


@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Royalti</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <button type="button" class="btn btn-info btn-sm mr-2">
                <i class="fa fa-upload" style="font-size:15px"> Upload Data</i>
              </button>
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
    @foreach($datas as $data)
    <div>
        <ul>
            <li>{{ $data->id }}</li>
            <li>{{ $data->judul }}</li>
            <li>{{ $data->nama }}</li>
        </ul>    
    </div>
    <div><a href="/cetak/{{ $data->id }}" class="btn btn-primary">Cetak</a></div>
    @endforeach
  </div>
@endsection