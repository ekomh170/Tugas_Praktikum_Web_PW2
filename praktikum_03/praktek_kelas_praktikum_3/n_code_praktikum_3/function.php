<?php
// Buat Fungsi hitungUmur
function hitungUmur($thn_lahir) {
    // Menghitung selisih antara tahun lahir dan tahun sekarang
    $thn_sekarang = 2023;
    // Menghitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // Mengembalikan nilai umur
    return $umur;
}

// Contoh penggunaan fungsi hitungUmur
echo "Umur saya adalah " . hitungUmur(2001) . " tahun.";
?>