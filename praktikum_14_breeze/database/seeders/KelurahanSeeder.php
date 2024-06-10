<?php

namespace Database\Seeders;

use App\Models\Kelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelurahan::insert([
            ['nama' => 'Cibaduyut', 'kecamatan_id' => '1'],
            ['nama' => 'Cibadak', 'kecamatan_id' => '2'],
            ['nama' => 'Cibangkong', 'kecamatan_id' => '3'],
            ['nama' => 'Cibuntu', 'kecamatan_id' => '4'],
            ['nama' => 'Cigadung', 'kecamatan_id' => '5'],
        ]);
    }
}
