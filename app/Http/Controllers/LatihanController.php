<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function home(){
        return view('layouts.home');
    }
    public function produk(){
        return view( 'layouts.produk');
    }

    public function transaksi(){
        return view('layouts.transaksi');
    }

    public function laporan(){
        return view('layouts.laporan');
    }
}
