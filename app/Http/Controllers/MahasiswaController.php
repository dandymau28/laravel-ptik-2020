<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel as Mahasiswa; // memanggil model mahasiswa untuk digunakan eloquent;
use DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allMahasiswa = Mahasiswa::all();

        return view('mahasiswa', [
            //key => value
            // key -> digunakan sebagai nama variable di view
            // value -> digunakan sebagai isi dari variable tsb
            'mahasiswas' => $allMahasiswa
        ]);

        /**
         * array key => integer
         * 1: john
         * 2: doe
         *
         * associatve array key => custom (string)
         * nama: john
         * jurusan: ptik
         * angkatan: 2020
         */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('mahasiswa')->insert([
            "nama" => $request->nama,
            "jurusan" => $request->jurusan,
            "angkatan" => $request->angkatan
        ]);

        return redirect()->route('mahasiswa.index');
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
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->first();

        return view('form_edit_mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
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
        DB::table('mahasiswa')->where('id', $id)->update([
            "nama" => $request->nama,
            "jurusan" => $request->jurusan,
            "angkatan" => $request->angkatan
        ]);

        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = DB::table('mahasiswa')->where('id', $id)->first();

        if(empty($user)) {
            return redirect()->route('mahasiswa.index')->withErrors([
                'not_found' => 'Data mahasiswa tidak ditemukan'
            ]);
        }

        DB::table('mahasiswa')->where('id', $id)->delete();

        return redirect()->route('mahasiswa.index');

        // Check mahasiswa by id
        // kalo ada, hapus
        //redirect -> index
    }
}
