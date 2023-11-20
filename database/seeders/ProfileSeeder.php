<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile')->insert([
            'nama_sekolah' => 'SDN Percobaan I',
            'alamat' => 'Jl. Diponegoro No. 21',
            'deskripsi' => 'Deskripsi sekolah',
            'email' => 'muhamadrifqimaulanasantika@gmail.com',
            'telepon' => '085775279352',
        ]);
    }
}
