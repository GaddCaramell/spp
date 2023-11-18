<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tablepetugas(){
        return view('LayoutUtama.tablepetu');
    }

    public function adminDash(){
        return view('LayoutUtama.index2');
    }


    public function loginpetugas(){
        return view ('LoginLogout.loginadmin');
    }
    public function cekLoginPetu(Request $request){
        $adm = new Petugas();

        if($adm->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('LayoutUtama.index2');
        }
        return back()->with('notif','Username atau Password salah!!');
        
    }   

    public function logoutPetu(){
        session()->flush();
        return redirect('LoginLogout.loginadmin');
    }

}
