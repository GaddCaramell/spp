<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function tablesiswa(){
        $siswa = new Siswa();
        $datakelas = new Kelas();
        $dataspp = new Spp();
        $siswa = $siswa->with(['Kelas','Spp'])->get();
        return view('LayoutUtama.tablesiswa',['siswa'=> $siswa,'kls'=> $datakelas->all(),'spp'=> $dataspp->all()]);
    }
    public function tablekelas(){
        $kls = new Kelas();
        return view('LayoutUtama.tablekelas',['kls'=> $kls->all()]);
    }
    public function tablespp(){
        $spp = new Spp();
        return view('LayoutUtama.tablespp',['spp'=> $spp->all()]);
    }
    // public function tambahSiswaUI(){
    //     return view('Tambah.tambahsiswa');
    // }

    //Start CRUD Siswa
    public function simpanSiswa(Request $request){
        $siswa = new Siswa();
        // $cek = $request->validate([
        //     'nisn'=> 'required|max:10',
        //     'nis'=> 'required|max:8',
        //     'nama'=> 'required|max:35',
        //     'id_kelas'=> 'required',
        //     'alamat'=> 'required',
        //     'no_telp'=> 'required|13',
        //     'id_spp'=> 'required',
        // ]);
        $siswa->create($request->all());
        return redirect('Siswatable')->with('notif','Sukses');
    }

    public function hapusSiswa($nisn){
        $siswa = new Siswa();
        $siswa->find($nisn)->delete();
        return back()->with('notif','Sukses Dihapus');
    }

    // END CRUD Siswa

    //Start CRUD Kelas
    public function simpanKelas(Request $request){
        $kls = new Kelas();
        $cek = $request->validate([
            'nama_kelas'=>'required|max:10',
            'kompetensi_keahlian'=>'required|max:35',
        ]);
        $kls->create($request->all());
        return redirect('Kelastable')->with('notif','Sukses');
    }
    public function hapusKelas($id){
        $kls = new Kelas();
        $kls->find($id)->delete();
        return back()->with('notif','Sukses Dihapus');
    }

    public function editKelas(Request $request,$id){
        $kls = new Kelas();
        $kls->find($id)->update($request->all());
        return back()->with('notif','Sukses  Diedit');
    }
    //End CRUD Kelas

    //Start CRUD Spp 
    public function simpanSpp(Request $request){
        $sp = new Spp();
        $cek = $request->validate([
            'tahun'=>'required|max:4',
            'nominal'=>'required',
        ]);
        $sp->create($request->all());
        return redirect('Spptable')->with('notif','Sukses');
    }
    public function hapusSpp($ids){
        $sp = new Spp();
        $sp->find($ids)->delete();
        return back()->with('notif','Sukses Dihapus');
    }   
    //End CRUD Spp
}
