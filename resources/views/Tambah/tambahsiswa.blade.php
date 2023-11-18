<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width : 400px;">
                    
                    <h4 class="h4">Tambah Siswa</h4>
                    
                    @if (session('notif'))
                    
                    <div class="alert alert-success" role="alert">
                        {{session('notif')}}
                    </div>

                    @endif
                    {{-- Jika Validasi Gagal --}}
                    @if ($errors->any())
                    
                    <div class="alert alert-success" role="alert">
                        Yah Sorry Lo Gagal Bro..
                    </div>

                    @endif

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
                            <label for="alamat" class="form-label">Alamat<label>
                            <input type="text" class="form-control" name="alamat" id="alamat"
                                placeholder="Alamat">
                                @error('alamat')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No Telpon<label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp"
                                placeholder="Alamat">
                                @error('no_telp')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="id_spp" class="form-label">ID SPP<label>
                            <input type="text" class="form-control" name="id_spp" id="id_spp"
                                placeholder="Alamat">
                                @error('id_spp ')
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
</body>

</html>