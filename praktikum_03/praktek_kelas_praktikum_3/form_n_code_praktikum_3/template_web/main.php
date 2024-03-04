<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $hobi = $_POST['hobi'];
    $ipk = $_POST['ipk'];

    function status($ipk)
    {
        if ($ipk >= 3 && $ipk <= 4) {
            return "Lolos";
        } else {
            return "Ga Lolos";
        }
    }
    $status = status($ipk);
}

require_once 'header.php';
?>

<div class="container">
    <h1>Form Pendaftaran</h1>
    <form method="POST" action="main.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                    <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Hobi</label>
            <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi_0" type="checkbox" class="custom-control-input" value="Main Game">
                    <label for="hobi_0" class="custom-control-label">Main Game</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi_1" type="checkbox" class="custom-control-input" value="Membaca">
                    <label for="hobi_1" class="custom-control-label">Membaca</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi_2" type="checkbox" class="custom-control-input" value="Nonton">
                    <label for="hobi_2" class="custom-control-label">Nonton</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi_3" type="checkbox" class="custom-control-input" value="Menulis">
                    <label for="hobi_3" class="custom-control-label">Menulis</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi_4" type="checkbox" class="custom-control-input" value="Memasak">
                    <label for="hobi_4" class="custom-control-label">Memasak</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">IPK</label>
            <div class="col-8">
                <input id="ipk" name="ipk" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <hr>
    <?php  // tampilkan data yang diterima
    echo "<h2>Informasi yang Anda Kirim:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Jenis Kelamin: " . $jk . "<br>";
    echo "Hobi: ";
    foreach ($hobi as $h) {
        echo $h . ", ";
    }
    echo "<br> Status: " . $status . "<br>";
    ?>

</div>

<?php
require_once 'footer.php';
?>