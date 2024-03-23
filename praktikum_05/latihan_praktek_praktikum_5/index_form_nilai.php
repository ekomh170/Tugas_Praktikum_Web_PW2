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
                <label for="jurusan" class="col-md-2 col-form-label text-end fw-bold">Pilih MK</label>
                <div class="col-md-4">
                    <select class="form-control" name="jurusan" id="jurusan">
                        <option value="Teknik Informatika">Data Warehouse</option>
                        <option value="Teknik Mesin">Pemograman Web 2</option>
                        <option value="Teknik Elektro">Backend Web Developer</option>
                        <option value="Teknik Sipil">Frontend Web Developer</option>
                        <option value="Teknik Kimia">Dev Ops</option>
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
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <hr />
    <div class="h4">Hasil Nilai Ujian</div>

    <hr />
    <div>
        <div class="h5">Lab Pemrograman Web Lanjutan</div>
        <div>Dosen :</div>
        <div>Kampus :</div>
    </div>
</div>

<?php
require_once 'footer_form_nilai.php';
?>