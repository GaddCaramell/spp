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
                                    <li class="breadcrumb-item"><a href="{{url('Siswatable')}}">Home</a></li>
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
                                <h4 class="card-title">Table SPP</h4>
                               <!-- Modal Tambah Siswa -->
                               <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-plus-circle"> Tambah Siswa</i>
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
                                            <form action="{{ url('simpanSiswa') }}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="nisn" class="form-label">Nisn</label>
                                                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder="NISN">
                                                    @error('nisn')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nis" class="form-label">NIS</label>
                                                    <input type="text" class="form-control" name="nis" id="nis"
                                                        placeholder="NIS">
                                                        @error('nis')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" name="nama" id="nama"
                                                        placeholder="Nama Lengkap">
                                                        @error('nama')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                                        placeholder="Alamat">
                                                        @error('alamat')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="no_telp" class="form-label">No Telpon</label>
                                                    <input type="text" class="form-control" name="no_telp" id="no_telp"
                                                        placeholder="08XXXXXXXXXX">
                                                        @error('no_telp')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="id_spp" class="form-label">ID Spp</label>
                                                    <input type="text" class="form-control" name="id_spp" id="id_spp"
                                                        placeholder="ID Spp">
                                                        @error('id_spp')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div> 
                                                <div class="mb-3">
                                                    <label for="id_kelas" class="form-label">Kelas</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                      </select>
                                                        @error('id_kelas')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <button class="btn form-control btn-primary mb-2">Tambah</button>
                                                    <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                               <!-- End Modal Tambah Siswa -->
                                <h6 class="card-subtitle"> </h6>
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Nisn</th>
                                                <th class="border-top-0">Nisn</th>
                                                <th class="border-top-0">Nama</th>
                                                <th class="border-top-0">Kelas</th>
                                                <th class="border-top-0">Alamat</th>
                                                <th class="border-top-0">No Telfon</th>
                                                <th class="border-top-0">ID Spp</th>
                                                <th class="border-top-0">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm"><i class="bi bi-trash-fill" style="color: white"></i></a>
                                                </td>
                                            </tr>
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