<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('supplier',[SupplierController::class, 'index'])->name('tampilsupplier');
    Route::post('supplier/simpan',[SupplierController::class, 'simpan'])->name('menyimpansupplier');
    Route::get('supplier/hasil',[SupplierController::class, 'hasil'])->name('hasilsupplier');

    Route::get('supplier/hapus/{id}',[SupplierController::class, 'hapus'])->name('hapussupplier');
    Route::get('supplier/edit/{id}',[SupplierController::class, 'edit'])->name('editsupplier');
    Route::post('supplier/update',[SupplierController::class, 'update'])->name('updatesupplier');

    Route::get('produk',[ProductController::class, 'index'])->name('tampilproduk');
    Route::post('produk/simpan',[ProductController::class, 'simpan'])->name('menyimpanproduk');
    Route::get('produk/hasil',[ProductController::class, 'hasil'])->name('hasilproduk');

    Route::get('produk/hapus/{id}',[ProductController::class, 'hapus'])->name('hapusproduk');
    Route::get('produk/edit/{id}',[ProductController::class, 'edit'])->name('editproduk');
    Route::post('produk/update',[ProductController::class, 'update'])->name('updateproduk');
});



require __DIR__.'/auth.php';
