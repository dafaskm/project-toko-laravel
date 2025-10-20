<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'stok',
        'harga_beli',
        'harga_jual',
    ];
}
