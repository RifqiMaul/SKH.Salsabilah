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
});

function getData(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "get_agenda.html",
        data: {
            id_agenda: id
        },
        success: function (res) {
            console.log(res);
            $("#id_agenda").val(res.id_agenda);
            $("#judul_edit").val(res.judul);
            $("#isi_edit").val(res.isi);
            $("#tanggal_edit").val(res.tanggal);
            $("#modal-default-edit").modal();
        }
    })
}

function tambah() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "proses_tambah_agenda.html",
        data: {
            judul: $("#judul").val(),
            isi: $("#isi").val(),
            tanggal: $("#tanggal").val()
        },
        success: function (response) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Berhasil menambahkan data agenda.',
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
                'Gagal menambahkan data agenda.',
                'error'
            )
            console.log("Error : ", error);
        }
    })
}

function edit() {
    Swal.fire({
        title: 'Edit Agenda?',
        text: "Apakah Anda yakin ingin merubah data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, do it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "proses_ubah_agenda.html",
                data: {
                    id_agenda: $("#id_agenda").val(),
                    judul: $("#judul_edit").val(),
                    isi: $("#isi_edit").val(),
                    tanggal: $("#tanggal_edit").val()
                },
                success: function (response) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil merubah data agenda.',
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
                        'Gagal merubah data agenda.',
                        'error'
                    )
                    console.log("Error : ", error);
                }
            })

        }
    })
}

function hapus(id) {
    Swal.fire({
        title: 'Hapus Agenda?',
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
                url: "proses_hapus_agenda.html",
                data: {
                    id_agenda: id
                },
                success: function (response) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil menghapus data agenda.',
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
                        'Gagal menghapus data agenda.',
                        'error'
                    )
                    console.log("Error : ", error);
                }
            })

        }
    })
}
