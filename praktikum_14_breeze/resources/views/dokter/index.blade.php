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
                        <a href="{{ route('dokter.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="my-4">Daftar {{ $sub }}</h1>
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
                                <th>Unit Kerja</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokters as $dokter)
                                <tr>
                                    <td>{{ $dokter->id }}</td>
                                    <td>{{ $dokter->nama }}</td>
                                    <td>{{ $dokter->gender }}</td>
                                    <td>{{ $dokter->tmp_lahir }}</td>
                                    <td>{{ $dokter->tgl_lahir }}</td>
                                    <td>{{ $dokter->kategori }}</td>
                                    <td>{{ $dokter->telpon }}</td>
                                    <td>{{ $dokter->alamat }}</td>
                                    <td>{{ $dokter->unitkerja->nama }}</td>
                                    <td>
                                        <a href="{{ route('dokter.show', $dokter->id) }}" class="btn btn-info btn-sm">Read</a> 
                                        <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
