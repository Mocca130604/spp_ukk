<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Petugas;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {   

        // dd($request->all());
        if(Auth::attempt($request->only('username','password'))){
            return redirect('home');
        }
        // if(Auth::attempt([
        // 'username' => $request->username, 
        // 'password' => $request ->password])){
        //     return redirect('home');
        // }
        return redirect('/');
    }

//     public function postlogin(Request $req){

//         $exists = Petugas::where('username', $req->username)->exists();

//         if($exists) :
//               $petugas = Petugas::where('username', $req->username)->get();

//               foreach($petugas as $val) :
//                   Session::put('id', $val->id);
//                   $password = $val->password;
//               endforeach;

//               if(strtolower($password) == strtolower($req->password)) :

//                     Session::put('password', $password);
//                     Session::put('username', $req->username);
                    
//                     return redirect('home');
//               else :

//                      Alert::error('Gagal Login!', 'Username dan Password siswa tidak sesuai');
//                     return back();

//               endif;

//            else :
//               Alert::error('Gagal Login!', 'Data Petugas dengan username ini tidak ditemukan');
//               return back();
//            endif;
//    }
}
