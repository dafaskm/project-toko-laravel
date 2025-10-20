<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatKosmetik extends Model
{
    use HasFactory;
    
    // Tentukan nama tabelnya
    protected $table = 'alat_kosmetik';

    // Tentukan kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'qty',
        'harga_beli',
        'harga_jual',
    ];
}