<?php

namespace App\Http\Controllers;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

class ProdukController extends Controller
{
    public function index(){
        // $produk=ProdukModel::all();
        $produk=ProdukModel::simplePaginate(5);
        return view('produk.produk', ['produk'=>$produk]);
    }

    public function simpan(Request $request){
        $cek=$request->validate([
            'nama_produk' => 'required|min:10',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
            'barcode' => 'required'
        ]);

        $produk=ProdukModel::create([
            'nama_produk' => $request->nama_produk,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'barcode' => $request->barcode,
        ]);
        return redirect()->route('tampilproduk')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function hapus($id){
        $produk=produkmodel::find($id);
        $produk->delete();
        return redirect()->route('tampilproduk')->with(['success' => 'Data berhasil dihapus!']);
    }

    public function update(Request $request){
        $id=$request->input("id_produk");
        $produk=produkmodel::findOrFail($id);
        $produk->update([
            'nama_produk' =>$request->nama_produk,
            'harga_beli' =>$request->harga_beli,
            'harga_jual' =>$request->harga_jual,
            'stok' =>$request->stok,
            'satuan' =>$request->satuan,
            'barcode' =>$request->barcode
        ]);
        return redirect()->route('tampilproduk')->with(['success' => 'Data berhasil di edit!']);
    }

    public function edit($id){
        return view("supplier.edit",['id' =>$id]); 
    }

    public function tampilproduk(){
        return view('produk.produk');
    }
}
