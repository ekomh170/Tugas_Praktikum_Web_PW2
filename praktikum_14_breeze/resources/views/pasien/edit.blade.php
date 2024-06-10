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
                        <h1>Edit Pasien</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Pasien</li>
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
                    <h3 class="card-title">Edit Pasien</h3>

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
                    <form action="{{ route('pasiens.update', $pasien->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="kode">Kode:</label>
                            <input type="text" name="kode" value="{{ $pasien->kode }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" value="{{ $pasien->nama }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir:</label>
                            <input type="text" name="tmp_lahir" value="{{ $pasien->tmp_lahir }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir:</label>
                            <input type="date" name="tgl_lahir" value="{{ $pasien->tgl_lahir }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" class="form-control">
                                <option value="L" {{ $pasien->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $pasien->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="{{ $pasien->email }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea name="alamat" class="form-control">{{ $pasien->alamat }}</textarea>
                        </div>

                        {{-- Kelurahan  -> Select --}}
                        <div class="form-group
                            <label for="kelurahan_id">Kelurahan:</label>
                            <select name="kelurahan_id" class="form-control">
                                @foreach ($kelurahan as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $pasien->kelurahan_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama }}</option>
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

@include('layouts.footer')
