<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran IT Club</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <div class="container mt-5">
        <form action="proses_form.php" method="POST">
            <h1 class="text-center mb-5">Form Pendaftaran IT Club</h1>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adn"></i>
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
                </div>
            </div>
        </form>
    </div>



</body>

</html>