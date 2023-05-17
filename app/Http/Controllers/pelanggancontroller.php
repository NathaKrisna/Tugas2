<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelanggancontroller extends Controller
{
    public function index(){
        $pelanggan = $this->dataPelanggan();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public Function dataPelanggan(){
        $pelanggan = ['Mengocok 1 Kartu yang terdiri dari 52 lembar','Membagikan kartu sejumlah 13 ke masing masing pemain','Merapikan kartu sesuai dengan warna dan jenisnya','Menghitung poin','Menulis hasil analisis'];
        return $pelanggan;
    }
}
