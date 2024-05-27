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
            ['nama' => 'Cibaduyut'],
            ['nama' => 'Cibadak'],
            ['nama' => 'Cibangkong'],
            ['nama' => 'Cibuntu'],
            ['nama' => 'Cigadung'],
            ['nama' => 'Cigending'],
            ['nama' => 'Cigereleng'],
            ['nama' => 'Cihapit'],
            ['nama' => 'Cijagra'],
            ['nama' => 'Cikawao'],
            ['nama' => 'Cikutra'],
            ['nama' => 'Cikondang'],
        ]);
    }
}
