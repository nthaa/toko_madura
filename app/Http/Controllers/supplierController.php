<?php

namespace App\Http\Controllers;
use App\Models\Suppliermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class supplierController extends Controller
{
    public function index(){
        // $supplier=Suppliermodel::all();
        $supplier=Suppliermodel::simplePaginate(5);
        // return view('supplier.supplier', compact('supplier'));
        return view('supplier.supplier', ['supplier'=>$supplier]);
    }

    public function simpan(Request $request){
        $cek=$request->validate([
            'nama' => 'required|min:10',
            'toko' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);

        $supplier=Suppliermodel::create([
            'nama' => $request->nama,
            'toko' => $request->toko,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        return redirect()->route('tampilsupplier')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function hapus($id){
        $supplier=suppliermodel::find($id);
        $supplier->delete();
        return redirect()->route('tampilsupplier')->with(['success' => 'Data berhasil dihapus!']);
    }

    public function update(Request $request){
        $id=$request->input("id_supplier");
        $supplier=suppliermodel::findOrFail($id);
        $supplier->update([
            'nama' =>$request->nama,
            'toko' =>$request->toko,
            'alamat' =>$request->alamat,
            'no_telp' =>$request->no_telp
        ]);
        return redirect()->route('tampilsupplier')->with(['success' => 'Data berhasil di edit!']);
    }

    public function edit($id){
        return view("supplier.edit",['id' =>$id]); 
    }

    public function tampilsupplier(){
        return view('supplier.supplier');
    }
}
