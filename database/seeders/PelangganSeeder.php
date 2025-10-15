<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('pelanggan')->insert([
            [
                'nama' => 'Anggraeni Putri',
                'email' => 'putri@example.com',
                'no_telepon' => '081234567890',
                'alamat' => 'Jl. Pemuda No. 10, Banjarnegara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Wildan Rizki',
                'email' => 'wildan@example.com',
                'no_telepon' => '082233445566',
                'alamat' => 'Jl. Munawaroh No. 15, Banjarnegara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewi Ratna',
                'email' => 'dewi@example.com',
                'no_telepon' => '083355667788',
                'alamat' => 'Jl. Madukara No. 20, Banjarnegara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
