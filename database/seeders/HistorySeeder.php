<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        History::create([
            'nomor_resi' => 11950115110,
            'status' => 'Barang telah dipacking dan siap dijemput oleh kurir',
            'lokasi' => 'Pekanbaru'
        ]);
    }
}
