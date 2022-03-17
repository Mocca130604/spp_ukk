<?php

namespace App\Http\Controllers;

use App\Models\Kela;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $angkatan = DB::table('angkatan')->get();
        return view('kelas.kelas_add', compact('angkatan'));
    }

    public function addprocces(Request $request)
    {
        $namakelas = $request->kelas."-".$request->jurusan."$request->nomor";
    
        DB::table('kelas')->insert([
            'nama_kelas' => $namakelas,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
            'kelas' => $request->kelas,
            'nomor_kelas' => $request->nomor
          ]
          );
          return redirect('kelas_daftar')->with('status', 'User Berhasil Di Tambahkan!');
      return redirect('kelas_daftar')->with('status', 'Kelas Berhasil Di Tambahkan!');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $kelas = Kela::all();
        // return $kelas;
        $kelas = DB::table('kelas')->get(); 
        return view('kelas.kelas_daftar', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelasedit = DB::table('kelas')->where('id_kelas', $id)->first(); 
      return view('kelas/kelas_edit', compact('kelasedit'));
    }
    public function editprocces(Request $request ,$id)
    {
        $namakelas = $request->kelas."-".$request->jurusan."$request->nomor";
    
        DB::table('kelas')->where('id_kelas', $id)
        ->update([
            'nama_kelas' => $namakelas,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
            'kelas' => $request->kelas,
            'nomor_kelas' => $request->nomor
        ]);
        return redirect('kelas_daftar')->with('status', 'Kelas Berhasil Di Update!');
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
        DB::table('kelas')->where('id_kelas', $id)->delete();
        return redirect('kelas_daftar')->with('status', 'kelas Berhasil Di Hapus!');
    }
}
