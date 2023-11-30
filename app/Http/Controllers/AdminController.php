<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tablepetugas(){
        $petu = new Petugas();
        return view('LayoutUtama.tablepetu',['petu'=> $petu->all()]);
    }

    public function adminDash(){
        return view('LayoutUtama.index2');
    }


    public function loginpetugas(){
        return view ('LoginLogout.loginadmin');
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
     

    public function logoutPetu(){
        session()->flush();
        return redirect('LoginLogout.loginadmin');
    }

}
