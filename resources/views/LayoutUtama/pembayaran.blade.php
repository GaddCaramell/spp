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
                                <h4 class="card-title"><i class="bi bi-currency-exchange"></i> Pembayaran</h4>
                               <!-- Modal Tambah Siswa -->
                               <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-database-fill-add"> Bayar</i>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-currency-exchange"></i> Pembayaran</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('simpanBayar') }}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="id_petugas" class="form-label">ID Petugas</label>
                                                    <select class="form-select" name="id_petugas" id="id_petugas">
                                                     @foreach ($p as $p)
                                                     <option value="{{$p->id_petugas}}">{{$p->nama_petugas}}</option>
                                                     @endforeach
                                                   </select>
                                                        @error('id_petugas')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nisn" class="form-label">Nisn</label>
                                                    <select class="form-select" name="nisn" id="nisn">
                                                     @foreach ($sw as $siswa)
                                                     <option value="{{$siswa->nisn}}">{{$siswa->nisn}}</option>
                                                     @endforeach
                                                   </select>
                                                        @error('id_petugas')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tanggal_bayar" class="form-label">Tanggal Bayar</label>
                                                    <input type="date" class="form-control" name="tgl_bayar" id="tgl_bayar"
                                                        placeholder="hh/bb/tt">
                                                        @error('nama')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bulan_bayar" class="form-label">Bulan Bayar</label>
                                                    <select class="form-select" name="bulan_bayar" id="bulan_bayar">
                                                        <option value="Januari">Januari</option>
                                                        <option value="Februari">Februari</option>
                                                        <option value="Maret">Maret</option>
                                                        <option value="April">April</option>
                                                        <option value="Mei">Mei</option>
                                                        <option value="Juni">Juni</option>
                                                        <option value="Juli">Juli</option>
                                                        <option value="Agustus">Agustus</option>
                                                        <option value="September">September</option>
                                                        <option value="Oktober">Oktober</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                      </select>
                                                        @error('bulan_bayar')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tahun_bayar" class="form-label">Tahun Bayar</label>
                                                    <select class="form-select" name="tahun_bayar" id="tahun_bayar">
                                                        <option>2020</option>
                                                        <option>2021</option>
                                                        <option>2022</option>
                                                        <option>2023</option>
                                                        <option>2024</option>
                                                    </select>
                                                        @error('tahun_bayar')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror  
                                                </div>
                                                <div class="mb-3">
                                                    <label for="id_spp" class="form-label">ID Spp</label>
                                                    <select class="form-select" name="id_spp" id="id_spp">
                                                     @foreach ($spp as $sp)
                                                     <option value="{{$sp->id_spp}}">{{$sp->tahun}}-{{$sp->nominal}}</option>
                                                     @endforeach
                                                    </select>
                                                        @error('id_spp')
                                                        <div class="form-text">
                                                            {{$message}}
                                                        </div>
                                                    @enderror    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                                                    <input type="text" class="form-control" name="jumlah_bayar" id="jumlah_bayar"
                                                        placeholder="Jumlah Bayar">
                                                        @error('jumlah_bayar')
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
                                            @foreach ($pb as $pemb)
                                            <tr>
                                                <td>{{$pemb->id_pembayaran}}</td>
                                                <td>{{$pemb->id_petugas}}</td>
                                                <td>{{$pemb->nisn}}</td>
                                                <td>{{$pemb->tgl_bayar}}</td>
                                                <td>{{$pemb->bulan_bayar}}</td>
                                                <td>{{$pemb->tahun_bayar}}</td>
                                                <td>{{$pemb->id_spp}}</td>
                                                <td>{{$pemb->jumlah_bayar}}</td>
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