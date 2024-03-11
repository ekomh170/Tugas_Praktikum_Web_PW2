<!-- Tugas Punya : Eko Muchamad Haryono -->
<!-- TI - 02 -->
<!-- Teknik Informatika -->
<!-- Pemograman Web 2 (PW2) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online - Tugas Pertemuan 2</title>
    
    <!-- favicon lengkap -->
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <!-- favicon lengkap -->  
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 20px;
        }

        .container {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .harga-table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        .harga-table th,
        .harga-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .harga-table th {
            background-color: #f2f2f2;
        }

        .kombinasi-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h3 {
            color: #007bff;
        }

        hr {
            border-top: 2px solid #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .detail-pembelian {
            margin-top: 20px;
        }

        .detail-pembelian .card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
        }

        .detail-pembelian p {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Form Belanja -->
            <div class="col-md-6">
                <div class="card kombinasi-container">
                    <h3 class="card-title text-center">Form Belanja Online</h3>
                    <hr />
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form-group row">
                            <label for="customer" class="col-md-4 col-form-labe fw-bold">Customer :</label>
                            <div class="col-md-8">
                                <input type="text" name="customer" id="customer" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="margin-right: 20%;" class="fw-bold">Pilih Produk : </label>
                            <input type="radio" id="tv" name="produk" value="TV" required>
                            <label for="tv">TV</label>
                            <input type="radio" id="kulkas" name="produk" value="Kulkas" required>
                            <label for="kulkas">Kulkas</label>
                            <input type="radio" id="mesin-cuci" name="produk" value="Mesin Cuci" required>
                            <label for="mesin-cuci">Mesin Cuci</label>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label fw-bold">Jumlah :</label>
                            <div class="col-md-8">
                                <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                    </form>
                </div>
            </div>
            <!-- Daftar Harga -->
            <div class="col-md-6">
                <div class="card kombinasi-container">
                    <table class="harga-table">
                        <thead>
                            <tr>
                                <th class="text-center bg-primary" colspan="2">Daftar Harga Produk</th>
                            </tr>
                            <tr>
                                <th class="text-center">Produk</th>
                                <th class="text-center">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">TV</td>
                                <td class="text-center">Rp. 2.000.000</td>
                            </tr>
                            <tr>
                                <td class="text-center">Kulkas</td>
                                <td class="text-center">Rp. 3.500.000</td>
                            </tr>
                            <tr>
                                <td class="text-center">Mesin Cuci</td>
                                <td class="text-center">Rp. 2.800.000</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center text-danger bg-primary">Harga dapat berubah
                                    sewaktu-waktu</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Detail Pembelian -->
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customer = $_POST["customer"];
        $produk = $_POST["produk"];
        $jumlah = $_POST["jumlah"];
    
        echo '
        <div id="detailPembelianPrint">
            <div class="row detail-pembelian">
                <div class="col-md-12">
                    <div class="card kombinasi-container">
                        <h3 class="card-title text-center">Detail Pembelian</h3>
                        <hr />
                        <div>
                            <p><strong>Nama Customer :</strong>' . $customer . '</p>
                            <p><strong>Produk Pilihan : </strong>' . $produk . '</p>
                            <p><strong>Jumlah Beli : </strong>' . $jumlah . '</p>
                            <p><strong>Total Belanja : </strong> Rp. ';
    
        // Hitung total belanja
        $total_belanja = 0;
        if ($produk == "TV") {
            $harga_produk = 2000000;
            $total_belanja = $harga_produk * $jumlah;
        } elseif ($produk == "Kulkas") {
            $harga_produk = 3500000;
            $total_belanja = $harga_produk * $jumlah;
        } elseif ($produk == "Mesin Cuci") {
            $harga_produk = 2800000;
            $total_belanja = $harga_produk * $jumlah;
        }
    
        // Format total belanja menjadi format mata uang Rupiah
        $total_belanja_rp = number_format($total_belanja, 0, ',', '.');
    
        echo $total_belanja_rp . '</p>
                          <p><strong>Harga Satuan Barang : </strong>' . number_format($harga_produk, 0, ',', '.') . '</p>
                        </div>
                        <button id="cetakBtn" class="btn btn-primary btn-block mt-3">Cetak Detail Pembelian</button>
    
                    </div>
                </div>
            </div>
        </div>';
    }
    
        ?>
    </div>
    <script>
    document.getElementById('cetakBtn').addEventListener('click', function() {
        var detailPembelianPrint = document.getElementById('detailPembelianPrint');
        var originalContents = document.body.innerHTML;
        var printContents = detailPembelianPrint.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    });
</script>


    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
