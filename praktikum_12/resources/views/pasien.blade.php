<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form</title>
</head>

<body>
    <div class="container">
        <h1>Medical Checkup Form</h1>
        @csrf
        <form method="GET" action="/pasien">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_periksa" class="col-4 col-form-label">Tanggal Periksa</label>
                <div class="col-8">
                    <input id="tanggal_periksa" name="tanggal_periksa" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <input id="tanggal_lahir" name="tanggal_lahir" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L">
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tekanan_darah" class="col-4 col-form-label">Tekanan Darah</label>
                <div class="col-8">
                    <input id="tekanan_darah" name="tekanan_darah" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="asam" class="col-4 col-form-label">Asam Urat</label>
                <div class="col-8">
                    <input id="asam" name="asam" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="kolesterol" class="col-4 col-form-label">Kolesterol</label>
                <div class="col-8">
                    <input id="kolesterol" name="kolesterol" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="gula" class="col-4 col-form-label">Gula Darah</label>
                <div class="col-8">
                    <input id="gula" name="gula" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
				@php
            if (isset($_GET['submit'])) {
                // tangkep data lalu simpen
                $nama = $_GET['nama'];
                $tanggal_periksa = $_GET['tanggal_periksa'];
                $tanggal_lahir = $_GET['tanggal_lahir'];
                $jk = $_GET['jk'];
                $tekanan_darah = $_GET['tekanan_darah'];
                $asam = $_GET['asam'];
                $kolesterol = $_GET['kolesterol'];
                $gula = $_GET['gula'];
            
                // tampilin data
                echo 'Nama : ' . $nama . '<br>';
                echo 'Tanggal Periksa : ' . $tanggal_periksa . '<br>';
                echo 'Tgl Lahir : ' . $tanggal_lahir . '<br>';
                echo 'Jenis Kelamin : ' . $jk . '<br>';
                echo 'Tekanan Darah : ' . $tekanan_darah . '<br>';
                echo 'Asam : ' . $asam . '<br>';
                echo 'Kolesterol : ' . $kolesterol . '<br>';
                echo 'Gula : ' . $gula . '<br>';
            }
        @endphp
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    -->
</body>

</html>