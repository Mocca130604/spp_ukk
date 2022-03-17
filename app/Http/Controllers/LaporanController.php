<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = DB::table('pembayaran')
        ->join('petugas','pembayaran.id_petugas','=','petugas.id_petugas')
        ->join('siswas','pembayaran.nisn','=','siswas.nisn')
        ->get();
        return view('laporan.laporan_transaksi', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(Request $request)
    {
        $cari = $request->cari;
 
        // mengambil data dari table pegawai sesuai pencarian data
            $laporan = DB::table('pembayaran')
            ->where('nama','like',"%".$cari."%")
            ->join('petugas','pembayaran.id_petugas','=','petugas.id_petugas')
            ->join('siswas','pembayaran.nisn','=','siswas.nisn')
            ->paginate();

                // mengirim data pegawai ke view index
            return view('laporan.laporan_transaksi',compact('laporan'));
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
