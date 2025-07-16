<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table = 'pelanggan'; // ini solusinya
    public function pesanans(){
        return $this->belongTo(Pesanan::class);
    }
}

