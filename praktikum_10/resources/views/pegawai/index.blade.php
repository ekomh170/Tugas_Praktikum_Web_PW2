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
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
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
                    <h3 class="card-title">Data Tables</h3>

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
                    <h1 class="my-4">Daftar Pegawai</h1>
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
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Buatkan Data Pegawai Manual Pake HTML --}}
                            <tr>
                                <td>1</td>
                                <td>PGW001</td>
                                <td>John Doe</td>
                                <td>Bandung</td>
                                <td>1990-01-01</td>
                                <td>Laki-laki</td>
                                <td>
                                    <a href="mailto:"></a>
                                </td>
                                <td>Jalan Puspanegara</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PGW002</td>
                                <td>Jane Doe</td>
                                <td>Bandung</td>
                                <td>1995-01-01</td>
                                <td>Perempuan</td>
                                <td>
                                    <a href="mailto:"></a>
                                </td>
                                <td>Jalan Puspanegara</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PGW003</td>
                                <td>John Smith</td>
                                <td>Bandung</td>
                                <td>2000-01-01</td>
                                <td>Laki-laki</td>
                                <td>
                                    <a href="mailto:"></a>
                                </td>
                                <td>Jalan Puspanegara</td>
                            </tr>

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
