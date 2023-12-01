<script>
    $(document).ready(function () {
    $("#adduser").click(function (e) {
        e.preventDefault(); // Prevent the form from submitting

        const nama = $("#inputName").val();
        const password = $("#inputPassword").val();
        const alamat = $("#inputAlamat").val();
        const golDarah = $("#selectGolDarah").val();
        const role = $("#selectRole").val();
        const gambar = inputGambar.files[0];
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        const formData = new FormData();
        formData.append('nama', nama);
        formData.append('password', password);
        formData.append('alamat', alamat);
        formData.append('golDarah', golDarah);
        formData.append('role', role);
        formData.append('gambar', gambar);
        formData.append('_token', csrfToken);

        Swal.fire({
                    title: "Do you want to Add User?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#0d6efd',
                    cancelButtonColor: '#6e7881',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('tambahuser' ) }}',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function (response) {
                                    Swal.fire({
                                        title: "Success",
                                        text: "User has been Added",
                                        icon: "success",
                                        showConfirmButton: false,
                                        timer: 3000
                                    }).then((result) => {
                                        location.reload();
                                        $('#addusermodal').modal('hide');
                                    });
                                },
                                error: function (xhr) {
                                if (xhr.status === 400) {
                                    Swal.fire({
                                        title: xhr.responseJSON.error,
                                        icon: 'error',
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'Error!',
                                        text: 'An error occurred while adding the device.',
                                        icon: 'error',
                                    });
                                }
                            }
                    });
                }
                    // No need to handle the "No" case here, as the modal won't be closed
             });
    });
});

</script>