<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Data Pasien</h2>
        <a href="form_pasien.php"><button class="btn btn-primary mb-1" name="tambah">Tambah Data</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Kelurahan ID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'dbkoneksi.php';

                // Query untuk mendapatkan data pasien
                $query = $dbh->query('SELECT * FROM pasien');

                // Loop menggunakan foreach untuk menampilkan data pasien
                foreach ($query as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['kode'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['tmp_lahir'] . "</td>";
                    echo "<td>" . $row['tgl_lahir'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['kelurahan_id'] . "</td>";

                    // Tambahkan button name edit & button name hapus tambah kan validasi apakah data ingin di hapus

                    echo "<td><a href='form_pasien.php?id=" . $row['id'] . "'><button class='btn btn-warning' name='edit'>Edit</button></a> <a href='hapus_pasien.php?id=" . $row['id'] . "'><button class='btn btn-danger' name='hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</button></a></td>";

                    
                }
                ?>
            </tbody>
        </table>

    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>