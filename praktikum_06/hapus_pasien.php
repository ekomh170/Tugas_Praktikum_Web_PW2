
<?php
// <!-- Hapus Data PDO -->

// Memanggil file koneksi database
require 'dbkoneksi.php';

// Menangkap data yang dikirimkan melalui URL
$id = $_GET['id'];
// Cek apakah id yang dikirimkan melalui URL ada
if (!isset($id) || $id == "") {
    // Jika tidak ada, redirect ke halaman data_pasien.php
    header("Location: data_pasien.php");
}

// Menyiapkan query SQL untuk menghapus data pasien berdasarkan id
$sql = "DELETE FROM pasien WHERE id = ?";

// Mempersiapkan statement PDO untuk eksekusi query
$stmt = $dbh->prepare($sql);
$stmt->execute([$id]);

// Url redirect ke halaman data_pasien.php
header("Location: data_pasien.php");
