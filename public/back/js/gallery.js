$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});

$(document).ready(function () {
    $("#openAddModal").click(function () {
        $("#modal-default").modal();
    });

    $('#galleryUpload').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/admin/proses_upload_gallery.html',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Berhasil menambahkan gallery.',
                    showConfirmButton: false,
                    timer: 2000
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.reload();
                    }
                })
            },
            error: function (error) {
                Swal.fire(
                    'Error!',
                    'Gagal menambahkan gallery.',
                    'error'
                )
                console.log("Error : ", error);
            }
        });
    });

    $('#galleryUploadUpdate').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/admin/proses_ubah_gallery.html',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Berhasil merubah gallery.',
                    showConfirmButton: false,
                    timer: 2000
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.reload();
                    }
                })
            },
            error: function (error) {
                Swal.fire(
                    'Error!',
                    'Gagal merubah gallery.',
                    'error'
                )
                console.log("Error : ", error);
            }
        });
    });
});

function getData(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "get_gallery.html",
        data: {
            id_gallery: id
        },
        success: function (res) {
            console.log(res);
            $("#id_gallery").val(res.id_gallery);
            $("#deskripsi_edit").val(res.deskripsi);
            $("#modal-default-edit").modal();
        }
    })
}

function hapus(id) {
    Swal.fire({
        title: 'Hapus Barang?',
        text: "Apakah Anda yakin ingin menghapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "/admin/proses_hapus_gallery.html",
                data: {
                    id_gallery: id
                },
                success: function (res) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil menghapus data gallery.',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.reload();
                        }
                    })
                },
                error: function (error) {
                    Swal.fire(
                        'Error!',
                        'Gagal menghapus gallery.',
                        'error'
                    )
                    console.log("Error : ", error);
                }
            })

        }
    })
}