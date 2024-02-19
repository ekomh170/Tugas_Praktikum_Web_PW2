<?php

// Deklarasi array multidimensi mahasiswa
$mahasiswa = [
  ["Eko Muchamad Haryono", "Teknik Informatika"],
  ["Alvin Abdulloh", "Sistem Informasi"],
  ["Siti Karimah Warlidah", "Bisnis Digital"],
  ["Muhammad Akbar Maulana", "Manajemen Teknik Informatika"]
];

// Cetak isi array menggunakan perulangan foreach
foreach ($mahasiswa as $mhs) {
  echo "Nama : " . $mhs[0] . "<br>";
  echo "Jurusan : " . $mhs[1] . "<br>";
  echo "<br>";
}

?>