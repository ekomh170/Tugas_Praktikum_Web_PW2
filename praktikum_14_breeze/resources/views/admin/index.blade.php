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
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                    <h3 class="card-title">Profile</h3>

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
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/profile/profile.png') }}" class="rounded img-fluid"
                                    alt="Profile Picture">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3 class="my-3">Eko Muchamad Haryono</h3>
                            <p class="text-muted">Mahasiswa STT NF - Teknik Informatika</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Email : </strong> ekomh13@gmail.com</li>
                                <li class="list-group-item"><strong>Phone : </strong> 082246105463</li>
                                <li class="list-group-item"><strong>Address : </strong> Jalan Puspanegara</li>
                                <li class="list-group-item"><strong>Birth Date : </strong> Maret 29, 2003</li>
                            </ul>
                            <h4 class="my-3">Biography</h4>
                            <p>Saat ini, saya seorang mahasiswa di Sekolah Tinggi Teknologi Nurul Fikri, yang sedang
                                menekuni bidang studi Teknik Informatika. Sebagai lulusan SMKS 1 TRIPLE J 2020/2021
                                dengan jurusan Rekayasa Perangkat Lunak, saya memiliki pengalaman yang kuat dalam
                                pengembangan web menggunakan HTML, CSS, JS, PHP, MySQL, Codeigniter, Laravel, Bootstrap,
                                dan kolaborasi dalam pembuatan aplikasi dengan menggunakan Git serta penyimpanannya di
                                GitHub dan GitLab. Selain itu, saya juga pernah mengikuti program Jabar Coding Camp
                                (JCC) Kelas yang saya ambil adalah Laravel - Backend.
                            </p>
                        </div>
                    </div>
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
