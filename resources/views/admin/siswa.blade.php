@extends('admin.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <!-- <button class="btn btn-primary" style="float: right;" id="openAddModal">Tambah Siswa</button> -->
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
                            <h3 class="card-title">List Data Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Foto</th>
                                        <th>Data Diri</th>
                                        <th>Data Kontak</th>
                                        <th>Data Keluarga</th>
                                        <th>Data Berkas</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($siswa as $value)
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><img src="<?= url('/'); ?>/foto/berkas/pas_foto/{{ $value->berkas_pas_foto }}"></td>
                                        <td>
                                            Nama Lengkap : {{ $value->nama_lengkap }} <br />
                                            TTL : {{ $value->tempat_lahir }}, {{ $value->tanggal_lahir }} <br />
                                            Jenis Kelamin : {{ $value->jenis_kelamin }} <br />
                                            Anak Ke : {{ $value->anak_ke }} <br />
                                            Agama : {{ $value->agama }} <br />
                                            Ketunaan : {{ $value->ketunaan }} <br />
                                        </td>
                                        <td>
                                            Email : {{ $value->email }} <br />
                                            Alamat : {{ $value->alamat }} <br />
                                            No. HP Ortu : {{ $value->no_hp_ortu }} <br />
                                        </td>
                                        <td>
                                            Nama Ayah : {{ $value->nama_ayah }} <br />
                                            Nama Ibu : {{ $value->nama_ibu }} <br />
                                            Pekerjaan Ayah : {{ $value->pekerjaan_ayah }} <br />
                                            Pekerjaan Ibu : {{ $value->pekerjaan_ibu }} <br />
                                        </td>
                                        <td>
                                            Berkas KTP Ortu : <a target="_blank" href="<?= url('/') ?>/foto/berkas/ktp_ortu/{{ $value->berkas_ktp_ortu }}" class="btn btn-primary">Klik!</a><br />
                                            Berkas KK : <a target="_blank" href="<?= url('/') ?>/foto/berkas/kk/{{ $value->berkas_kk }}" class="btn btn-primary">Klik!</a><br />
                                            Berkas Akta Lahir : <a target="_blank" href="<?= url('/') ?>/foto/berkas/akta_lahir/{{ $value->berkas_akta_lahir }}" class="btn btn-primary">Klik!</a><br />
                                            Hasil Tes Ketunaan : <a target="_blank" href="<?= url('/') ?>/foto/berkas/ketunaan/{{ $value->berkas_hasil_tes_ketunaan }}" class="btn btn-primary">Klik!</a><br />
                                        </td>
                                        <td>
                                            <button class="btn btn-danger" onclick="hapus(<?= $value->id_barang ?>)"><i class="fa fa-close"></i>Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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