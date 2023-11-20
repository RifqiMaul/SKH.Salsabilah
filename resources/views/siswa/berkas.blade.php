@extends('siswa.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lengkapi Berkas Siswa</h1>
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
                            <h3 class="card-title">Berkas Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="berkasUpload" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>KTP Ortu</label>
                                    <input type="file" class="form-control" name="berkas_ktp_ortu" id="berkas_ktp_ortu">
                                </div>
                                <div class="form-group">
                                    <label>KK</label>
                                    <input type="file" class="form-control" name="berkas_kk" id="berkas_kk">
                                </div>
                                <div class="form-group">
                                    <label>Akta Kelahiran</label>
                                    <input type="file" class="form-control" name="berkas_akta_lahir" id="berkas_akta_lahir">
                                </div>
                                <div class="form-group">
                                    <label>Hasil Tes Ketunaan</label>
                                    <input type="file" class="form-control" name="berkas_hasil_tes_ketunaan" id="berkas_hasil_tes_ketunaan">
                                </div>
                                <div class="form-group">
                                    <label>Pas Foto</label>
                                    <input type="file" class="form-control" name="berkas_pas_foto" id="berkas_pas_foto">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" style="float: right;">Simpan</button>
                                </div>
                            </form>
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