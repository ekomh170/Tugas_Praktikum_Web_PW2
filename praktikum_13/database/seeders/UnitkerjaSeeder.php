<?php

namespace Database\Seeders;

use App\Models\Unitkerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitkerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unitkerja::insert([
            ['nama' => 'Rumah Sakit Jakarta'],
            ['nama' => 'Rumah Sakit Surabaya'],
            ['nama' => 'Klinik Bandung'],
            ['nama' => 'Puskesmas Yogyakarta'],
            ['nama' => 'Rumah Sakit Semarang'],
        ]);
        
    }
}
