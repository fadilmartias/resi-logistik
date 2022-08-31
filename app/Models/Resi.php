<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor',
        'tanggal',
        'berat',
        'ukuran',
        'isi',
        'layanan',
        'pengirim',
        'penerima',
        'status',
    ];
}
