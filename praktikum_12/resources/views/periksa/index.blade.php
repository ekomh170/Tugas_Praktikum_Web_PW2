@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Halaman {{ $sub }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Admin</a></li>
                            <li class="breadcrumb-item active">{{ $sub }}</li>
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
                    <h3 class="card-title">{{ $author }}</h3>

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
                    <h1 class="my-4">Daftar {{ $sub }}</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Berat</th>
                                <th>Tinggi</th>
                                <th>Tensi</th>
                                <th>Keterangan</th>
                                <th>Pasien</th>
                                <th>Di Periksa Dokter</th>
                        </thead>
                        <tbody>
                            @foreach ($periksas as $periksa)
                                <tr>
                                    <td>{{ $periksa->id }}</td>
                                    <td>{{ $periksa->tanggal }}</td>
                                    <td>{{ $periksa->berat }}</td>
                                    <td>{{ $periksa->tinggi }}</td>
                                    <td>{{ $periksa->tensi }}</td>
                                    <td>{{ $periksa->keterangan }}</td>
                                    <td>{{ $periksa->pasien->nama }}</td>
                                    <td>{{ $periksa->dokter->nama }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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

@include('layouts.footer')
