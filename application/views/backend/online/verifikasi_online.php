<title><?php echo $title; ?></title>

<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form">
                    <div class="card-body pt-0 pb-0">
                        <img class="mb-5" id="foto_detail" width="60">
                        <div class="form-group">
                            <label>No. Rekam Medis</label><br>
                            <input type="text" class="form-control" id="nrm_detail" placeholder="" disabled>
                        </div>
                        <div class="form-group">
                            <label>NIK</label><br>
                            <input type="number" class="form-control" id="nik_detail" placeholder="Masukan NIK" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama</label><br>
                            <input type="text" class="form-control" id="nama_detail" placeholder="Masukan nama lengkap" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label><br>
                            <input type="text" class="form-control" id="nama_ibu_detail" placeholder="Masukan nama ibu" disabled>
                        </div>
                        <div class="form-group">
                            <label>Email</label><br>
                            <input type="email" class="form-control" id="email_detail" placeholder="Masukan email" disabled>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Tempat Lahir</label><br>
                                <input type="text" class="form-control" id="tempat_detail" placeholder="Masukan tempat lahir" disabled>
                            </div>
                            <div class="col-lg-6">
                                <label>Tanggal Lahir</label><br>
                                <input type="date" class="form-control" id="tgl_detail" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Pekerjaan</label><br>
                                <select style="width:100%;" class="form-control pekerjaan" id="pekerjaan_detail" disabled>

                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Negara</label><br>
                                <select style="width:100%;" class="form-control negara" id="negara_detail" disabled>

                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Agama</label><br>
                                <select style="width:100%;" class="form-control agama" id="agama_detail" disabled>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Jenis Kelamin</label><br>
                                <select style="width:100%;" class="form-control jk" id="jk_detail" disabled>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Golongan Darah</label><br>
                                <select style="width:100%;" class="form-control goldar" id="goldar_detail" disabled>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Status Kawin</label><br>
                                <select style="width:100%;" class="form-control status_menikah" id="menikah_detail" disabled>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>No. HP</label><br>
                            <input type="number" class="form-control" placeholder="Nomor telepon" id="telp_detail" disabled>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label><br>
                            <textarea class="form-control alamat" id="alamat_detail" rows="3" placeholder="Alamat lengkap" disabled></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary btnUpdate">Update</button> -->
            </div>
        </div>
    </div>
</div>

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Verifikasi Akun</h5>
            <!--end::Page Title-->
            <!--end::Actions-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Daterange-->
            <a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Tanggal hari ini" data-placement="left">
                <span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Hari ini</span>
                <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date"></span>
            </a>
            <!--end::Daterange-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="card card-custom col-xl-12">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Verifikasi Akun
                            <span class="d-block text-muted pt-2 font-size-sm">List Akun yang mendaftar</span></h3>
                    </div>
                    <div class="card-toolbar">
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-md-3 col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

