<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatOlahraga extends Model
{
    use HasFactory;
    
    // Tentukan nama tabelnya
    protected $table = 'alat_olahraga';

    // Tentukan kolom yang boleh diisi
    protected $fillable = [
        'nama_produk',
        'stok',
        'harga_beli',
        'harga_jual',
    ];
}