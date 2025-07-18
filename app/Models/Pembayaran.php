<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    public function pesanans(){
        return $this->hasOne(Pesanan::class,'id',  'pesanans_id');
    }
}
