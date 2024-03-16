<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 04 - Pages Praktikum 2</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 2 Website - Eko Muchamad Haryono</h3>

              
            </div>
            <div class="card-body">
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
                          <label style="margin-right: 15%;" class="fw-bold">Pilih Produk : </label>
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
                        <button type="reset" class="btn btn-danger btn-block">Reset</button>
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
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            Praktikum 2 Website - Eko Muchamad Haryono
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->

        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>