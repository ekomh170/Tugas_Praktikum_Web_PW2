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
                        <a href="{{ route('periksa.create') }}" class="btn btn-primary">Tambah Periksa</a>
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
                                <th>Dokter</th>
                                <th>Aksi</th>
                            </tr>
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
                                    <td>
                                        <a href="{{ route('periksa.show', $periksa->id) }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('periksa.edit', $periksa->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('periksa.destroy', $periksa->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                                        </form>
                                    </td>
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


@include('admin.layouts.footer')
