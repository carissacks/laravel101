<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Prodi;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas= Mahasiswa::paginate(10); //supaya 1 page cmn ad 10 isi. nanti di view nya hrs ditambahin 1 baris code lagi buat munuclin paginationnya.
//        $mahasiswa= Mahasiswa::table
        return view('mahasiswa.index',compact('mahasiswas')); //compact untuk kirim var ke tujuan.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodis= Prodi::all();
        return view('mahasiswa.create', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa= new Mahasiswa();
        $mahasiswa->nim= $request->nim;
        $mahasiswa->nama= $request->nama;
        $mahasiswa->prodi_id= $request->prodi_id;
        $foto= $request->file("foto");
        var_dump($foto);
        //foto
        if($foto){
            echo "OK";
            $filename= time().'.'.$foto->getClientOriginalExtension();

            //save thumbnail
            $destinationPath= public_path('/images/thumbnails');
            $img= Image::make($foto->getRealPath());
            $img->fit(100)->save($destinationPath.'/'.$filename);

            //save original
            $destinationPath= public_path('/images/original');
            $foto->move($destinationPath, $filename);

            $mahasiswa->foto= $filename;
            var_dump($destinationPath);
        }

        $mahasiswa->save();
        //return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
