<?php

namespace App\Models;

use App\Models\History;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'history_id',
    ];


    public function history(): HasMany
    {
        return $this->hasMany(History::class, 'id', 'history_id');
    }

}
