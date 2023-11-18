@extends('layout')
@section('Navbar')
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
                        <h3 class="page-title mb-0 p-0">Table</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('Kelastable')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Table</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Kelas</h4>
                                <!-- Modal Tambah Kelas -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-plus-circle"> Tambah Kelas</i>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('simpanKelas') }}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="nama_kelas" class="form-label">Kelas</label>
                                                    <input type="text" class="form-control" name="nama_kelas" id="nama_kelas"
                                                        placeholder="Kelas">
                                                        @error('nama_kelas')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kompetensi_keahlian" class="form-label">Nama Jurusan</label>
                                                    <input type="text" class="form-control" name="kompetensi_keahlian" id="kompetensi_keahlian"
                                                        placeholder="Nama Jurusan">
                                                        @error('kompetensi_keahlian')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <button class="btn form-control btn-primary mb-2">Tambah</button>
                                                    <button class="btn form-control btn-outline-success mb-2" type="button" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- End Modal Tambah Kelas -->
                                <h6 class="card-subtitle"> </h6>
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">ID Kelas</th>
                                                <th class="border-top-0">Nama Kelas</th>
                                                <th class="border-top-0">Kompetensi Keahlian</th>
                                                <th class="border-top-0">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kls as $kelas)
                                            <tr>
                                                <td>{{$kelas->id_kelas}}</td>
                                                <td>{{$kelas->nama_kelas}}</td>
                                                <td>{{$kelas->kompetensi_keahlian}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{url('hapusKelas/'.$kelas->id_kelas)}}" class="btn btn-danger btn-circle btn-sm"><i class="bi bi-trash-fill" style="color: white"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
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
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>

    @endsection