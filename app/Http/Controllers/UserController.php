<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Response;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
      
      return view('user.user_add');
    }

    public function addprocces(Request $request)

    {

      // Log:info($request);
      DB::table('petugas')->insert([
        'username' => $request->username,
        'password' => $request->password,
        'nama_petugas' => $request->name,
        'level' => $request->role
      ]
      );
      return redirect('user_daftar')->with('status', 'User Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = DB::table('petugas')->get(); 
        return view('user.user_daftar', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
      $useredit = DB::table('petugas')->where('id_petugas', $id)->first(); 
      return view('user/user_edit', compact('useredit'));
    }

    public function editprocces(Request $request, $id)
    {
        
     DB::table('petugas')->where('id_petugas', $id)
     ->update([
      'username' => $request->username,
      'password' => $request->password,
      'nama_petugas' => $request->name,
      'level' => $request->role
     ]); 
     return redirect('user_daftar')->with('status', 'User Berhasil Di Update!');
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
        DB::table('petugas')->where('id_petugas', $id)->delete();
        return redirect('user_daftar')->with('status', 'User Berhasil Di Hapus!');
    }
}
