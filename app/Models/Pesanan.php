<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory; 
    public function pelanggans(){
        return $this->hasOne(Pelanggan::class, 'id', 'pelanggans_id');
    }

    public function produks(){
        return $this->hasOne(Produk::class, 'id', 'produks_id');
    }

    public function pembayarans(){
        return $this->belongTo(Pembayaran::class, 'id', 'pembayarans_id');
    }
}
