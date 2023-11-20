@extends('admin.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Gallery</h1>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary" style="float: right;" id="openAddModal">Tambah Gallery</button>
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
                            <h3 class="card-title">List Gallery</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Foto</th>
                                        <th>Deskripsi</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($gallery as $value)
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><img src="<?= url('/'); ?>/foto/gallery/{{ $value->link_gambar }}" style="width: 500px;"></td>
                                        <td>{{ $value->deskripsi }}</td>
                                        <td>
                                            <button class="btn btn-primary" onclick="getData(<?= $value->id_gallery ?>)"><i class="fa fa-close"></i>Edit</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger" onclick="hapus(<?= $value->id_gallery ?>)"><i class="fa fa-close"></i>Delete</button>
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
            <form id="galleryUpload" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Gallery</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Edit Form -->
<div class="modal fade" id="modal-default-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="galleryUploadUpdate" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Gallery</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="hidden" id="id_gallery" name="id_gallery" class="form-control">
                        <input type="file" class="form-control" name="gambar_edit" id="gambar_edit">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi_edit" id="deskripsi_edit">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection