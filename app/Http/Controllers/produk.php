<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produk extends Controller
{
    public Function index()
    {
        $produk = 'Tahapan Bermain Bridge';
        return view('produk/index',compact('produk'));
        //echo "coba";
    }
    public Function show(){
        $produk = ['Membagikan Kartu sejumlah 13','Merapikan kartu sesuai jenis dan warnanya','Menghitung poin. Setiap As = 4, K = 3, Q = 2, J = 1, Angka 2-10 = 0','Mencatat hasil analisis'];
        return view('produk/show',compact('produk'));
    }

}   
