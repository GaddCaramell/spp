@extends('layout')
@section('Navbar')
    <!-- End Sidebar scroll-->
    <div class="sidebar-footer">
        <div class="row">
            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Spotify"><i
                        class="bi bi-spotify"></i></a>
            </div>
            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Login"><i
                        class="bi bi-door-open"></i></a>
            </div>
            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                        class="bi bi-person-fill-x"></i></a>
            </div>
        </div>
    </div>
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Dashboard</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('DashAdmin') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            {{-- Table Siswa --}}
            <div class="card-body card shadow">
                <div class="container-siswa">
                    <h4><i class="bi bi-person-fill"></i>Data Siswa</h4>
                    <h6 class="card-subtitle"> </h6>
                    <div class="table-responsive">
                        <table class="table user-table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Nisn</th>
                                    <th class="border-top-0">Nis</th>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Kelas</th>
                                    <th class="border-top-0">Alamat</th>
                                    <th class="border-top-0">No Telfon</th>
                                    <th class="border-top-0">ID Spp</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $sis)
                                    <tr>
                                        <td>{{ $sis->nisn }}</td>
                                        <td>{{ $sis->nis }}</td>
                                        <td>{{ $sis->nama }}</td>
                                        <td>{{ $sis->id_kelas }}</td>
                                        <td>{{ $sis->alamat }}</td>
                                        <td>{{ $sis->no_telp }}</td>
                                        <td>{{ $sis->id_spp }}</td>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
          
            {{-- Table Petugas --}}
            <div class="card-body card shadow">
                <div class="container-petugas">
                    <h4><i class="bi bi-person-lines-fill"></i>Data Petugas</h4>
                    <div class="table-responsive">
                        <table class="table user-table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID Petugas</th>
                                    <th class="border-top-0">Nama Petugas</th>
                                    <th class="border-top-0">Username</th>
                                    <th class="border-top-0">Password</th>
                                    <th class="border-top-0">Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($petu as $pet)
                                    <tr>
                                        <td>{{ $pet->id_petugas }}</td>
                                        <td>{{ $pet->nama_petugas }}</td>
                                        <td>{{ $pet->username }}</td>
                                        <td>{{ $pet->password }}</td>
                                        <td>{{ $pet->level }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
    
            {{-- Table Kelas --}}
            <div class="card-body card shadow">
                <div class="container-kelas">
                    <h4><i class="bi bi-door-open-fill"></i>Data Kelas</h4>
                    <h6 class="card-subtitle"> </h6>
                    <div class="table-responsive">
                        <table class="table user-table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID Kelas</th>
                                    <th class="border-top-0">Nama Kelas</th>
                                    <th class="border-top-0">Kompetensi Keahlian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kls as $kelas)
                                    <tr>
                                        <td>{{ $kelas->id_kelas }}</td>
                                        <td>{{ $kelas->nama_kelas }}</td>
                                        <td>{{ $kelas->kompetensi_keahlian }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Table SPP --}}
            <div class="card-body card shadow">
            <div class="container-spp">
                <h4><i class="bi bi-book-half"></i>Data Spp</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive">
                    <table class="table user-table">
                        <thead>
                            <tr>
                                <th class="border-top-0">ID Spp</th>
                                <th class="border-top-0">Tahun</th>
                                <th class="border-top-0">Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spp as $sp)
                                <tr>
                                    <td>{{ $sp->id_spp }}</td>
                                    <td>{{ $sp->tahun }}</td>
                                    <td>{{ $sp->nominal }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            {{-- Table Pembayaran --}}
            <div class="card-body card shadow">
                <div class="container-pembayaran pt-4">
                    <h4><i class="bi bi-currency-exchange"></i> Data Pembayaran</h4>
                    <h6 class="card-subtitle"> </h6>
                    <div class="table-responsive">
                        <table class="table user-table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID Pembayaran</th>
                                    <th class="border-top-0">ID Petugas</th>
                                    <th class="border-top-0">Nisn</th>
                                    <th class="border-top-0">Tanggal Bayar</th>
                                    <th class="border-top-0">Bulan Bayar</th>
                                    <th class="border-top-0">Tahun Bayar</th>
                                    <th class="border-top-0">ID Spp</th>
                                    <th class="border-top-0">Jumlah Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pemb as $pemb)
                                    <tr>
                                        <td>{{ $pemb->id_pembayaran }}</td>
                                        <td>{{ $pemb->id_petugas }}</td>
                                        <td>{{ $pemb->nisn }}</td>
                                        <td>{{ $pemb->tgl_bayar }}</td>
                                        <td>{{ $pemb->bulan_bayar }}</td>
                                        <td>{{ $pemb->tahun_bayar }}</td>
                                        <td>{{ $pemb->id_spp }}</td>
                                        <td>{{ $pemb->jumlah_bayar }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            
        </div>
        <!-- End Table Data  -->

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2023 Aplikasi SPP by <a href="https://www.instagram.com/jagadrasa_/">@jagadrasa_</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>
@endsection
