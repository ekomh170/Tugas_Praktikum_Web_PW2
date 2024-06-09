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
                    <h1 class="my-4">Daftar Dokter Untuk <b> {{ $sub }} {{ $unitkerja->nama }}</b></h1>
                    <a href="{{ route('pasiens.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Kategori</th>
                                <th>Telpon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unitkerja->dokter as $dokterUnitkerja)
                                <tr>
                                    <td>{{ $dokterUnitkerja->id }}</td>
                                    <td>{{ $dokterUnitkerja->nama }}</td>
                                    <td>{{ $dokterUnitkerja->gender }}</td>
                                    <td>{{ $dokterUnitkerja->tmp_lahir }}</td>
                                    <td>{{ $dokterUnitkerja->tgl_lahir }}</td>
                                    <td>{{ $dokterUnitkerja->kategori }}</td>
                                    <td>{{ $dokterUnitkerja->telpon }}</td>
                                    <td>{{ $dokterUnitkerja->alamat }}</td>
                                    <td>
                                        <a href="{{ route('pasiens.show', $dokterUnitkerja->id) }}"
                                            class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('pasiens.edit', $dokterUnitkerja->id) }}"
                                            class="btn btn-warning btn-sm">Update</a>
                                        <form action="{{ route('pasiens.destroy', $dokterUnitkerja->id) }}"
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
