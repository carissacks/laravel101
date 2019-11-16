@extends('adminlte::page')
@section('title','AdminLTE')
@section('content_header')
    <h1>Program Studi</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Buat Program Studi Baru</h3>
                </div>
                <div class="box-body">
                    <form action="/prodi/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="kode">Kode Prodi</label>
                            <input type="text" name="kode" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="control-label">Nama Prodi</label>
                            <input type="text" name="nama" class="form-control" required/>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
