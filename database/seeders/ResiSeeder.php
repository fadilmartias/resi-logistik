<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Resi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resi::create([
            'nomor' => 11950115110,
            'tanggal' => Carbon::parse('2000-01-01'),
            'berat' => 1,
            'ukuran' => 50, 
            'isi' => 'makanan',
            'layanan' => 'antar',
            'pengirim' => 'padel', 
            'penerima' => 'ridu',
            'history_id' => '1'
        ]);
    }
}
