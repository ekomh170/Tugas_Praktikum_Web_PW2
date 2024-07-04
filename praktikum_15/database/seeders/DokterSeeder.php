<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // nama, gender, tempat lahir, tanggal lahir, kategori, telpon, alamat, unit kerja_id
        Dokter::insert([
            // $table->timestamps();
            [
                'nama' => 'Dr. Budi Santoso',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1990-01-01',
                'kategori'  => 'Umum',
                'telpon' => '081234567890',
                'alamat' => 'Jl. Merdeka No.1',
                'unitkerja_id' => 1,
            ],
            [
                'nama' => 'Dr. Siti Aminah',
                'gender' => 'P',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1992-02-02',
                'kategori'  => 'Gigi',
                'telpon' => '081234567891',
                'alamat' => 'Jl. Sudirman No.2',
                'unitkerja_id' => 1,
            ],

            [
                'nama' => 'Dr. Andi Prasetyo',
                'gender' => 'L',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1988-03-03',
                'kategori'  => 'Umum',
                'telpon' => '081234567892',
                'alamat' => 'Jl. Thamrin No.3',
                'unitkerja_id' => 2,
            ],
            [
                'nama' => 'Dr. Dewi Lestari',
                'gender' => 'P',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '1995-04-04',
                'kategori'  => 'Gigi',
                'telpon' => '081234567893',
                'alamat' => 'Jl. Gatot Subroto No.4',
                'unitkerja_id' => 4,
            ],
            [
                'nama' => 'Dr. Eko Wijaya',
                'gender' => 'L',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1998-05-05',
                'kategori'  => 'Umum',
                'telpon' => '081234567894',
                'alamat' => 'Jl. Sudirman No.5',
                'unitkerja_id' => 5,
            ],
        ]);
    }
}
