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
                                    <li class="breadcrumb-item"><a href="{{url('Petugastable')}}">Home</a></li>
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
                                <h4 class="card-title">Table Petugas</h4>
                                <h6 class="card-subtitle"> </h6>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-person-plus"> Tambah Petugas</i>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-person-lines-fill"></i> Tambah Petugas</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('simpanPetu') }}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="nisn" class="form-label">Nama Petugas</label>
                                                    <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="Nama Petugas">
                                                    @error('nama_petugas')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username" id="username"
                                                        placeholder="Username">
                                                        @error('username')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="text" class="form-control" name="password" id="password"
                                                        placeholder="Password">
                                                        @error('password')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="level" class="form-label">Level</label>
                                                    <select class="form-select" aria-label="Default select example">    
                                                        <option value="1">Admin</option>
                                                        <option value="2">Petugas</option>
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
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">ID Petugas</th>
                                                <th class="border-top-0">Nama Petugas</th>
                                                <th class="border-top-0">Username</th>
                                                <th class="border-top-0">Password</th>
                                                <th class="border-top-0">Level</th>
                                                <th class="border-top-0">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($petu as $pet)
                                            <tr>
                                                <td>{{$pet->id_petugas}}</td>
                                                <td>{{$pet->nama_petugas}}</td>
                                                <td>{{$pet->username}}</td>
                                                <td>{{$pet->password}}</td>
                                                <td>{{$pet->level}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{url('hapusPetu/'.$pet->id_petugas)}}" class="btn btn-danger btn-circle btn-sm"><i class="bi bi-trash-fill" style="color: white"></i></a>
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