<script>
    // $('.goldar').select2();
    // $('.agama').select2();
    // $('.status_menikah').select2();
    // $('.pekerjaan').select2();
    // $('.negara').select2();
    // $('.jk').select2();

    // $('.btnTambah').click(function() {
    //     $(".form_add").trigger('reset');
    //     $('#modalTambah').modal();
    // });

    // $('.btnSave').click(function() {
    //     $('.preloader').fadeIn();
    //     if ($('#nik_add').val() == '' || $('#nama_add').val() == '' || $('#nama_ibu_add').val() == '' || $('#tempat_add').val() == '' || $('#tgl_add').val() == '' || $('#alamat_add').val() == '') {
    //         $('.preloader').fadeOut();
    //         bootbox.alert({
    //             message: "Mohon lengkapi data",
    //             backdrop: true,
    //             size: 'small'
    //         });
    //     } else {
    //         $.ajax({
    //             type: 'POST',
    //             url: '<?php echo base_url('Master_pasien/add') ?>',
    //             dataType: 'json',
    //             data: {
    //                 nik: $('#nik_add').val(),
    //                 nama: $('#nama_add').val(),
    //                 nama_ibu: $('#nama_ibu_add').val(),
    //                 tempat: $('#tempat_add').val(),
    //                 tgl: $('#tgl_add').val(),
    //                 telp: $('#telp_add').val(),
    //                 alamat: $('#alamat_add').val(),
    //                 email: $('#email_add').val(),
    //                 jk: $('#jk_add').val(),
    //                 goldar: $('#goldar_add').val(),
    //                 agama: $('#agama_add').val(),
    //                 menikah: $('#menikah_add').val(),
    //                 pekerjaan: $('#pekerjaan_add').val(),
    //                 negara: $('#negara_add').val()
    //             },
    //             success: function(data) {
    //                 $('.preloader').fadeOut();
    //                 if (data.stts) {
    //                     bootbox.alert({
    //                         message: "" + data.msg,
    //                         backdrop: true,
    //                         size: 'small',
    //                         callback: function() {
    //                             location.reload();
    //                         }
    //                     });
    //                 } else {
    //                     bootbox.alert({
    //                         message: "" + data.msg,
    //                         backdrop: true,
    //                         size: 'small'
    //                     });
    //                 }
    //             },
    //             error: function(xhr, desc, err) {
    //                 console.log(xhr.responseText);
    //             }
    //         });
    //     }
    // });

    // $('.btnUpdate').click(function() {
    //     $('.preloader').fadeIn();
    //     $.ajax({
    //         type: 'POST',
    //         url: '<?php echo base_url('Master_pasien/update') ?>',
    //         dataType: 'json',
    //         data: {
    //             nrm: $('#nrm_edit').val(),
    //             nik: $('#nik_edit').val(),
    //             nama: $('#nama_edit').val(),
    //             nama_ibu: $('#nama_ibu_edit').val(),
    //             tempat: $('#tempat_edit').val(),
    //             tgl: $('#tgl_edit').val(),
    //             telp: $('#telp_edit').val(),
    //             alamat: $('#alamat_edit').val(),
    //             email: $('#email_edit').val(),
    //             jk: $('#jk_edit').val(),
    //             goldar: $('#goldar_edit').val(),
    //             agama: $('#agama_edit').val(),
    //             menikah: $('#menikah_edit').val(),
    //             pekerjaan: $('#pekerjaan_edit').val(),
    //             negara: $('#negara_edit').val()
    //         },
    //         success: function(data) {
    //             $('.preloader').fadeOut();
    //             if (data.stts) {
    //                 bootbox.alert({
    //                     message: "" + data.msg,
    //                     backdrop: true,
    //                     size: 'small',
    //                     callback: function() {
    //                         location.reload();
    //                     }
    //                 });
    //             } else {
    //                 bootbox.alert({
    //                     message: "" + data.msg,
    //                     backdrop: true,
    //                     size: 'small'
    //                 });
    //             }
    //         },
    //         error: function(xhr, desc, err) {
    //             console.log(xhr.responseText);
    //         }
    //     });
    // });

    // $.ajax({
    //     type: 'GET',
    //     url: '<?php echo base_url('Verifikasi_online/get_list_daftar_online') ?>',
    //     dataType: 'json',
    //     success: function(data) {
    //         let goldar = "";
    //         let agama = '';
    //         let status_menikah = '';
    //         let pekerjaan = '';
    //         let negara = '';

    //         for (let i = 0; i < data.goldar.length; i++) {
    //             goldar += "<option value=" + data.goldar[i].goldar_id + ">" + data.goldar[i].goldar + "</option>";
    //         }

    //         for (let i = 0; i < data.agama.length; i++) {
    //             agama += "<option value=" + data.agama[i].agama_id + ">" + data.agama[i].agama + "</option>";
    //         }

    //         for (let i = 0; i < data.status_menikah.length; i++) {
    //             status_menikah += "<option value=" + data.status_menikah[i].status_menikah_id + ">" + data.status_menikah[i].status_menikah + "</option>";
    //         }

    //         for (let i = 0; i < data.pekerjaan.length; i++) {
    //             pekerjaan += "<option value=" + data.pekerjaan[i].pekerjaan_id + ">" + data.pekerjaan[i].pekerjaan + "</option>";
    //         }

    //         for (let i = 0; i < data.negara.length; i++) {
    //             negara += "<option value=" + data.negara[i].negara_id + ">" + data.negara[i].negara_nama + "</option>";
    //         }

    //         $('.goldar').html(goldar);
    //         $('.agama').html(agama);
    //         $('.status_menikah').html(status_menikah);
    //         $('.pekerjaan').html(pekerjaan);
    //         $('.negara').html(negara);
    //     },
    //     error: function(xhr, desc, err) {
    //         console.log(xhr.responseText);
    //     }
    // });


    // let html = "<option value=''>Semua Tanggal</option>";
    // for (let i = 0; i < dataTanggal.length; i++) {
    //     html += "<option value=" + dataTanggal[i].jadwal_poli_tanggal + ">" + dataTanggal[i].jadwal_poli_tanggal + "</option>";
    // }
    // $('#kt_datatable_search_tanggal').html(html);

    // let html2 = "<option value=''>Semua Unit/Poli</option>";
    // for (let i = 0; i < dataPoli.length; i++) {
    //     html2 += "<option value=" + dataPoli[i].poli_id + ">" + dataPoli[i].poli_nama + "</option>";
    // }
    // $('#kt_datatable_search_poli').html(html2);

    var KTDatatableRemoteAjaxDemo = function() {
        // Private functions

        // basic demo
        var demo = function() {

            var datatable = $('#kt_datatable').KTDatatable({
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '<?php echo base_url('Verifikasi_online/get_list_daftar_online') ?>',
                            // sample custom headers
                            // headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
                            map: function(raw) {
                                var dataSet = raw;

                                return dataSet;
                            },
                        },
                    },
                    pageSize: 10,
                    serverPaging: true,
                    serverSide: true,
                    serverFiltering: false,
                    serverSorting: false,
                },

                // layout definition
                layout: {
                    scroll: false,
                    footer: false,
                },

                // column sorting
                sortable: true,

                pagination: true,

                search: {
                    input: $('#kt_datatable_search_query'),
                    key: 'generalSearch'
                },

                // columns definition
                columns: [{
                    field: 'daftar_online_nik',
                    title: 'NIK'
                }, {
                    field: 'daftar_online_nama',
                    title: 'Nama'
                }, {
                    field: 'daftar_online_jk',
                    title: 'Jenis Kelamin'
                }, {
                    field: '',
                    title: 'TTL',
                    template: function(row) {
                        return (row.daftar_online_tempat_lahir + ", " + moment(row.daftar_online_tanggal_lahir).format('DD-MM-YYYY'));
                    },
                }, {
                    field: 'daftar_online_alamat',
                    title: 'Alamat'
                }, {
                    field: 'daftar_online_telp',
                    title: 'Telp'
                }, {
                    field: 'daftar_online_email',
                    title: 'Email'
                }, {
                    field: 'daftar_online_foto_ktp',
                    title: 'Foto KTP',
                    width: 150,
                    template: function(row) {
                        return '<img src="https://production.diskominfo.gianyarkab.go.id/apipayanganhospital/assets/images/profil_pasien/' + row.daftar_online_foto_ktp + '" width="130">'
                    }
                }, {
                    field: 'daftar_online_foto_selfie',
                    title: 'Foto Selfie',
                    width: 150,
                    template: function(row) {
                        return '<img src="https://production.diskominfo.gianyarkab.go.id/apipayanganhospital/assets/images/profil_pasien/' + row.daftar_online_foto_selfie + '" width="130">'
                    }
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
							<a href="javascript:;" data-id="' + row.daftar_online_id + '" class="btn btn-sm btn-clean btn-icon btnVerif" title="Verifikasi">\
								<i class="la la-check"></i>\
                            </a>\
                            <a href="javascript:;" data-id="' + row.daftar_online_id + '" class="btn btn-sm btn-clean btn-icon btnTolak" title="Tolak">\
								<i class="la la-times"></i>\
							</a>\
						';
                    },
                }],

            });

            $(document).on("click", ".btnVerif", function() {
                let id = $(this).data("id");
                bootbox.confirm({
                    title: "Verifikasi Data?",
                    message: "Data akan diteruskan ke data pasien jika diverifikasi",
                    buttons: {
                        cancel: {
                            label: 'Batal'
                        },
                        confirm: {
                            label: 'OK',
                            className: 'btn btn-primary'
                        }
                    },
                    callback: function(result) {
                        if (result) {
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo base_url('Verifikasi_online/verifikasi') ?>',
                                data: {
                                    daftar_online_id: id
                                },
                                dataType: 'json',
                                success: function(data) {
                                    if (data.flag == "1") {
                                        bootbox.alert({
                                            message: data.msg,
                                            backdrop: true,
                                            size: 'small',
                                            callback: function() {
                                                location.reload();
                                            }
                                        });
                                    } else {
                                        bootbox.alert({
                                            message: data.msg,
                                            backdrop: true,
                                            size: 'small'
                                        });
                                    }
                                },
                                error: function(xhr, desc, err) {
                                    console.log(xhr.responseText);
                                }
                            });
                        }
                    }
                });
            });

            $(document).on("click", ".btnTolak", function() {
                let id = $(this).data("id");
                bootbox.confirm({
                    title: "Tolak Verifikasi Data?",
                    message: "Tolak data yang belum lengkap atau tidak valid",
                    buttons: {
                        cancel: {
                            label: 'Batal'
                        },
                        confirm: {
                            label: 'OK',
                            className: 'btn btn-primary'
                        }
                    },
                    callback: function(result) {
                        if (result) {
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo base_url('Verifikasi_online/tolak') ?>',
                                data: {
                                    daftar_online_id: id,
                                },
                                dataType: 'json',
                                success: function(data) {
                                    if (data.flag == "1") {
                                        bootbox.alert({
                                            message: data.msg,
                                            backdrop: true,
                                            size: 'small',
                                            callback: function() {
                                                location.reload();
                                            }
                                        });
                                    } else {
                                        bootbox.alert({
                                            message: data.msg,
                                            backdrop: true,
                                            size: 'small'
                                        });
                                    }
                                },
                                error: function(xhr, desc, err) {
                                    console.log(xhr.responseText);
                                }
                            });
                        }
                    }
                });
            });
        };

        return {
            // public functions
            init: function() {
                demo();
            },
        };
    }();

    jQuery(document).ready(function() {
        KTDatatableRemoteAjaxDemo.init();
    });
</script>