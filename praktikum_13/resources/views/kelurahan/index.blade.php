@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
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
            </div>
        </section>

        <section class="content">
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
                    <h1 class="my-4">Daftar Kelurahan</h1>
                    <a href="{{ route('kelurahans.create') }}" class="btn btn-success mb-3">Tambah Data</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kecamatan ID</th>
                                <th>List Pasien</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelurahans as $kelurahan)
                                <tr>
                                    <td>{{ $kelurahan->id }}</td>
                                    <td>{{ $kelurahan->nama }}</td>
                                    <td>{{ $kelurahan->kecamatan_id }}</td>
                                    <td>
                                        <ul>
                                            @foreach ($kelurahan->pasien as $pasienperkelurahan)
                                                <li>{{ $pasienperkelurahan->nama }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{ route('kelurahans.show', $kelurahan->id) }}" class="btn btn-info">Read</a>
                                        <a href="{{ route('kelurahans.edit', $kelurahan->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('kelurahans.destroy', $kelurahan->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('layouts.footer')
