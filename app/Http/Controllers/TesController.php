<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    //menampilkan isi session
    public function tampilkanSession(Request $request) {
        if($request->session()->has('nama') & $request->session()->has('umur') & $request->session()->has('alamat')){ 
            $nama = $request->session()->get('nama');
            $kelas = $request->session()->get('umur');
            $alamat = $request->session()->get('alamat');
            echo "Nama: " . $nama . "<br>";
            echo "umur: " . $umur ."<br>";
            echo "Alamat: " . $alamat;
        }else{
            echo 'Tidak ada data nama atau alamat dalam session.';
        }
    }

    //membuat session
    public function buatSession(Request $request) {
        $request->session()->put('nama', 'Yoongi');
        $request->session()->put('umur', '30 Tahun');
        $request->session()->put('alamat', 'Korea Selatan');
        echo "Data telah ditambahkan ke session.";
    }

    //menghapus session
    public function hapusSession(Request $request) {
        $request->session()->forget('nama');
        $request->session()->forget('umur');
        $request->session()->forget('alamat');
        echo "Data telah dihapus dari session.";
    }
}