<?php

namespace App\Models;

use App\Models\Resi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_resi',
        'status',
        'lokasi',
    ];

    /**
     * Get the resi that owns the History
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resi(): BelongsTo
    {
        return $this->belongsTo(Resi::class, 'nomor_resi', 'nomor');
    }




}
