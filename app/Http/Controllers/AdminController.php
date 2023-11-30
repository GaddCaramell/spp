<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    
    public function LoginAdmin(){
        return view('LoginLogout/loginadmin');
    }


    public function logoutpetugas(){
        session()->flush();
        return redirect('LoginLogout.loginadmin');
    }

    public function simpanPetu(Request $request){
        $p = new Petugas();
        $p->create($request->all());
        return redirect('Petugastable')->with('notif','Data Berhasil Dibuat');
    }
    public function hapusPetu($idp){
        $p = new Petugas();
        $p->find($idp)->delete();
        return back();
    }
     


}
