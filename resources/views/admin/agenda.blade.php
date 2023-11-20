@extends('admin.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Agenda Sekolah</h1>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary" style="float: right;" id="openAddModal">Tambah Agenda Sekolah</button>
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
                            <h3 class="card-title">List Agenda Sekolah</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Tanggal</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($agenda as $value)
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td>{{ $value->judul }}</td>
                                        <td>{{ $value->isi }}</td>
                                        <td><?= date_format(date_create($value->tanggal), 'd F Y') ?></td>
                                        <td>
                                            <button class="btn btn-primary" onclick="getData(<?= $value->id_agenda ?>)"><i class="fa fa-close"></i>Edit</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger" onclick="hapus(<?= $value->id_agenda ?>)"><i class="fa fa-close"></i>Delete</button>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
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

<!-- Add Form -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Agenda Sekolah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="isi" id="isi">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="tambah()">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Edit Form -->
<div class="modal fade" id="modal-default-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Agenda Sekolah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="hidden" id="id_agenda" name="id_agenda" class="form-control">
                    <input type="text" class="form-control" name="judul_edit" id="judul_edit">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="isi_edit" id="isi_edit">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_edit" id="tanggal_edit">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="edit()">Ubah</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection