<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Suppliermodel extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $primaryKey = 'id_supplier';
    protected $fillable = ['nama_produk', 'toko', 'alamat', 'no_telp'];
}
