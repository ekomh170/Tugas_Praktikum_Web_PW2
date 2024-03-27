<!-- Edit Form -->
<?php
// Memanggil file koneksi database
require 'dbkoneksi.php';

// Menangkap data yang dikirimkan melalui URL
$_id = @$_GET['id'];
// Cek apakah id yang dikirimkan melalui URL ada

// Menyiapkan query SQL untuk mengambil data pasien berdasarkan id
$sql = "SELECT * FROM pasien WHERE id = ?";
// Mempersiapkan statement PDO untuk eksekusi query
$stmt = $dbh->prepare($sql);
$stmt->execute([$_id]);
// Fetch data pasien berdasarkan id
$pasien = $stmt->fetch();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Pasien - Eko Muchamad Haryono</title>

    <!-- Favicon, Apple Touch Icon, Android Chrome 192 & 512, Favicon 16 & 32, Site.Web Manifest  -->
    <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/favicon/android-chrome-512x512.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png" />
    <link rel="manifest" href="assets/img/favicon/site.webmanifest" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Form Pasien</h2>
        <form action="proses_pasien.php" method="POST">
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <input id="kode" name="kode" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <!-- buatkan input value validasi value nya jika ada id isi valuenya jika tidak kosongkan-->
                    <input id="nama" name="nama" type="text" class="form-control" value="<?= @$pasien['nama'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
                <div class="col-8">
                    <select id="gender" name="gender" class="custom-select">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="email" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <input id="alamat" name="alamat" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="kelurahan_id" class="col-4 col-form-label">Kelurahan ID</label>
                <div class="col-8">
                    <input id="kelurahan_id" name="kelurahan_id" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>