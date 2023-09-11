<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatCon extends Controller
{
    public function home(){
        return view('home');
    }
    public function produk(){
        return view('produk');
    }
    public function kontak(){
        return view('kontak');
    }
    public function bukutamu(){
        return view('bukutamu');
    }
}
