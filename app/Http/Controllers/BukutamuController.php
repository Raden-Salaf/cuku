<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class BukutamuController extends Controller
{
    public function index (){
        $bukutamu = DB::table('daftar')->get();
        return view('bukutamu',['bukutamu'=> $bukutamu]);
    }
    public function tambah ()
    {
        return view("tambahbukutamu");
    }
    public function store (Request $request)
    {
        DB::table('daftar')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'no_telepon' => $request->telepon,
            'jumlah_pesanan' => $request->pesanan,
            'alamat' => $request->alamat,
        ]);
        return redirect('/bukutamu');
    }
    public function edit ($id)
    {
        $bukutamu = DB::table('daftar')->where('id', $id)->get();
        return view('editbukutamu', ['bukutamu' => $bukutamu]);
    }
    public function update(Request $request)
    {
        #dd($request->all());
        DB::table('daftar')->where('id', $request->id)->update([
            'id' => $request->id,
            'nama' => $request->nama,
            'no_telepon' => $request->telepon,
            'jumlah_pesanan' => $request->pesanan,
            'alamat' => $request->alamat,
        ]);
        return redirect('/bukutamu');
    }
    public function delete($id)
    {
        DB::table('daftar')->where('id', $id)->delete();
        return redirect('/bukutamu');
    }

}
