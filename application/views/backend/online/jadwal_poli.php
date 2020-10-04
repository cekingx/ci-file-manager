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
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Jadwal Pelayanan Poli</h5>
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
                        <h3 class="card-label">Jadwal Pelayanan Poli
                            <span class="d-block text-muted pt-2 font-size-sm">Data jadwal pelayanan poli dan detail antrian</span></h3>
                    </div>
                    <!-- <div class="card-toolbar">
                        <a href="#" class="btn btn-success font-weight-bolder btnTambah mr-3">
                            <span class="svg-icon svg-icon-md">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                            </span>Tambah Jadwal
                        </a>
                    </div> -->
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
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Tanggal:</label>
                                            <select class="form-control" id="kt_datatable_search_tanggal">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Unit/Poli:</label>
                                            <select class="form-control" id="kt_datatable_search_poli">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Dokter:</label>
                                            <select class="form-control" id="kt_datatable_search_dokter">
                                            </select>
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
        if ($('#nik_add').val() == '' || $('#nama_add').val() == '' || $('#nama_ibu_add').val() == '' || $('#tempat_add').val() == '' || $('#tgl_add').val() == '' || $('#alamat_add').val() == '') {
            $('.preloader').fadeOut();
            bootbox.alert({
                message: "Mohon lengkapi data",
                backdrop: true,
                size: 'small'
            });
        } else {
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

    var dataTanggal = <?php echo json_encode($tanggal) ?>;
    var dataPoli = <?php echo json_encode($poli) ?>;
    var dataDokter = <?php echo json_encode($dokter) ?>;

    let html = "<option value=''>Semua Tanggal</option>";
    for (let i = 0; i < dataTanggal.length; i++) {
        html += "<option value=" + dataTanggal[i].jadwal_poli_tanggal + ">" + moment(dataTanggal[i].jadwal_poli_tanggal).format('DD-MM-YYYY') + "</option>";
    }
    $('#kt_datatable_search_tanggal').html(html);

    let html2 = "<option value=''>Semua Unit/Poli</option>";
    for (let i = 0; i < dataPoli.length; i++) {
        html2 += "<option value='" + dataPoli[i].poli_nama + "'>" + dataPoli[i].poli_nama + "</option>";
    }
    $('#kt_datatable_search_poli').html(html2);

    let html3 = "<option value=''>Semua Dokter</option>";
    for (let i = 0; i < dataDokter.length; i++) {
        html3 += "<option value=" + dataDokter[i].nakes_kode + ">" + dataDokter[i].nakes_kode + " - " + dataDokter[i].nakes_nama + "</option>";
    }
    $('#kt_datatable_search_dokter').html(html3);

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
                            url: '<?php echo base_url('Jadwal_poli/get_list_jadwal_poli') ?>',
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
                    field: '',
                    title: 'Tanggal',
                    template: function(row) {
                        return (moment(row.jadwal_poli_tanggal).format('DD-MM-YYYY'));
                    },
                }, {
                    field: 'poli_nama',
                    title: 'Poli'
                }, {
                    field: 'nakes_kode',
                    title: 'Kode Dokter'
                }, {
                    field: 'nakes_nama',
                    title: 'Nama Dokter'
                }, {
                    field: 'total_antrian',
                    title: 'Total Antrian'
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
                        	<a href="javascript:;" data-id="' + row.jadwal_poli_id + '"  class="btn btn-sm btn-clean btn-icon btnDetail" title="Lihat Antrian">\
                        		<i class="la la-eye"></i>\
                            </a>\
                            <a href="javascript:;" data-id="' + row.jadwal_poli_id + '"  class="btn btn-sm btn-clean btn-icon btnVerif" title="Edit Jadwal">\
                        		<i class="la la-edit"></i>\
                        	</a>\
                        	<a href="javascript:;" data-id="' + row.jadwal_poli_id + '" class="btn btn-sm btn-clean btn-icon btnDelete" title="Hapus Jadwal">\
                        		<i class="la la-trash"></i>\
                        	</a>\
                        ';
                    },
                }],

            });

            $('#kt_datatable_search_tanggal').select2();
            $('#kt_datatable_search_poli').select2();
            $('#kt_datatable_search_dokter').select2();

            $('#kt_datatable_search_tanggal').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'jadwal_poli_tanggal');
            });

            $('#kt_datatable_search_poli').on('change', function() {
                datatable.search($(this).val(), 'poli_nama');
            });
            $('#kt_datatable_search_dokter').on('change', function() {
                datatable.search($(this).val(), 'nakes_kode');
            });

            $(document).on("click", ".btnVerif", function() {
                let id = $(this).data("id");
                let jk = $(this).data("jk");
                let poli = $(this).data("poli");
                bootbox.confirm({
                    title: "Update status antre?",
                    message: "Status antre akan berubah menjadi SUDAH DATANG dan dapat langsung menuju poli tujuan",
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
                                url: '<?php echo base_url('Online/update_registrasi') ?>',
                                data: {
                                    antri_poli_id: id,
                                    jk: jk,
                                    poli: poli
                                },
                                dataType: 'json',
                                success: function(data) {
                                    if (data) {
                                        bootbox.alert({
                                            message: "Update status berhasil",
                                            backdrop: true,
                                            size: 'small',
                                            callback: function() {
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
                let id = $(this).data("id");
                bootbox.confirm({
                    title: "Hapus antre?",
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
                                url: '<?php echo base_url('Online/delete_registrasi') ?>',
                                data: {
                                    antri_poli_id: id,
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