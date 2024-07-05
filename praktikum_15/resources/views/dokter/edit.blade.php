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
                        <h1>Edit Dokter</h1> <!-- Mengubah judul menjadi "Edit Dokter" -->
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Dokter</li> <!-- Mengubah breadcrumb menjadi "Edit Dokter" -->
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
                    <h3 class="card-title">Edit Dokter</h3>

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
                    <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dokter->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="L" {{ $dokter->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $dokter->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir:</label>
                            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $dokter->tmp_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir:</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $dokter->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori:</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $dokter->kategori }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telpon">Telpon:</label>
                            <input type="text" class="form-control" id="telpon" name="telpon" value="{{ $dokter->telpon }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dokter->alamat }}" required>
                        </div>

                        {{-- Unit Kerja -> Select --}}
                        <div class="form-group nb-3">
                            <label for="unitkerja_id">Unit Kerja:</label>
                            <select class="form-control" id="unitkerja_id" name="unitkerja_id" required>
                                <option value="">-- Pilih Unit Kerja --</option>
                                @foreach ($unitkerjas as $unitkerja)
                                    <option value="{{ $unitkerja->id }}" {{ $dokter->unitkerja_id == $unitkerja->id ? 'selected' : '' }}>{{ $unitkerja->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
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
