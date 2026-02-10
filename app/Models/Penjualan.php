<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
     use HasFactory;
    protected $table = 'penjualan';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
         'barang_id',
        'jumlah'
    ];

     public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id_barang');
    }
}
