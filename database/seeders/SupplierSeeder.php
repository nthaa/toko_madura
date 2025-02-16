<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supplier')->insert([
            'nama' => 'wingsfood',
            'toko' => 'ampel',
            'alamat' => 'pamekasan',
            'no_telp' => '082345678910',
        ]);
    }
}
