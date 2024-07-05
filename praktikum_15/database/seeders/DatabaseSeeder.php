<?php

namespace Database\Seeders;

use App\Models\User;
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
            UserSeeder::class,
        ]);
    }
}
