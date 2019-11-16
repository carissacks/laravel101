@extends('adminlte::page')
@section('title','AdminLTE')
@section('content_header')
    <h1>Mahasiswa</h1>@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Mahasiswa</h3>
                <a href="mahasiswa/create" class="btn btn-primary pull-right">Buat Mahasiswa Baru</a>
            </div>
            <div class="box-body">
                <table class="table">
                    <tr>
                        <th>Foto</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Program Studi</th>
                        <th>Date</th>
                        <th>Tindakan</th>
                    </tr>

                    @foreach($mahasiswas as $mhs)
                        <tr>
                            <td>
                                <img src="images/thumbnails/{{$mhs->foto}}" alt="asd">
                            </td>
                            <td>{{$mhs->nim}}</td>
                            <td>{{$mhs->nama}}</td>
                            <td>{{$mhs->prodi->nama}}</td>
                            <td>{{$mhs->created_at}}</td>
                            <td>
                                <a href="/mahasiswa/edit/{{$mhs->id}}" class="btn btn-xs btn-warning">Edit</a>
                                <form action="/mahasiswa/delete/{{$mhs->id}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-xs btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </table>
                {{ $mahasiswas->links() }}
            </div>
        </div>
    </div>
</div>
@stop
