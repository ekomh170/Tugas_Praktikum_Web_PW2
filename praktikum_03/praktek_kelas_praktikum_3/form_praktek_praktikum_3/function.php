<?php

function tambah($nilai1,  $nilai2) {
    echo $nilai1 + $nilai2;
}

tambah(1,2);
echo "<br>";


// Hitung Umur
function hitungUmur($tahun_lahir) {
    $tahun_sekarang = 2024;
    $hasil = $tahun_sekarang - $tahun_lahir;
    echo $hasil;
}
hitungUmur(2003);

?>