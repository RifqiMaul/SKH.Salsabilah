$(document).ready(function () {
    $("#openAddModal").click(function () {
        $("#modal-default").modal();
    });

    $('#berkasUpload').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/siswa/proses_upload_berkas.html',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Berhasil menambahkan berkas.',
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
                    'Gagal menambahkan berkas.',
                    'error'
                )
                console.log("Error : ", error);
            }
        });
    });
});