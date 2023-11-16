<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function tablesiswa(){
        return view('LayoutUtama.tablesiswa');
    }
    public function tablekelas(){
        return view('LayoutUtama.tablekelas');
    }
    public function tablespp(){
        return view('LayoutUtama.tablespp');
    }
}
