<title><?php echo $title; ?></title>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahTitle">Tambah Dokter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_add">
                    <div class="card-body">
                        <div class="form-group">
                            <label>NIK</label><br>
                            <input type="number" class="form-control nik" placeholder="Masukan NIK">
                        </div>
                        <div class="form-group">
                            <label>Nama</label><br>
                            <input type="text" class="form-control nama" placeholder="Masukan nama lengkap">
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Tempat Lahir</label><br>
                                <input type="text" class="form-control tempat_lahir" placeholder="Masukan tempat lahir">
                            </div>
                            <div class="col-lg-4">
                                <label>Tanggal Lahir</label><br>
                                <input type="date" class="form-control tanggal_lahir">
                            </div>
                            <div class="col-lg-4">
                                <label>Agama</label><br>
                                <select style="width:100%;" class="form-control agama">

                                </select> </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Jenis Kelamin</label><br>
                                <select style="width:100%;" class="form-control jk">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Golongan Darah</label><br>
                                <select style="width:100%;" class="form-control goldar">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Status Kawin</label><br>
                                <select style="width:100%;" class="form-control status_menikah">
                                    <option value="1">Belum Kawin</option>
                                    <option value="2">Kawin</option>
                                    <option value="3">Cerai hidup</option>
                                    <option value="4">Cerai mati</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>No. HP</label><br>
                            <input type="number" class="form-control telp" placeholder="Nomor telepon hp">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label><br>
                            <textarea class="form-control alamat" rows="3" placeholder="Alamat lengkap"></textarea>
                        </div>

                        <div class="form-group">
                            <label>No. Izin Praktek</label><br>
                            <input type="text" class="form-control no_izin_praktek" placeholder="Masukan no izin praktek dokter">
                        </div>

                        <div class="form-group">
                            <label>Spesialis</label><br>
                            <select style="width:100%;" class="form-control spesialis">

                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnSave">Simpan</button>
                <!-- <button type="button" class="btn btn-primary btnSaveScan" style="display:none;">Save</button>
        <button type="button" class="btn btn-primary btnUpdate" style="display:none;">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditTitle">Edit Dokter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_add">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Dokter</label><br>
                            <input type="text" class="form-control nakes_kode" placeholder="" disabled>
                        </div>
                        <div class="form-group">
                            <label>NIK</label><br>
                            <input type="number" class="form-control nik_edit" placeholder="Masukan NIK">
                        </div>
                        <div class="form-group">
                            <label>Nama</label><br>
                            <input type="text" class="form-control nama_edit" placeholder="Masukan nama lengkap">
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Tempat Lahir</label><br>
                                <input type="text" class="form-control tempat_lahir_edit" placeholder="Masukan tempat lahir">
                            </div>
                            <div class="col-lg-4">
                                <label>Tanggal Lahir</label><br>
                                <input type="date" class="form-control tanggal_lahir_edit">
                            </div>
                            <div class="col-lg-4">
                                <label>Agama</label><br>
                                <select style="width:100%;" class="form-control agama_edit">

                                </select> </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Jenis Kelamin</label><br>
                                <select style="width:100%;" class="form-control jk_edit">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Golongan Darah</label><br>
                                <select style="width:100%;" class="form-control goldar_edit">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Status Kawin</label><br>
                                <select style="width:100%;" class="form-control status_menikah_edit">
                                    <option value="1">Belum Kawin</option>
                                    <option value="2">Kawin</option>
                                    <option value="3">Cerai hidup</option>
                                    <option value="4">Cerai mati</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>No. HP</label><br>
                            <input type="number" class="form-control telp_edit" placeholder="Nomor telepon">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label><br>
                            <textarea class="form-control alamat_edit" rows="3" placeholder="Alamat lengkap"></textarea>
                        </div>

                        <div class="form-group">
                            <label>No. Izin Praktek</label><br>
                            <input type="text" class="form-control no_izin_praktek_edit" placeholder="Masukan no izin praktek dokter">
                        </div>

                        <div class="form-group">
                            <label>Spesialis</label><br>
                            <select style="width:100%;" class="form-control spesialis_edit">

                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnUpdate">Update</button>
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
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Master Data Dokter</h5>
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
                        <h3 class="card-label">Master Data Dokter
                            <span class="d-block text-muted pt-2 font-size-sm">Manajemen Master Data Dokter</span></h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-success font-weight-bolder btnTambah mr-3">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:../../../../../../../../metronic/themes/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Tambah Dokter</a>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Bulan:</label>
                                            <select class="form-control" id="kt_datatable_search_bulan">
                                                <option value="">Semua Bulan</option>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Tahun:</label>
                                            <select class="form-control" id="kt_datatable_search_tahun">
                                                <option value="">Semua Tahun</option>
                                                <option value="<?php echo date('Y') ?>"><?php echo date('Y') ?></option>
                                                <option value="<?php echo date('Y') - 1 ?>"><?php echo date('Y') - 1 ?></option>
                                                <option value="<?php echo date('Y') - 2 ?>"><?php echo date('Y') - 2 ?></option>
                                                <option value="<?php echo date('Y') - 3 ?>"><?php echo date('Y') - 3 ?></option>
                                                <option value="<?php echo date('Y') - 4 ?>"><?php echo date('Y') - 4 ?></option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
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
    $('.spesialis').select2();
    // $('.bulan_list').select2();
    // $('.dokter_list_edit').select2();
    // $('.bulan_list_edit').select2();
    get_spesialis();
    get_agama();


    $('.btnTambah').click(function() {
        $(".form_add").trigger('reset');
        $('#modalTambahTitle').html('Tambah Dokter');
        $('#modalTambah').modal();
    });

    var items = []

    function userExists(username) {
        return items.some(function(el) {
            return el.indikator === username;
        });
    }

    $('.btnSave').click(function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Master_dokter/add') ?>',
            dataType: 'json',
            data: {
                nik: $('.nik').val(),
                nama: $('.nama').val(),
                jk: $('.jk').val(),
                tempat_lahir: $('.tempat_lahir').val(),
                tanggal_lahir: $('.tanggal_lahir').val(),
                goldar: $('.goldar').val(),
                agama: $('.agama').val(),
                alamat: $('.alamat').val(),
                telp: $('.telp').val(),
                status_menikah: $('.status_menikah').val(),
                spesialis: $('.spesialis').val(),
                no_izin_praktek: $('.no_izin_praktek').val()
            },
            success: function(data) {
                if (data.stts) {
                    bootbox.alert({
                        message: "" + data.msg,
                        backdrop: true,
                        size: 'small',
                        callback: function() {
                            location.reload();
                        }
                    });
                } else {
                    bootbox.alert({
                        message: "" + data.msg,
                        backdrop: true,
                        size: 'small'
                    });
                }
            },
            error: function(xhr, desc, err) {
                console.log(xhr.responseText);
            }
        });
    });

    $('.btnUpdate').click(function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Master_dokter/update') ?>',
            dataType: 'json',
            data: {
                kode: $('.nakes_kode').val(),
                nik: $('.nik_edit').val(),
                nama: $('.nama_edit').val(),
                jk: $('.jk_edit').val(),
                tempat_lahir: $('.tempat_lahir_edit').val(),
                tanggal_lahir: $('.tanggal_lahir_edit').val(),
                goldar: $('.goldar_edit').val(),
                agama: $('.agama_edit').val(),
                alamat: $('.alamat_edit').val(),
                telp: $('.telp_edit').val(),
                status_menikah: $('.status_menikah_edit').val(),
                spesialis: $('.spesialis_edit').val(),
                no_izin_praktek: $('.no_izin_praktek_edit').val()
            },
            success: function(data) {
                console.log(data)
                if (data.stts) {
                    bootbox.alert({
                        message: "" + data.msg,
                        backdrop: true,
                        size: 'small',
                        callback: function() {
                            location.reload();
                        }
                    });
                } else {
                    bootbox.alert({
                        message: "" + data.msg,
                        backdrop: true,
                        size: 'small'
                    });
                }
            },
            error: function(xhr, desc, err) {
                console.log(xhr.responseText);
            }
        });
    });

    function get_spesialis() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Master_dokter/get_list_spesialis') ?>',
            dataType: 'json',
            success: function(data) {
                let html = "";
                for (let i = 0; i < data.length; i++) {
                    html += "<option value=" + data[i].spesialis_id + ">" + data[i].spesialis + "</option>";
                }
                $('.spesialis').html(html);
                $('.spesialis_edit').html(html);
            },
            error: function(xhr, desc, err) {
                console.log(xhr.responseText);
            }
        });
    }

    function get_agama() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Master_dokter/get_list_agama') ?>',
            dataType: 'json',
            success: function(data) {
                let html = "";
                for (let i = 0; i < data.length; i++) {
                    html += "<option value=" + data[i].agama_id + ">" + data[i].agama + "</option>";
                }
                $('.agama').html(html);
                $('.agama_edit').html(html);
            },
            error: function(xhr, desc, err) {
                console.log(xhr.responseText);
            }
        });
    }

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
                            url: '<?php echo base_url('Master_dokter/get_list_dokter') ?>',
                            // sample custom headers
                            // headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
                            map: function(raw) {
                                // sample data mapping
                                var dataSet = raw;
                                if (typeof raw.data !== 'undefined') {
                                    dataSet = raw.data;
                                }
                                return dataSet;
                            },
                        },
                    },
                    pageSize: 10,
                    serverPaging: true,
                    serverSide: true,
                    // serverFiltering: true,
                    serverSorting: true,
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
                    field: 'nakes_kode',
                    title: 'Kode'
                }, {
                    field: 'nakes_nik',
                    title: 'NIK'
                }, {
                    field: 'nakes_nama',
                    title: 'Nama',
                }, {
                    field: 'spesialis',
                    title: 'Spesialis',
                }, {
                    field: 'nakes_alamat',
                    title: 'Alamat',
                }, {
                    field: 'nakes_telp',
                    title: 'Kontak',
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
							<div class="dropdown dropdown-inline">\
								<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown">\
	                                <i class="la la-bars"></i>\
	                            </a>\
							  	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">\
									<ul class="nav nav-hoverable flex-column">\
							    		<li class="nav-item"><a data-kode="' + row.nakes_kode + '" class="nav-link btnReset" href="javascript:;"><i class="nav-icon la la-key"></i><span class="nav-text">Reset Password</span></a></li>\
									</ul>\
							  	</div>\
							</div>\
							<a href="javascript:;" data-kode="' + row.nakes_kode + '" class="btn btn-sm btn-clean btn-icon btnEdit" title="Edit details">\
								<i class="la la-edit"></i>\
							</a>\
							<a href="javascript:;" data-kode="' + row.nakes_kode + '" class="btn btn-sm btn-clean btn-icon btnDelete" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
						';
                    },
                }],
            });

            $(document).on("click", ".btnReset", function() {
                let kode = $(this).data("kode");
                bootbox.confirm({
                    title: "Reset password dokter?",
                    message: "Default password adalah payanganhospital",
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
                                url: '<?php echo base_url('Master_dokter/reset_password') ?>',
                                data: {
                                    kode: kode,
                                },
                                dataType: 'json',
                                success: function(data) {
                                    if (data) {
                                        bootbox.alert({
                                            message: "Reset password berhasil",
                                            backdrop: true,
                                            size: 'small',
                                            callback: function(){
                                                location.reload();
                                            }
                                        });
                                    } else {
                                        bootbox.alert({
                                            message: "Oops! Something wrong",
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

            $(document).on("click", ".btnDelete", function() {
                let kode = $(this).data("kode");
                bootbox.confirm({
                    title: "Hapus dokter?",
                    message: "Data yang telah dihapus tidak dapat dikembalikan",
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
                                url: '<?php echo base_url('Master_dokter/delete') ?>',
                                data: {
                                    kode: kode,
                                },
                                dataType: 'json',
                                success: function(data) {
                                    if (data) {
                                        location.reload();
                                    } else {
                                        bootbox.alert({
                                            message: "Oops! Something wrong",
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

            $(document).on("click", ".btnEdit", function() {

                let kode = $(this).data("kode");

                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('Master_dokter/get_detail') ?>',
                    dataType: 'json',
                    data: {
                        kode: kode
                    },
                    success: function(data) {
                        $('.nakes_kode').val(data.nakes_kode);
                        $('.nik_edit').val(data.nakes_nik);
                        $('.nama_edit').val(data.nakes_nama);
                        $('.jk_edit').val(data.nakes_jk);
                        $('.tempat_lahir_edit').val(data.nakes_tmp_lahir);
                        $('.tanggal_lahir_edit').val(data.nakes_tgl_lahir);
                        $('.goldar_edit').val(data.nakes_goldar);
                        $('.agama_edit').val(data.nakes_agama_id);
                        $('.alamat_edit').val(data.nakes_alamat);
                        $('.telp_edit').val(data.nakes_telp);
                        $('.status_menikah_edit').val(data.nakes_status_menikah_id);
                        $('.spesialis_edit').val(data.nakes_spesialis_id);
                        $('.no_izin_praktek_edit').val(data.nakes_no_izin_praktek);
                    },
                    error: function(xhr, desc, err) {
                        console.log(xhr.responseText);
                    }
                });

                $('#modalEdit').modal();
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