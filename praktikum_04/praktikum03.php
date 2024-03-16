<?php
require_once 'header.php';
require_once 'sidebar.php';

// Validasi Seluruh Data Pendaftar Berdasarkan NIM
$validasiPendaftar = isset($_POST['nim']) && !empty($_POST['nim']);

// POST nim,  nama, jenis kelamin, program studi, keahlian, domisili, email
@$nim = $_POST['nim'];
@$nama = $_POST['nama'];
@$jenis_kelamin = $_POST['jenis_kelamin'];
@$program_studi = $_POST['program_studi'];

// Array Keahlian HTML CSS JAVASCRIPT PYTHON RWD BOOTSTRAP LAINNYA
$keahlianArray = array(
  array("nama" => "HTML", "poin" => 10),
  array("nama" => "CSS", "poin" => 8),
  array("nama" => "JAVASCRIPT", "poin" => 9),
  array("nama" => "PYTHON", "poin" => 7),
  array("nama" => "RWD", "poin" => 8),
  array("nama" => "BOOTSTRAP", "poin" => 7),
  array("nama" => "LAINNYA", "poin" => 6)
);

// Memastikan bahwa $_POST['keahlian'] merupakan sebuah array
$keahlian = isset($_POST['keahlian']) ? $_POST['keahlian'] : [];

@$domisili = $_POST['domisi'];
@$email = $_POST['email'];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 04 - Pages Praktikum 3</h1>
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
              <h3 class="card-title">Praktikum 3 Website - Eko Muchamad Haryono</h3>
            </div>
            <div class="card-body">
              <div class="container">
                <form action="praktikum03.php" method="POST">
                  <h1 class="text-center mb-5">Form Pendaftaran IT Club</h1>
                  <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-tag"></i>
                          </div>
                        </div>
                        <input id="nim" name="nim" placeholder="Masukan Nomor Induk Mahasiswa" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-address-book"></i>
                          </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Masukan Nama Lengkap" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki-laki" required="required">
                        <label for="jenis_kelamin_0" class="custom-control-label">Laki - Laki</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="program_studi" class="col-4 col-form-label">Program Studi</label>
                    <div class="col-8">
                      <select id="program_studi" name="program_studi" required="required" class="custom-select">
                        <option value="Bisnis Digital">Bisnis Digital</option>
                        <option value="Teknik Informasi">Teknik Informasi</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4">Keahlian</label>
                    <div class="col-8">
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian[]" id="keahlian_0" type="checkbox" class="custom-control-input" value="HTML">
                        <label for="keahlian_0" class="custom-control-label">HTML</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian[]" id="keahlian_1" type="checkbox" class="custom-control-input" value="CSS">
                        <label for="keahlian_1" class="custom-control-label">CSS</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian[]" id="keahlian_2" type="checkbox" class="custom-control-input" value="Javascript">
                        <label for="keahlian_2" class="custom-control-label">Javascript</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian[]" id="keahlian_3" type="checkbox" class="custom-control-input" value="Python">
                        <label for="keahlian_3" class="custom-control-label">Python</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian[]" id="keahlian_4" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                        <label for="keahlian_4" class="custom-control-label">RWD Bootstrap</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="keahlian[]" id="keahlian_5" type="checkbox" class="custom-control-input" value="Lainnya">
                        <label for="keahlian_5" class="custom-control-label">Lainnya</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="domisi" class="col-4 col-form-label">Domisili</label>
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                          </div>
                        </div>
                        <input id="domisi" name="domisi" placeholder="Masukan Alamat Domisili" type="text" required="required" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-envelope"></i>
                          </div>
                        </div>
                        <input id="email" name="email" placeholder="Masukan Email" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="container mt-5">
                <div class="card col-8 mx-auto">
                  <div class="card-body">
                    <?php if ($validasiPendaftar) : ?>
                      <h2 class="card-text text-center mb-3">Terima Kasih Sudah Mendaftar di IT Club Data Science</h2>
                    <?php else : ?>
                      <h2 class="card-text text-center mb-3">Ayo Mendaftar di IT Club Data Science</h2>
                    <?php endif; ?>
                    <hr />
                    <div style="font-size:larger;">
                      <div class="card-text"><strong>Nama Lengkap :</strong> <?= $nama; ?></div>
                      <div class="card-text"><strong>NIM :</strong> <?= $nim; ?></div>
                      <div class="card-text"><strong>Jenis Kelamin :</strong> <?= $jenis_kelamin; ?></div>
                      <div class="card-text"><strong>Program Studi :</strong> <?= $program_studi; ?></div>

                      <div class="card-text"><strong>Keahlian :</strong>
                        <?php $counter = count($keahlian); ?>
                        <?php foreach ($keahlianArray as $index => $keahlianItem) : ?>
                          <?php foreach ($keahlian as $selectedKeahlian) : ?>
                            <?php if ($keahlianItem['nama'] == $selectedKeahlian) : ?>
                              <?= $keahlianItem['nama']; ?>
                              <?php if ($index < $counter - 1) : ?>
                                <?php echo ", "; ?>
                              <?php endif; ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </div>

                      <div class="card-text"><strong>Point Keahlian :</strong>
                        <?php $totalPoin = 0; ?>
                        <?php foreach ($keahlianArray as $keahlianItem) : ?>
                          <?php foreach ($keahlian as $selectedKeahlian) : ?>
                            <?php if ($keahlianItem['nama'] == $selectedKeahlian) : ?>
                              <?php $totalPoin += $keahlianItem['poin']; ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                        <?= $totalPoin; ?>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
              Praktikum 3 Website - Eko Muchamad Haryono
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