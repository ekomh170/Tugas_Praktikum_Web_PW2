<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/img/profile/profile.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Praktikum 15</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/profile/profile.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ strtoupper(Auth::user()->name) }}</a>
                <span> {{ strtoupper(Auth::user()->role) }} </span>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-header">Kumpulan Data Praktikum 9 - 13</li>
                <li class="nav-item @if (Request::is('admin*')) menu-open @endif">
                    <a href="#" class="nav-link @if (Request::is('admin*')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Data Tugas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin') }}"
                                class="nav-link @if (Request::is('admin')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/pegawai') }}"
                                class="nav-link @if (Request::is('admin/pegawai*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/pasien') }}"
                                class="nav-link @if (Request::is('admin/pasien*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/periksa') }}"
                                class="nav-link @if (Request::is('admin/periksa*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Periksa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/dokter') }}"
                                class="nav-link @if (Request::is('admin/dokter*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/unit_kerja') }}"
                                class="nav-link @if (Request::is('admin/unit_kerja*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Unit Kerja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/kelurahan') }}"
                                class="nav-link @if (Request::is('admin/kelurahan*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kelurahan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @if (Request::is(['kabar*', 'nilai*', 'pasien*'])) menu-open @endif">
                    <a href="#" class="nav-link @if (Request::is(['kabar*', 'nilai*', 'pasien*'])) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Data Sebelumnya
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('kabar') }}"
                                class="nav-link @if (Request::is('kabar*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kabar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('nilai') }}"
                                class="nav-link @if (Request::is('nilai*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nilai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pasien') }}"
                                class="nav-link @if (Request::is('pasien*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Pasien</p>
                            </a>
                        </li>
                    </ul>

                    {{-- Logout Breeze --}}
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            {{ __('Log Out') }}
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
