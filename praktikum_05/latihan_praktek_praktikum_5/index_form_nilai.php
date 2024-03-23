<?php
require_once 'header_form_nilai.php';
require_once 'navbar_form_nilai.php';
?>

<div class="container-fluid mt-3">
    <div class="h4">Form Nilai Ujian</div>
    <hr />
    <div class="container">
        <form action="" method="post">
            <div class="form-group row justify-content-center mb-3 mr-5 text-end"> <!-- Menggunakan justify-content-center untuk membuat form di tengah -->
                <label for="nim" class="col-md-2 col-form-label fw-bold">NIM</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Mahasiswa">
                </div>
            </div>
            <div class="form-group row justify-content-center mb-3 mr-5"> <!-- Menggunakan justify-content-center untuk membuat form di tengah -->
                <label for="matkul" class="col-md-2 col-form-label text-end fw-bold">Pilih MK</label>
                <div class="col-md-4">
                    <select class="form-control" name="matkul" id="matkul">
                        <option value="Data Warehouse">Data Warehouse</option>
                        <option value="Pemograman Web 2">Pemograman Web 2</option>
                        <option value="Backend Web Developer">Backend Web Developer</option>
                        <option value="Frontend Web Developer">Frontend Web Developer</option>
                        <option value="Dev Ops">Dev Ops</option>
                    </select>
                </div>
            </div>
            <div class="form-group row justify-content-center mb-3 mr-5 text-end"> <!-- Menggunakan justify-content-center untuk membuat form di tengah -->
                <label for="nilai_tugas" class="col-md-2 col-form-label fw-bold">Nilai</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas">
                </div>
            </div>
            <div class="form-group row justify-content-center"> <!-- Menggunakan justify-content-center untuk membuat form di tengah -->
                <div class="col-md-4 offset-md-2">
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <hr />
    <div class="h5">Hasil Nilai Ujian</div>

    <?php
    if (isset($_POST["submit"])) {
        require_once "class_nilai.php";

        // Set nilai properti pada objek dari nilai yang diisi pada form
        $nim = $_POST["nim"];
        $matkul = $_POST["matkul"];
        $nilai_tugas = $_POST["nilai_tugas"];

        // Buat objek baru dari class nilai
        $nilai = new nilai($nim, $matkul, $nilai_tugas);

        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<div class='col-md-2 fw-bold'>NIM :</div>";
        echo "<div class='col-md-4'>" . $nilai->nim . "</div>";
        echo "</div>";
        echo "<div class='row'>";

        echo "<div class='col-md-2 fw-bold'>Mata Kuliah :</div>";
        echo "<div class='col-md-4'>" . $nilai->matkul . "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-md-2 fw-bold'>Nilai :</div>";
        echo "<div class='col-md-4'>" . $nilai->nilai . "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-md-2 fw-bold'>Hasil Ujian :</div>";
        echo "<div class='col-md-4'>" . $nilai->hasilUjian() . "</div>";
        echo "</div>";
        echo "<div class='row'>";

        echo "<div class='col-md-2 fw-bold'>Status Lulus :</div>";
        echo "<div class='col-md-4'>" . $nilai->statusLulus() . "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-md-2 fw-bold'>Grade :</div>";
        echo "<div class='col-md-4'>" . $nilai->predikatMhs() . "</div>";
        echo "</div>";
        echo "</div>";
    }

    ?>

    <hr />
    <div class="mb-5">
        <div class="h5">Lab Pemrograman Web Lanjutan</div>
        <div>Dosen : Sirojul Munir S.Si,M. Kom</div>
        <div>Kampus : STT-NF - Kampus B</div>
    </div>
</div>

<?php
require_once 'footer_form_nilai.php';
?>