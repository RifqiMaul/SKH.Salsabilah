function edit() {
    Swal.fire({
        title: 'Edit Profile Sekolah?',
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
                url: "proses_ubah_profile.html",
                data: {
                    nama_sekolah: $("#nama_sekolah").val(),
                    deskripsi: $("#deskripsi").val(),
                    alamat: $("#alamat").val(),
                    email: $("#email").val(),
                    telepon: $("#telepon").val()
                },
                success: function (response) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil merubah data profile.',
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
                        'Gagal merubah data profile.',
                        'error'
                    )
                    console.log("Error : ", error);
                }
            })

        }
    })
}