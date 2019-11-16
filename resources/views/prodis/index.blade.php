@extends('adminlte::page')
@section('title','AdminLTE')
@section('content_header')
    <h1>Program Studi</h1>@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar Program Studi</h3>
                    <a href="prodi/create" class="btn btn-primary pull-right">Buat Prodi Baru</a>
                </div>
                <div class="box-body">
                    <table class="table">
                        <tr>
                            <th>Kode Prodi</th>
                            <th>Nama Prodi</th>
                            <th>Tindakan</th>
                        </tr>
                        @foreach($prodis as $prodi)
                            <tr>
                                <td>{{$prodi->kode}}</td>
                                <td>{{$prodi->nama}}</td>
                                <td>
                                    <a href="/prodi/edit/{{$prodi->id}}" class="btn btn-xs btn-warning">Edit</a>
                                    <form action="/prodi/delete/{{$prodi->id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-xs btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
