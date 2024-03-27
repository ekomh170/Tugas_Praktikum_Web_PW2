<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien - Eko Muchamad Haryono</title>

    <!-- Favicon & Icons -->
    <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/favicon/android-chrome-512x512.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png" />
    <link rel="manifest" href="assets/img/favicon/site.webmanifest" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Internal CSS -->
    <style>
        /* CSS untuk memberikan jarak antara td dan tr */
        table {
            border-collapse: separate;
            border-spacing: 0 10px; /* Ubah nilai ini untuk menyesuaikan jarak */
            margin: auto; /* membuat tabel ke tengah */
        }

        td,
        th {
            padding: 10px; /* Ubah nilai ini untuk menyesuaikan jarak */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <h2 class="card-header text-center">Data Pasien</h2>
            <div class="card-body">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-4">
                        <a href="form_pasien.php">
                            <button class="btn btn-primary btn-block" name="tambah">Tambah Data</button>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark text-center">
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
                        <tbody class="text-center">
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
                                echo "<td>
                                        <a href='form_pasien.php?id=" . $row['id'] . "'>
                                            <button class='btn btn-warning btn-sm mb-2' name='edit'>Edit</button>
                                        </a>
                                        <a href='hapus_pasien.php?id=" . $row['id'] . "'>
                                            <button class='btn btn-danger btn-sm' name='hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</button>
                                        </a>
                                    </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-5 py-3 bg-light text-center">
        <div class="container">
            <span class="text-muted">Copyright &copy; 2024 Eko Muchamad Haryono</span>
        </div>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
