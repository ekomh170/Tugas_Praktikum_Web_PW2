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
                    <h1 class="my-4">Daftar Pasien Untuk <b> {{ $sub }} {{ $kelurahan->nama }}</b></h1>
                    <a href="{{ route('pasiens.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>
                    {{-- Tombol Back --}}
                    <a href="{{ route('kelurahans.index') }}" class="btn btn-warning mb-3">Halaman Utama Kelurahan</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelurahan->pasien as $pasienKelurahan)
                                <tr>
                                    <td>{{ $pasienKelurahan->id }}</td>
                                    <td>{{ $pasienKelurahan->kode }}</td>
                                    <td>{{ $pasienKelurahan->nama }}</td>
                                    <td>{{ $pasienKelurahan->tmp_lahir }}</td>
                                    <td>{{ $pasienKelurahan->tgl_lahir }}</td>
                                    <td>{{ $pasienKelurahan->gender }}</td>
                                    <td>{{ $pasienKelurahan->email }}</td>
                                    <td>{{ $pasienKelurahan->alamat }}</td>
                                    <td>
                                        <a href="{{ route('pasiens.show', $pasienKelurahan->id) }}"
                                            class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('pasiens.edit', $pasienKelurahan->id) }}"
                                            class="btn btn-warning btn-sm">Update</a>
                                        <form action="{{ route('pasiens.destroy', $pasienKelurahan->id) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this pasien?')">Delete</button>
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

@include('layouts.footer')
