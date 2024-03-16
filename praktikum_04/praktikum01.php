<?php
require_once 'header.php';
require_once 'sidebar.php';

// Buat array asosiatif nilai
$nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
$nilai2 = ["id" => 2, "nim" => "01102", "uts" => 90, "uas" => 80, "tugas" => 88];
$nilai3 = ["id" => 3, "nim" => "01103", "uts" => 70, "uas" => 74, "tugas" => 70];
$nilai4 = ["id" => 4, "nim" => "01104", "uts" => 88, "uas" => 95, "tugas" => 80];

// Buat array multidimensi
$kumpulan_nilai = [
    $nilai1, 
    $nilai2, 
    $nilai3, 
    $nilai4
];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 04 - Pages Praktikum 1</h1>
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
               <!-- Default box -->
               <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 1 Website - Eko Muchamad Haryono</h3>
            </div>
            <div class="card-body">
            <div class="container">
            <h1 class="text-center display-4 mb-4">Daftar Nilai Siswa</h1>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">UTS</th>
                            <th scope="col">UAS</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($kumpulan_nilai as $nilai): ?>

                        <tr>
                            <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                            <td><?= $nilai["id"]?></td>
                            <td><?= $nilai["nim"]?></td>
                            <td><?= $nilai["uts"]?></td>
                            <td><?= $nilai["uas"]?></td>
                            <td><?= $nilai["tugas"]?></td>
                            <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            Praktikum 1 Website - Eko Muchamad Haryono
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