@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Periksa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Periksa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Periksa</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <p>{{ $periksa->tanggal }}</p>
                    </div>
                    <div class="form-group">
                        <label for="berat">Berat:</label>
                        <p>{{ $periksa->berat }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tinggi">Tinggi:</label>
                        <p>{{ $periksa->tinggi }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tensi">Tensi:</label>
                        <p>{{ $periksa->tensi }}</p>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan:</label>
                        <p>{{ $periksa->keterangan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pasien">Pasien:</label>
                        <p>{{ $periksa->pasien->nama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="dokter">Dokter yang memeriksa:</label>
                        <p>{{ $periksa->dokter->nama }}</p>
                    </div>
                    <a href="{{ route('periksa.index') }}" class="btn btn-primary">Back</a>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.layouts.footer')
