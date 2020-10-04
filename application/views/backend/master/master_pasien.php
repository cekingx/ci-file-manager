<title><?php echo $title; ?></title>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahTitle">Tambah Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_add">
                    <div class="card-body pt-0 pb-0">
                        <div class="form-group">
                            <label>NIK</label><br>
                            <input type="number" class="form-control" id="nik_add" placeholder="Masukan NIK">
                        </div>
                        <div class="form-group">
                            <label>Nama</label><br>
                            <input type="text" class="form-control" id="nama_add" placeholder="Masukan nama lengkap">
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label><br>
                            <input type="text" class="form-control" id="nama_ibu_add" placeholder="Masukan nama ibu">
                        </div>
                        <div class="form-group">
                            <label>Email</label><br>
                            <input type="email" class="form-control" id="email_add" placeholder="Masukan email">
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Tempat Lahir</label><br>
                                <input type="text" class="form-control" id="tempat_add" placeholder="Masukan tempat lahir">
                            </div>
                            <div class="col-lg-6">
                                <label>Tanggal Lahir</label><br>
                                <input type="date" class="form-control" id="tgl_add">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Pekerjaan</label><br>
                                <select style="width:100%;" class="form-control pekerjaan" id="pekerjaan_add">

                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Negara</label><br>
                                <select style="width:100%;" class="form-control negara" id="negara_add">

                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Agama</label><br>
                                <select style="width:100%;" class="form-control agama" id="agama_add">

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Jenis Kelamin</label><br>
                                <select style="width:100%;" class="form-control jk" id="jk_add">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Golongan Darah</label><br>
                                <select style="width:100%;" class="form-control goldar" id="goldar_add">
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Status Kawin</label><br>
                                <select style="width:100%;" class="form-control status_menikah" id="menikah_add">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>No. HP</label><br>
                            <input type="number" class="form-control" placeholder="Nomor telepon" id="telp_add">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label><br>
                            <textarea class="form-control alamat" id="alamat_add" rows="3" placeholder="Alamat lengkap"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnSave">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditTitle">Edit Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_add">
                    <div class="card-body pt-0 pb-0">
                    <img class="mb-5" id="foto_edit" width="60">
                    <div class="form-group">
                        <label>No. Rekam Medis</label><br>
                        <input type="text" class="form-control" id="nrm_edit" placeholder="" disabled>
                    </div>
                    <div class="form-group">
                        <label>NIK</label><br>
                        <input type="number" class="form-control" id="nik_edit" placeholder="Masukan NIK">
                    </div>
                    <div class="form-group">
                        <label>Nama</label><br>
                        <input type="text" class="form-control" id="nama_edit" placeholder="Masukan nama lengkap">
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu</label><br>
                        <input type="text" class="form-control" id="nama_ibu_edit" placeholder="Masukan nama ibu">
                    </div>
                    <div class="form-group">
                        <label>Email</label><br>
                        <input type="email" class="form-control" id="email_edit" placeholder="Masukan email">
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Tempat Lahir</label><br>
                            <input type="text" class="form-control" id="tempat_edit" placeholder="Masukan tempat lahir">
                        </div>
                        <div class="col-lg-6">
                            <label>Tanggal Lahir</label><br>
                            <input type="date" class="form-control" id="tgl_edit">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Pekerjaan</label><br>
                            <select style="width:100%;" class="form-control pekerjaan" id="pekerjaan_edit">

                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Negara</label><br>
                            <select style="width:100%;" class="form-control negara" id="negara_edit">

                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Agama</label><br>
                            <select style="width:100%;" class="form-control agama" id="agama_edit">

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Jenis Kelamin</label><br>
                            <select style="width:100%;" class="form-control jk" id="jk_edit">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Golongan Darah</label><br>
                            <select style="width:100%;" class="form-control goldar" id="goldar_edit">
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Status Kawin</label><br>
                            <select style="width:100%;" class="form-control status_menikah" id="menikah_edit">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>No. HP</label><br>
                        <input type="number" class="form-control" placeholder="Nomor telepon" id="telp_edit">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label><br>
                        <textarea class="form-control alamat" id="alamat_edit" rows="3" placeholder="Alamat lengkap"></textarea>
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
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Master Data Pasien</h5>
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
                        <h3 class="card-label">Master Data Pasien
                            <span class="d-block text-muted pt-2 font-size-sm">Manajemen Master Data Pasien</span></h3>
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
                            </span>Tambah Pasien</a>
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
    $('.goldar').select2();
    $('.agama').select2();
    $('.status_menikah').select2();
    $('.pekerjaan').select2();
    $('.negara').select2();
    $('.jk').select2();

    $('.btnTambah').click(function() {
        $(".form_add").trigger('reset');
        $('#modalTambah').modal();
    });

    $('.btnSave').click(function() {
        $('.preloader').fadeIn();
        if($('#nik_add').val()==''||$('#nama_add').val()==''||$('#nama_ibu_add').val()==''||$('#tempat_add').val()==''||$('#tgl_add').val()==''||$('#alamat_add').val()==''){
            $('.preloader').fadeOut();
            bootbox.alert({
                message: "Mohon lengkapi data",
                backdrop: true,
                size: 'small'
            });
        }else{
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('Master_pasien/add') ?>',
                dataType: 'json',
                data: {
                    nik: $('#nik_add').val(),
                    nama: $('#nama_add').val(),
                    nama_ibu: $('#nama_ibu_add').val(),
                    tempat: $('#tempat_add').val(),
                    tgl: $('#tgl_add').val(),
                    telp: $('#telp_add').val(),
                    alamat: $('#alamat_add').val(), 
                    email: $('#email_add').val(),
                    jk: $('#jk_add').val(),
                    goldar: $('#goldar_add').val(),
                    agama: $('#agama_add').val(),
                    menikah: $('#menikah_add').val(),
                    pekerjaan: $('#pekerjaan_add').val(),
                    negara: $('#negara_add').val()
                },
                success: function(data) {
                    $('.preloader').fadeOut();
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
        }
    });

    $('.btnUpdate').click(function() {
        $('.preloader').fadeIn();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Master_pasien/update') ?>',
            dataType: 'json',
            data: {
                nrm: $('#nrm_edit').val(),
                nik: $('#nik_edit').val(),
                nama: $('#nama_edit').val(),
                nama_ibu: $('#nama_ibu_edit').val(),
                tempat: $('#tempat_edit').val(),
                tgl: $('#tgl_edit').val(),
                telp: $('#telp_edit').val(),
                alamat: $('#alamat_edit').val(), 
                email: $('#email_edit').val(),
                jk: $('#jk_edit').val(),
                goldar: $('#goldar_edit').val(),
                agama: $('#agama_edit').val(),
                menikah: $('#menikah_edit').val(),
                pekerjaan: $('#pekerjaan_edit').val(),
                negara: $('#negara_edit').val()
            },
            success: function(data) {
                $('.preloader').fadeOut();
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

    $.ajax({
        type: 'GET',
        url: '<?php echo base_url('Dashboard/get_master_data') ?>',
        dataType: 'json',
        success: function(data) {
            let goldar = "";
            let agama = '';
            let status_menikah = '';
            let pekerjaan = '';
            let negara = '';

            for (let i = 0; i < data.goldar.length; i++) {
                goldar += "<option value=" + data.goldar[i].goldar_id + ">" + data.goldar[i].goldar + "</option>";
            }

            for (let i = 0; i < data.agama.length; i++) {
                agama += "<option value=" + data.agama[i].agama_id + ">" + data.agama[i].agama + "</option>";
            }

            for (let i = 0; i < data.status_menikah.length; i++) {
                status_menikah += "<option value=" + data.status_menikah[i].status_menikah_id + ">" + data.status_menikah[i].status_menikah + "</option>";
            }

            for (let i = 0; i < data.pekerjaan.length; i++) {
                pekerjaan += "<option value=" + data.pekerjaan[i].pekerjaan_id + ">" + data.pekerjaan[i].pekerjaan + "</option>";
            }

            for (let i = 0; i < data.negara.length; i++) {
                negara += "<option value=" + data.negara[i].negara_id + ">" + data.negara[i].negara_nama + "</option>";
            }

            $('.goldar').html(goldar);
            $('.agama').html(agama);
            $('.status_menikah').html(status_menikah);
            $('.pekerjaan').html(pekerjaan);
            $('.negara').html(negara);
        },
        error: function(xhr, desc, err) {
            console.log(xhr.responseText);
        }
    });

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
                            url: '<?php echo base_url('Master_pasien/get_list_pasien') ?>',
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
                    field: 'pasien_foto',
                    title: 'Foto',
                    width: 50,
                    template: function(row){
                        return '<img src="https://production.diskominfo.gianyarkab.go.id/apipayanganhospital/assets/images/profil_pasien/'+row.pasien_foto+'" width="30">'
                    }
                },{
                    field: 'pasien_nrm',
                    title: 'No Rekam Medis'
                }, {
                    field: 'pasien_nik',
                    title: 'NIK'
                }, {
                    field: 'pasien_nama',
                    title: 'Nama',
                }, {
                    field: 'pasien_telp',
                    title: 'No HP',
                }, {
                    field: 'pasien_alamat',
                    title: 'Alamat',
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
							    		<li class="nav-item"><a data-kode="' + row.pasien_nrm + '" class="nav-link btnDetail" href="#"><i class="nav-icon la la-eye"></i><span class="nav-text">Details</span></a></li>\
							    		<li class="nav-item"><a data-kode="' + row.pasien_nrm + '" class="nav-link btnReset" href="#"><i class="nav-icon la la-key"></i><span class="nav-text">Reset Password</span></a></li>\
									</ul>\
							  	</div>\
							</div>\
							<a href="javascript:;" data-kode="' + row.pasien_nrm + '" class="btn btn-sm btn-clean btn-icon btnEdit" title="Edit details">\
								<i class="la la-edit"></i>\
							</a>\
							<a href="javascript:;" data-kode="' + row.pasien_nrm + '" class="btn btn-sm btn-clean btn-icon btnDelete" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
						';
                    },
                }],

            });

            $(document).on("click", ".btnReset", function() {
                let kode = $(this).data("kode");
                bootbox.confirm({
                    title: "Reset password pasien?",
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
                                url: '<?php echo base_url('Master_pasien/reset_password') ?>',
                                data: {
                                    pasien_nrm: kode,
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
                    title: "Hapus pasien?",
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
                                url: '<?php echo base_url('Master_pasien/delete') ?>',
                                data: {
                                    pasien_nrm: kode,
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
                    url: '<?php echo base_url('Master_pasien/get_detail') ?>',
                    dataType: 'json',
                    data: {
                        pasien_nrm: kode
                    },
                    success: function(data) {
                        $('#modalEditTitle').html(data.pasien_nama);
                        $('#foto_edit').attr('src', 'https://production.diskominfo.gianyarkab.go.id/apipayanganhospital/assets/images/profil_pasien/'+data.pasien_foto);
                        $('#nrm_edit').val(data.pasien_nrm);
                        $('#nik_edit').val(data.pasien_nik);
                        $('#nama_edit').val(data.pasien_nama);
                        $('#nama_ibu_edit').val(data.pasien_nama_ibu);
                        $('#tempat_edit').val(data.pasien_tempat_lahir);
                        $('#tgl_edit').val(data.pasien_tanggal_lahir);
                        $('#telp_edit').val(data.pasien_telp);
                        $('#alamat_edit').text(data.pasien_alamat);
                        $('#email_edit').val(data.pasien_email);
                        $('#jk_edit').val(data.pasien_jk).trigger('change');
                        $('#goldar_edit').val(data.pasien_goldar_id).trigger('change');
                        $('#agama_edit').val(data.pasien_agama_id).trigger('change');
                        $('#menikah_edit').val(data.pasien_status_menikah_id).trigger('change');
                        $('#pekerjaan_edit').val(data.pasien_pekerjaan_id).trigger('change');
                        $('#negara_edit').val(data.pasien_negara_id).trigger('change');
                    },
                    error: function(xhr, desc, err) {
                        console.log(xhr.responseText);
                    }
                });

                $('#modalEdit').modal();
            });

            $(document).on("click", ".btnDetail", function() {
                let kode = $(this).data("kode");

                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('Master_pasien/get_detail') ?>',
                    dataType: 'json',
                    data: {
                        pasien_nrm: kode
                    },
                    success: function(data) {
                        $('#modalDetailTitle').html(data.pasien_nama);
                        $('#foto_detail').attr('src', 'https://production.diskominfo.gianyarkab.go.id/apipayanganhospital/assets/images/profil_pasien/'+data.pasien_foto);
                        $('#nrm_detail').val(data.pasien_nrm);
                        $('#nik_detail').val(data.pasien_nik);
                        $('#nama_detail').val(data.pasien_nama);
                        $('#nama_ibu_detail').val(data.pasien_nama_ibu);
                        $('#tempat_detail').val(data.pasien_tempat_lahir);
                        $('#tgl_detail').val(data.pasien_tanggal_lahir);
                        $('#telp_detail').val(data.pasien_telp);
                        $('#alamat_detail').text(data.pasien_alamat);
                        $('#email_detail').val(data.pasien_email);
                        $('#jk_detail').val(data.pasien_jk).trigger('change');
                        $('#goldar_detail').val(data.pasien_goldar_id).trigger('change');
                        $('#agama_detail').val(data.pasien_agama_id).trigger('change');
                        $('#menikah_detail').val(data.pasien_status_menikah_id).trigger('change');
                        $('#pekerjaan_detail').val(data.pasien_pekerjaan_id).trigger('change');
                        $('#negara_detail').val(data.pasien_negara_id).trigger('change');
                    },
                    error: function(xhr, desc, err) {
                        console.log(xhr.responseText);
                    }
                });

                $('#modalDetail').modal();
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