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
                        <h1>Edit Periksa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Periksa</li>
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
                    <h3 class="card-title">Edit Periksa</h3>

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
                    <form action="{{ route('periksa.update', $periksa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $periksa->tanggal }}" required>
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat:</label>
                            <input type="text" class="form-control" id="berat" name="berat" value="{{ $periksa->berat }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tinggi">Tinggi:</label>
                            <input type="text" class="form-control" id="tinggi" name="tinggi" value="{{ $periksa->tinggi }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tensi">Tensi:</label>
                            <input type="text" class="form-control" id="tensi" name="tensi" value="{{ $periksa->tensi }}" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $periksa->keterangan }}" required>
                        </div>

                        {{-- Pasien -> Select --}}
                        <div class="form-group nb-3">
                            <label for="pasien_id">Pasien:</label>
                            <select class="form-control" id="pasien_id" name="pasien_id" required>
                                <option value="">-- Pilih Pasien --</option>
                                @foreach ($pasiens as $pasien)
                                    <option value="{{ $pasien->id }}" @if($periksa->pasien_id == $pasien->id) selected @endif>{{ $pasien->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Dokter -> Select --}}
                        <div class="form-group nb-3">
                            <label for="dokter_id">Dokter:</label>
                            <select class="form-control" id="dokter_id" name="dokter_id" required>
                                <option value="">-- Pilih Dokter --</option>
                                @foreach ($dokters as $dokter)
                                    <option value="{{ $dokter->id }}" @if($periksa->dokter_id == $dokter->id) selected @endif>{{ $dokter->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
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
