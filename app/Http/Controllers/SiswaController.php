<?php

namespace App\Http\Controllers;

//use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = DB::table('kelas')->get();
        $siswa = DB::table('siswa')
        ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
        ->get();
        // $siswa = siswa::all();
        return view('siswa/siswa_daftar' , compact('siswa','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $kelas = DB::table('kelas')->get();
        //DD($kelas);
        return view('siswa/siswa_add', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('siswa')->insert([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'no_telpon' => $request->telp,
          ]
          );
          return redirect('siswa')->with('status', 'User Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$siswa = DB::table('siswa')
		->where('nama','like',"%".$cari."%")
        ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('siswa/siswa_daftar',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = DB::table('kelas')->get();
        $siswaedit = DB::table('siswa')
        ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
        ->where('nisn', $id)->first(); 
        return view('siswa/siswa_edit', compact('siswaedit','kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('siswa')->where('nisn', $id)
     ->update([
        'nisn' => $request->nisn,
        'nis' => $request->nis,
        'nama' => $request->nama,
        'id_kelas' => $request->kelas,
        'alamat' => $request->alamat,
        'no_telpon' => $request->telp
     ]); 
     return redirect('siswa')->with('status', 'User Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('siswa')->where('nisn', $id)->delete();
        return redirect('siswa')->with('status', 'User Berhasil Di Hapus!');
    }

  
}
