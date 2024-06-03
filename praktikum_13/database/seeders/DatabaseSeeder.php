<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UnitkerjaSeeder::class,
            KelurahanSeeder::class,
            DokterSeeder::class,
            PasienSeeder::class,
            PeriksaSeeder::class,
        ]);
    }
}
