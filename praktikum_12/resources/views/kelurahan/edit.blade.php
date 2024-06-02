@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Kelurahan</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Kelurahan</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Kelurahan</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $kelurahan->nama }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('layouts.footer')
