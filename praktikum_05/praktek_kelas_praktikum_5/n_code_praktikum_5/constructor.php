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
$mahasiswa1 = new Mahasiswa("Abdurrahman Ziyad", "Depok", "Teknik Informatika");

// Tampilin Data class Mahasiswa
echo "Nama Mahasiswa: " . $mahasiswa1->nama . "<br>";
echo "Alamat Mahasiswa: " . $mahasiswa1->alamat . "<br>";
echo "Jurusan Mahasiswa: " . $mahasiswa1->jurusan . "<br>";

?>