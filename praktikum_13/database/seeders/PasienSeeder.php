<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pasien;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::insert([
            [
                'kode' => 'P001',
                'nama' => 'Deva Azzahra',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1990-01-01',
                'gender' => 'L',
                'email' => 'budi@example.co.id',
                'alamat' => 'Jl. Merdeka No.1',
                'kelurahan_id' => '1',
            ],
            [
                'kode' => 'P002',
                'nama' => 'Rena Revansa',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1992-02-02',
                'gender' => 'P',
                'email' => 'siti@example.co.id',
                'alamat' => 'Jl. Sudirman No.2',
                'kelurahan_id' => '1', 
            ],
            [
                'kode' => 'P003',
                'nama' => 'Dafa Rizky',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1988-03-03',
                'gender' => 'L',
                'email' => 'andi@example.co.id',
                'alamat' => 'Jl. Thamrin No.3',
                'kelurahan_id' => '2',
            ],
            [
                'kode' => 'P004',
                'nama' => 'Mahendra Kusuma',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '1995-04-04',
                'gender' => 'P',
                'email' => 'dewi@example.co.id',
                'alamat' => 'Jl. Gatot Subroto No.4',
                'kelurahan_id' => '4',
            ],
            [
                'kode' => 'P005',
                'nama' => 'Anto Laksamana',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1985-05-05',
                'gender' => 'L',
                'email' => 'eko@example.co.id',
                'alamat' => 'Jl. Sudirman No.5',
                'kelurahan_id' => '5',
            ],
        ]);
    }
}
