<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
