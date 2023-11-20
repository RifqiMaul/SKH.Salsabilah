@extends('siswa.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lengkapi Data Diri Siswa</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Biodata Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $siswa->nama_lengkap }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $siswa->email }}">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $siswa->tempat_lahir }}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control select2bs4" name="jenis_kelamin" id="jenis_kelamin" style="width: 100%;">
                                    <option value="L" <?= ($siswa->jenis_kelamin == "L") ? "selected" : "" ?>>Laki-laki</option>
                                    <option value="P" <?= ($siswa->jenis_kelamin == "P") ? "selected" : "" ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $siswa->alamat }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="{{ $siswa->nama_ayah }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="{{ $siswa->nama_ibu }}">
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ayah</label>
                                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="{{ $siswa->pekerjaan_ayah }}">
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ibu</label>
                                <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="{{ $siswa->pekerjaan_ibu }}">
                            </div>
                            <div class="form-group">
                                <label>No. HP Ortu</label>
                                <input type="text" class="form-control" name="no_hp_ortu" id="no_hp_ortu" value="{{ $siswa->no_hp_ortu }}">
                            </div>
                            <div class="form-group">
                                <label>Anak Ke</label>
                                <input type="text" class="form-control" name="anak_ke" id="anak_ke" value="{{ $siswa->anak_ke }}">
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control select2bs4" name="agama" id="agama">
                                    <option value="Islam" <?= ($siswa->agama == "Islam") ? "selected" : "" ?>>Islam</option>
                                    <option value="Kristen" <?= ($siswa->agama == "Kristen") ? "selected" : "" ?>>Kristen</option>
                                    <option value="Katolik" <?= ($siswa->agama == "Katolik") ? "selected" : "" ?>>Katolik</option>
                                    <option value="Hindu" <?= ($siswa->agama == "Hindu") ? "selected" : "" ?>>Hindu</option>
                                    <option value="Buddha" <?= ($siswa->agama == "Buddha") ? "selected" : "" ?>>Buddha</option>
                                    <option value="Khonghucu" <?= ($siswa->agama == "Khonghucu") ? "selected" : "" ?>>Khonghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ketunaan</label>
                                <input type="text" class="form-control" name="ketunaan" id="ketunaan" value="{{ $siswa->ketunaan }}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" style="float: right;" onclick="edit()">Simpan</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection