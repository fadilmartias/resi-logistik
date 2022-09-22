<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@logos.com',
            'password' => Hash::make('123456'),
            'email_verified_at'=>'2022-01-02 17:04:58',
            'avatar' => 'avatar-1.jpg',
        ])->assignRole('Admin');

        User::create([
            'name' => 'Gudang',
            'username' => 'gudang',
            'email' => 'gudang@logos.com',
            'password' => Hash::make('123456'),
            'email_verified_at'=>'2022-01-02 17:04:58',
            'avatar' => 'avatar-1.jpg',
        ])->assignRole('Gudang');
    }
}
