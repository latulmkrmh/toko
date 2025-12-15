<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
 
    protected $table = 'produk';
    protected $primarykey = 'id_produk';

    protected $fillable = [
        'nama_produk',
        'kategori',
        'harga_satuan',
        'stok',
        'satuan'
    ];
    
}
