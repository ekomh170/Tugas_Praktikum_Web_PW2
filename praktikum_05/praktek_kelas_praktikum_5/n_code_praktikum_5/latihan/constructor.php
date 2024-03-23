<?php

class Mahasiswa
{
    public $nama;
    public $alamat;
    public $jurusan;

    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }
}

// Membuat objek dari class Mahasiswa
$data_mhs = new Mahasiswa("Eko Muchamad Haryono", "Kab. Bogor", "Teknik Informatika");

// Tampilin Data class Mahasiswa
echo "Nama Mahasiswa: " . $data_mhs->nama . "<br>";
echo "Alamat Mahasiswa: " . $data_mhs->alamat . "<br>";
echo "Jurusan Mahasiswa: " . $data_mhs->jurusan . "<br>";

?>