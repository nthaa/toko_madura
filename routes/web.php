<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('supplier',[supplierController::class, 'index'])->name('tampilsupplier');
    Route::post('supplier/simpan',[supplierController::class, 'simpan'])->name('menyimpansupplier');
    Route::get('supplier/hasil',[supplierController::class, 'hasil'])->name('hasilsupplier');

    Route::get('supplier/hapus/{id}',[supplierController::class, 'hapus'])->name('hapussupplier');
    Route::get('supplier/edit/{id}',[supplierController::class, 'edit'])->name('editsupplier');
    Route::post('supplier/update',[supplierController::class, 'update'])->name('updatesupplier');

    Route::get('produk',[ProdukController::class, 'index'])->name('tampilproduk');
    Route::post('produk/simpan',[ProdukController::class, 'simpan'])->name('menyimpanproduk');
    Route::get('produk/hasil',[ProdukController::class, 'hasil'])->name('hasilproduk');

    Route::get('produk/hapus/{id}',[ProdukController::class, 'hapus'])->name('hapusproduk');
    Route::get('produk/edit/{id}',[ProdukController::class, 'edit'])->name('editproduk');
    Route::post('produk/update',[ProdukController::class, 'update'])->name('updateproduk');
});

Route::get('kampus',[cobaController::class,'index']);


require __DIR__.'/auth.php';
