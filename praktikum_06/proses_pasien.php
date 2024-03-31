<?php

// Memanggil file koneksi database
require 'dbkoneksi.php';

class CRUD {
    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function tambahData($data) {
        // SQL menambahkan data pasien
        $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        // Statement SQL
        $stmt = $this->dbh->prepare($sql);
        
        // Statement eksekusi
        $stmt->execute($data);
    }

    public function hapusData($id) {
        // SQL menghapus data pasien
        $sql = "DELETE FROM pasien WHERE id = ?";
        
        // Statement SQL
        $stmt = $this->dbh->prepare($sql);
        
        // Statement eksekusi
        $stmt->execute([$id]);
    }

    public function editData($id, $data) {
        // SQL mengedit data pasien
        $sql = "UPDATE pasien SET kode=?, nama=?, tmp_lahir=?, tgl_lahir=?, gender=?, email=?, alamat=?, kelurahan_id=? WHERE id=?";
        
        // Data untuk dimasukkan dalam query
        $data[] = $id;

        // Statement SQL
        $stmt = $this->dbh->prepare($sql);
        
        // Statement eksekusi
        $stmt->execute($data);
    }
}

// Inisialisasi objek CRUD
$crud = new CRUD($dbh);

// Fungsi untuk mengalihkan halaman dengan pesan alert
function redirectWithAlert($url, $message) {
    header("Location: $url?alert=" . urlencode($message));
    exit();
}

// Memeriksa apakah ada request untuk menambahkan data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["action"] == "tambah") {
// Menangkap data dari form
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_tmp_lahir = $_POST['tmp_lahir'];
    $_tgl_lahir = $_POST['tgl_lahir'];
    $_gender = $_POST['gender'];
    $_email = $_POST['email'];
    $_alamat = $_POST['alamat'];
    $_kelurahan_id = $_POST['kelurahan_id'];

    // Data untuk ditambahkan
    $dataTambah = [$_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan_id];

    // Menambahkan data
    $crud->tambahData($dataTambah);

    // Alihkan dengan pesan alert
    redirectWithAlert("data_pasien.php", "Data berhasil ditambahkan!");
}

// Memeriksa apakah ada request untuk menghapus data
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["hapus"])) {
    // Mendapatkan ID data yang akan dihapus
    $idHapus = $_GET['hapus'];

    // Menghapus data
    $crud->hapusData($idHapus);

    // Alihkan dengan pesan alert
    redirectWithAlert("data_pasien.php", "Data berhasil dihapus!");
}

// Memeriksa apakah ada request untuk mengedit data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["action"] == "edit") {
    // Menangkap data dari form
    $_id = $_POST['id'];
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_tmp_lahir = $_POST['tmp_lahir'];
    $_tgl_lahir = $_POST['tgl_lahir'];
    $_gender = $_POST['gender'];
    $_email = $_POST['email'];
    $_alamat = $_POST['alamat'];
    $_kelurahan_id = $_POST['kelurahan_id'];

    // Data untuk diubah
    $dataEdit = [$_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan_id];

    // Mengedit data
    $crud->editData($_id, $dataEdit);

    // Alihkan dengan pesan alert
    redirectWithAlert("data_pasien.php", "Data berhasil diubah!");
}

// Jika tidak ada aksi yang dilakukan, langsung alihkan ke halaman data_pasien.php
header("Location: data_pasien.php");
?>

