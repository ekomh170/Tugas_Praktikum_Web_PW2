<?php

namespace Database\Seeders;

use App\Models\Periksa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // id, tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id 
        Periksa::insert([
            [
                'tanggal' => '2021-05-22',
                'berat' => 60.5,
                'tinggi' => 170.5,
                'tensi' => '120/80',
                'keterangan' => 'Sehat',
                'pasien_id' => 1,
                'dokter_id' => 1,
            ],

            [
                'tanggal' => '2021-05-23',
                'berat' => 65.5,
                'tinggi' => 175.5,
                'tensi' => '130/90',
                'keterangan' => 'Sehat',
                'pasien_id' => 2,
                'dokter_id' => 2,
            ],

            [
                'tanggal' => '2021-05-24',
                'berat' => 70.5,
                'tinggi' => 180.5,
                'tensi' => '140/100',
                'keterangan' => 'Sehat',
                'pasien_id' => 3,
                'dokter_id' => 3,
            ],

            [
                'tanggal' => '2021-05-25',
                'berat' => 75.5,
                'tinggi' => 185.5,
                'tensi' => '150/110',
                'keterangan' => 'Sehat',
                'pasien_id' => 4,
                'dokter_id' => 4,
            ],

            [
                'tanggal' => '2021-05-26',
                'berat' => 80.5,
                'tinggi' => 190.5,
                'tensi' => '160/120',
                'keterangan' => 'Sehat',
                'pasien_id' => 5,
                'dokter_id' => 5,
            ],
        ]);

    }
}
