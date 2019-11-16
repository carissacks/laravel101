@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content-header')
    <h1>Mahasiswa</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Buat Mahasiswa Baru</h3>
                </div>
                <div class="box-body">
                    <form action="/mahasiswa/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nim" class="control-label">NIM</label>
                            <input type="text" name="nim" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label for="a" class="control-label">Foto</label>
                            <input type="file" name="foto" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="prodi_id" class="control-label">Program Studi</label>
                            <select name="prodi_id" class="form-control">
                                @foreach($prodis as $prodi)
                                    <option value="{{$prodi->id}}">{{$prodi->nama}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
