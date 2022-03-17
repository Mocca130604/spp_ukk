<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi.transaksi_daftar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

 
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
        $nisn = $request->nisn;
        $nama = $request->nama;
        $tanggal = strtotime($request->date);
        $result = DB::table('siswas')
            ->where('nama','=',$nama)
             ->first();

        if ($result->nisn == $nisn) {
        DB::table('pembayaran')->insert([
            'nisn' => $request->nisn,
            'id_petugas' => '5',
            'tanggal_bayar' => $request->date,
            'bulan_spp' => date('m',$tanggal),
            'tahun_spp' => date('Y',$tanggal)
           ]
          );
          return redirect('transaksi')->with('status', 'Transaksi Berhasi!');
        }else {
              return redirect('transaksi')->with('status', 'Transaksi Gagal!');
        }

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
