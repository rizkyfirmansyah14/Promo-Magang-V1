let $ = jQuery;

jQuery(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // CRUD AJAX DATA USER
    // show modal add
    jQuery('.addbtn').on('click', function () {
        $('#addModal').modal('show');
    });

    // datatable
    var datauser = $('#dataUser').DataTable({
        "processing": true,
        "ajax": "/getuser",
        "order": [],
    });

    // function add
    $(document).on('submit', '#formtambah', function (event) {
        event.preventDefault();
        var id_role = $('#rl').val();
        var name = $('#nm').val();
        var email = $('#eml').val();
        var password = $('#pw').val();


        if (id_role != '' && name != '' && email != '' && password) {
            $.ajax({
                type: "post",
                url: "/adduser",
                beforeSend: function () {
                    swal({
                        title: 'Menunggu',
                        html: 'Memproses data',
                        onOpen: () => {
                            swal.showLoading();
                        }
                    });
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function () {
                    swal({
                        type: 'success',
                        title: 'Tambah User',
                        text: 'Anda Berhasil Menambah User'
                    });
                    $('#formtambah')[0].reset();
                    $('#addModal').modal('hide');
                    datauser.ajax.reload(null, false);
                },
            });
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
            });
        }
    });

    // function get id to set modal edit
    $(document).on('click', '.editbtn', function () {
        var id = $(this).attr("id");
        $.ajax({
            url: "/getiduser",
            type: "post",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function (data) {
                $('#editModal').modal('show');
                $('#role').val(data.id_role);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#password').val(data.password);
                $('#id').val(id);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
            }
        });
    });

    // function edit data
    $(document).on('submit', '#formedit', function (event) {
        event.preventDefault();
        var id_role = $('#role').val();
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();

        if (id_role != '' && name != '' && email != '' && password) {
            $.ajax({
                type: "post",
                url: "/edituser",
                beforeSend: function () {
                    swal({
                        title: 'Menunggu',
                        html: 'Memproses data',
                        onOpen: () => {
                            swal.showLoading();
                        }
                    });
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function () {
                    swal({
                        type: 'success',
                        title: 'Edit User',
                        text: 'Anda Berhasil Mengedit User'
                    });
                    $('#formedit')[0].reset();
                    $('#editModal').modal('hide');
                    datauser.ajax.reload(null, false);
                },
            });
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
            });
        }
    });

    // function delete
    $(document).on('click', '.deletebtn', function () {
        var id = $(this).attr("id");
        swal({
            title: 'Konfirmasi',
            text: "Apakah anda yakin ingin menghapus ",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: 'Tidak',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "/deleteuser",
                    type: "post",
                    beforeSend: function () {
                        swal({
                            title: 'Menunggu',
                            html: 'Memproses data',
                            onOpen: () => {
                                swal.showLoading();
                            }
                        });
                    },
                    data: {
                        id: id
                    },
                    success: function (data) {
                        swal(
                            'Hapus',
                            'Berhasil Terhapus',
                            'success'
                        );
                        datauser.ajax.reload(null, false);
                    }
                });
            } else if (result.dismiss === swal.DismissReason.cancel) {
                swal(
                    'Batal',
                    'Anda membatalkan penghapusan',
                    'error'
                );
            }
        });
    });
    // END CRUD AJAX DATA USER

    // CRUD AJAX DATA DISCOUNT
    // show modal add
    jQuery('.adddiskon').on('click', function () {
        $('#addDisc').modal('show');
    });

    // datatable discount
    var datadiskon = $('#dataDisc').DataTable({
        "processing": true,
        "ajax": "/getdiskon",
        "order": [],
    });

    // function add discount
    $(document).on('submit', '#formtambahdisc', function (event) {
        event.preventDefault();
        var kategori = $('#ktgr').val();
        var type = $('#typ').val();
        var title = $('#tlt').val();
        var deskripsi = $('#dskrp').val();
        var tanggaldiskon = $('#tgldisc').val();
        var tanggalakhir = $('#tglakhir').val();
        var status = $('#sts').val();
        var extension = $('#img').val().split('.').pop().toLowerCase();
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image");
            $('#user_image').val('');
            return false;
        }

        if (kategori != '' && type != '' && title != '' && deskripsi != '' && tanggaldiskon != '' && tanggalakhir != '' && status != '') {
            $.ajax({
                type: "post",
                url: "/adddiskon",
                beforeSend: function () {
                    swal({
                        title: 'Menunggu',
                        html: 'Memproses data',
                        onOpen: () => {
                            swal.showLoading();
                        }
                    });
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function () {
                    swal({
                        type: 'success',
                        title: 'Tambah Discount',
                        text: 'Anda Berhasil Menambah Discount'
                    });
                    $('#formtambahdisc')[0].reset();
                    $('#addDisc').modal('hide');
                    datadiskon.ajax.reload(null, false);
                },
            });
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
            });
        }
    });

    // function get id discount
    $(document).on('click', '.editbtndisc', function () {
        var id = $(this).attr("id");
        $.ajax({
            url: "/getiddiskon",
            type: "post",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function (data) {
                $('#editDisc').modal('show');
                $('#kategori').val(data.kategori);
                $('#type').val(data.type);
                $('#title').val(data.title);
                $('#deskripsi').val(data.deskripsi);
                $('#tanggal_diskon').val(data.tanggal_diskon);
                $('#tanggal_berakhir').val(data.tanggal_berakhir);
                $('#status').val(data.status);
                $('#id').val(id);
                $('#image').html(data.image);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
            }
        });
    });

    // function edit discount
    $(document).on('submit', '#formeditdisc', function (event) {
        event.preventDefault();
        var kategori = $('#kategori').val();
        var type = $('#type').val();
        var title = $('#title').val();
        var deskripsi = $('#deskripsi').val();
        var tanggaldiskon = $('#tanggal_diskon').val();
        var tanggalakhir = $('#tanggal_berakhir').val();
        var status = $('#status').val();
        var extension = $('#imge').val().split('.').pop().toLowerCase();
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image");
            $('#user_image').val('');
            return false;
        }

        if (kategori != '' && type != '' && title != '' && deskripsi != '' && tanggaldiskon != '' && tanggalakhir != '' && status) {
            $.ajax({
                type: "post",
                url: "/editdiskon",
                beforeSend: function () {
                    swal({
                        title: 'Menunggu',
                        html: 'Memproses data',
                        onOpen: () => {
                            swal.showLoading();
                        }
                    });
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function () {
                    swal({
                        type: 'success',
                        title: 'Edit Diskon',
                        text: 'Anda Berhasil Mengedit Diskon'
                    });
                    $('#formeditdisc')[0].reset();
                    $('#editDisc').modal('hide');
                    datadiskon.ajax.reload(null, false);
                },
            });
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
            });
        }
    });

    // function delete discount
    $(document).on('click', '.deletebtndisc', function () {
        var id = $(this).attr("id");
        swal({
            title: 'Konfirmasi',
            text: "Apakah anda yakin ingin menghapus ",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: 'Tidak',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "/deletediskon",
                    type: "post",
                    beforeSend: function () {
                        swal({
                            title: 'Menunggu',
                            html: 'Memproses data',
                            onOpen: () => {
                                swal.showLoading();
                            }
                        });
                    },
                    data: {
                        id: id
                    },
                    success: function (data) {
                        swal(
                            'Hapus',
                            'Berhasil Terhapus',
                            'success'
                        );
                        datadiskon.ajax.reload(null, false);
                    }
                });
            } else if (result.dismiss === swal.DismissReason.cancel) {
                swal(
                    'Batal',
                    'Anda membatalkan penghapusan',
                    'error'
                );
            }
        });
    });

    // END CRUD AJAX DATA DISCOUNT

    // CRUD AJAX KATEGORI
    // show modal add
    jQuery('.addkategori').on('click', function () {
        $('#addCat').modal('show');
    });

    // datatable kategori
    var datakategori = $('#dataCat').DataTable({
        
        "processing": true,
        "ajax": "/getkategori",
        "order": []
    });

    // function add kategori
    $(document).on('submit', '#formtambahcat', function (event) {
        event.preventDefault();
        var nama_kategori = $('#ktgr').val();
        var extension = $('#icon').val().split('.').pop().toLowerCase();
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image");
            $('#user_image').val('');
            return false;
        }

        if (nama_kategori != '') {
            $.ajax({
                type: "post",
                url: "/addkategori",
                beforeSend: function () {
                    swal({
                        title: 'Menunggu',
                        html: 'Memproses data',
                        onOpen: () => {
                            swal.showLoading();
                        }
                    });
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function () {
                    swal({
                        type: 'success',
                        title: 'Tambah Category',
                        text: 'Anda Berhasil Menambah Category'
                    });
                    $('#formtambahcat')[0].reset();
                    $('#addCat').modal('hide');
                    datakategori.ajax.reload(null, false);
                },
            });
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
            });
        }
    });

    // function get id kategori
    $(document).on('click', '.editbtncat', function () {
        var id = $(this).attr("id");
        $.ajax({
            url: "/getidkategori",
            type: "post",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function (data) {
                $('#editCat').modal('show');
                $('#name').val(data.nama_kategori);
                $('#id').val(id);
                $('#image').html(data.icon_kategori);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
            }
        });
    });

    // function edit kategori
    $(document).on('submit', '#formeditcat', function (event) {
        event.preventDefault();
        var nama_kategori = $('#name').val();
        var extension = $('#icone').val().split('.').pop().toLowerCase();
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image");
            $('#user_image').val('');
            return false;
        }

        if (nama_kategori != '') {
            $.ajax({
                type: "post",
                url: "/editkategori",
                beforeSend: function () {
                    swal({
                        title: 'Menunggu',
                        html: 'Memproses data',
                        onOpen: () => {
                            swal.showLoading();
                        }
                    });
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function () {
                    swal({
                        type: 'success',
                        title: 'Edit Category',
                        text: 'Anda Berhasil Mengedit Category'
                    });
                    $('#formeditcat')[0].reset();
                    $('#editCat').modal('hide');
                    datakategori.ajax.reload(null, false);
                },
            });
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
            });
        }
    });

    // function delete kategori
    $(document).on('click', '.deletebtncat', function () {
        var id = $(this).attr("id");
        swal({
            title: 'Konfirmasi',
            text: "Apakah anda yakin ingin menghapus ",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: 'Tidak',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "/deletekategori",
                    type: "post",
                    beforeSend: function () {
                        swal({
                            title: 'Menunggu',
                            html: 'Memproses data',
                            onOpen: () => {
                                swal.showLoading();
                            }
                        });
                    },
                    data: {
                        id: id
                    },
                    success: function (data) {
                        swal(
                            'Hapus',
                            'Berhasil Terhapus',
                            'success'
                        );
                        datakategori.ajax.reload(null, false);
                    }
                });
            } else if (result.dismiss === swal.DismissReason.cancel) {
                swal(
                    'Batal',
                    'Anda membatalkan penghapusan',
                    'error'
                );
            }
        });
    });

    // END CRUD AJAX KATEGORI

});
