<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function tablesiswa(){
        $siswa = new Siswa();
        return view('LayoutUtama.tablesiswa',['siswa'=> $siswa->all()]);
    }
    public function tablekelas(){
        $kls = new Kelas();
        return view('LayoutUtama.tablekelas',['kls'=> $kls->all()]);
    }
    public function tablespp(){
        return view('LayoutUtama.tablespp');
    }
    public function tambahSiswaUI(){
        return view('Tambah.tambahsiswa');
    }

    public function simpanSiswa(Request $request){
        $siswa = new Siswa();
        $cek = $request->validate([
            'nisn'=> 'required|max:10',
            'nis'=> 'required|max:8',
            'nama'=> 'required|max:35',
            'id_kelas'=> 'required',
            'alamat'=> 'required',
            'no_telp'=> 'required|13',
            'id_spp'=> 'required',
        ]);
        $siswa->create($request->all());
        return redirect('Siswatable')->with('notif','Sukses');
        }
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
}
