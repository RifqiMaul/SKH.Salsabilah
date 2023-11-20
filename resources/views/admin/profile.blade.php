@extends('admin.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profil Sekolah</h1>
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
                            <h3 class="card-title">Data Sekolah</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" value="{{ $profile->nama_sekolah }}">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ $profile->deskripsi }}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $profile->alamat }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{ $profile->email }}">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="telepon" id="telepon" value="{{ $profile->telepon }}">
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