<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view("produk.index",[
            "dataProduk" => $produk
        ]);
        
    }

    public function create(){
        return view('produk.create');
    }

    public function store(Request $request){
        $data = new Produk();
        $data->id = $request->id;
        $data->nama_produk = $request->nama_produk;
        $data->harga = $request->harga;
        $data->stock = $request->stock;
        $data->save();
        return redirect('/tampil-produk');
    }

    public function edit($id){
        $data = Produk::find($id);
        return view('produk.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Produk::find($id);
        $data->nama_produk = $request->nama_produk;
        $data->harga = $request->harga;
        $data->stock = $request->stock;
        $data->update();
        return redirect('/tampil-produk');
    }

    public function destroy($id){
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/tampil-produk');
    }

}
