<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AngkatanCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $angkatan = DB::table('angkatan')->get(); 
        return view('angkatan.angkatan_daftar', compact('angkatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('angkatan.angkatan_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('angkatan')->insert([
            'angkatan' => $request->angkatan,
            'tahun_masuk' => $request->masuk,
            'tahun_keluar' => $request->keluar,
          ]
          );
          return redirect('angkatan')->with('status', 'angkatan Berhasil Di Tambahkan!');
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
        $angkatanedit = DB::table('angkatan')->where('id_angkatan', $id)->first(); 
        return view('angkatan/angkatan_edit', compact('angkatanedit'));
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
    DB::table('angkatan')->where('id_angkatan', $id)
     ->update([
      'angkatan' => $request->angkatan,
      'tahun_masuk' => $request->masuk,
      'tahun_keluar' => $request->keluar,
     ]); 
     return redirect('angkatan')->with('status', 'angkatan Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('angkatan')->where('id_angkatan', $id)->delete();
        return redirect('angkatan')->with('status', 'angkatan Berhasil Di Hapus!');
    }
}
