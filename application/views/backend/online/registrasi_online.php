<title><?php echo $title; ?></title>

<div class="modal" id="modalTambahPasien" tabindex="-1" role="dialog" aria-labelledby="modalTambahPasienTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahPasienTitle">Tambah Pasien</h5>
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

<div class="modal" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
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

<div class="modal" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
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

<div class="modal" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambah"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form">
                    <div class="card-body pt-0 pb-0">

                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label>Cari Pasien</label><br>
                                <select class="form-control" id="searchPasien" style="width:100%;">
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <!-- <label></label><br><br> -->
                                <button type="button" class="btn btn-primary btnTambahPasien" style="position: absolute;bottom:0px;">Tambah Pasien Baru</button>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label>Cari Jadwal</label><br>
                                <select class="form-control" id="searchJadwal" style="width:100%;">
                                </select>
                            </div>


                        </div>

                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label>No. Rekam Medis</label><br>
                                <input type="number" class="form-control" id="nrm_regis" placeholder="Nomor Rekam Medis" disabled>
                            </div>
                            <div class="col-lg-3">
                                <label>NIK</label><br>
                                <input type="number" class="form-control" id="nik_regis" placeholder="NIK Pasien" disabled>
                            </div>
                            <div class="col-lg-3">
                                <label>Nama</label><br>
                                <input type="text" class="form-control" id="nama_regis" placeholder="Nama Lengkap" disabled>
                            </div>
                            <div class="col-lg-3">
                                <label>Email</label><br>
                                <input type="text" class="form-control" id="email_regis" placeholder="Email" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label>Telp</label><br>
                                <input type="text" class="form-control" id="telp_regis" placeholder="Nomor telepon" disabled>
                            </div>
                            <div class="col-lg-3">
                                <label>Tempat Lahir</label><br>
                                <input type="text" class="form-control" id="tempat_lahir_regis" placeholder="NIK Pasien" disabled>
                            </div>
                            <div class="col-lg-3">
                                <label>Tanggal Lahir</label><br>
                                <input type="text" class="form-control" id="tanggal_lahir_regis" placeholder="Nama Lengkap" disabled>
                            </div>
                            <div class="col-lg-3">
                                <label>Alamat</label><br>
                                <textarea class="form-control alamat" id="alamat_regis" rows="3" placeholder="Alamat lengkap" disabled></textarea>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnSaveTambah">Simpan</button>
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
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Registrasi Antre Online</h5>
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
                        <h3 class="card-label">Registrasi Antre Online
                            <span class="d-block text-muted pt-2 font-size-sm">Merubah status antre menjadi sudah datang</span></h3>
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
                            </span>Tambah Antrean</a>
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
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Unit/Poli:</label>
                                            <select class="form-control" id="kt_datatable_search_poli">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Tanggal:</label>
                                            <select class="form-control" id="kt_datatable_search_tanggal">
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

    $('.btnTambahPasien').click(function() {
        $(".form_add").trigger('reset');
        $('#modalTambah').modal('hide');

        $('#modalTambahPasien').modal();
    });

    $('.btnTambah').click(function() {
        $(".form_add").trigger('reset');
        $('#modalTambah').modal();
    });

    $('#searchPasien').select2({
        allowClear: true,
        placeholder: 'Cari pasien',
        tags: false,
        ajax: {
            dataType: 'json',
            url: '<?php echo base_url('Online/searchPasien') ?>',
            delay: 300,
            data: function(params) {
                return {
                    param: params.term
                }
            },
            processResults: function(data, page) {
                var result = [];
                $.each(data, function(index, item) {
                    result.push({
                        id: item.pasien_nrm,
                        text: item.pasien_nrm + " - " + item.pasien_nik + " - " + item.pasien_nama
                    });
                });
                return {
                    results: result
                };
            },
            cache: true
        }
    });

    $('#searchJadwal').select2({
        allowClear: true,
        placeholder: 'Cari jadwal pelayanan poli',
        tags: false,
        ajax: {
            dataType: 'json',
            url: '<?php echo base_url('Online/searchJadwal') ?>',
            delay: 300,
            data: function(params) {
                return {
                    param: params.term
                }
            },
            processResults: function(data, page) {
                var result = [];
                $.each(data, function(index, item) {
                    result.push({
                        id: item.jadwal_poli_id,
                        text: item.poli_nama + " - " + item.jadwal_poli_tanggal + " - " + item.nakes_nama
                    });
                });
                return {
                    results: result
                };
            },
            cache: true
        }
    });


    $('#searchPasien').on('change', function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Online/getDetailPasien') ?>',
            data: {
                pasien_nrm: $(this).val(),
            },
            dataType: 'json',
            success: function(data) {
                if (data) {
                    $('#nrm_regis').val(data.pasien_nrm);
                    $('#nik_regis').val(data.pasien_nik);
                    $('#nama_regis').val(data.pasien_nama);
                    $('#email_regis').val(data.pasien_email);
                    $('#telp_regis').val(data.pasien_telp);
                    $('#tempat_lahir_regis').val(data.pasien_tempat_lahir);
                    $('#tanggal_lahir_regis').val(moment(data.pasien_tanggal_lahir).format('DD-MM-YYYY'));
                    $('#alamat_regis').val(data.pasien_alamat);
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

    });

    $('.btnSaveTambah').click(function() {
        // $('.preloader').fadeIn();
        if ($('#searchPasien').val() == '' || $('#searchJadwal').val() == '') {
            $('.preloader').fadeOut();
            bootbox.alert({
                message: "Mohon lengkapi data",
                backdrop: true,
                size: 'small'
            });
        } else {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('Online/tambahAntrean') ?>',
                dataType: 'json',
                data: {
                    pasien_nrm: $('#searchPasien').val(),
                    jadwal_poli_id: $('#searchJadwal').val()
                },
                success: function(data) {
                    $('.preloader').fadeOut();
                    if (data.flag == "1") {
                        bootbox.alert({
                            message: "Nomor Antrian Anda: " + data.antrian_nomor + ". Antrian di depan:" + data.antrian_didepan,
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
                                $('#modalTambahPasien').modal('hide');
                                $('#modalTambah').modal();
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

    let html = "<option value=''>Semua Tanggal</option>";
    for (let i = 0; i < dataTanggal.length; i++) {
        html += "<option value=" + dataTanggal[i].jadwal_poli_tanggal + ">" + dataTanggal[i].jadwal_poli_tanggal + "</option>";
    }
    $('#kt_datatable_search_tanggal').html(html);

    let html2 = "<option value=''>Semua Unit/Poli</option>";
    for (let i = 0; i < dataPoli.length; i++) {
        html2 += "<option value=" + dataPoli[i].poli_id + ">" + dataPoli[i].poli_nama + "</option>";
    }
    $('#kt_datatable_search_poli').html(html2);

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
                            url: '<?php echo base_url('Online/get_list_registrasi_antre') ?>',
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
                    field: 'pasien_foto',
                    title: 'Foto',
                    width: 50,
                    template: function(row) {
                        return '<img src="https://production.diskominfo.gianyarkab.go.id/apipayanganhospital/assets/images/profil_pasien/' + row.pasien_foto + '" width="30">'
                    }
                }, {
                    field: 'pasien_nrm',
                    title: 'No Rekam Medis'
                }, {
                    field: 'pasien_nik',
                    title: 'NIK'
                }, {
                    field: 'pasien_nama',
                    title: 'Nama',
                }, {
                    field: 'poli_nama',
                    title: 'Unit/Poli',
                }, {
                    field: 'jadwal_poli_tanggal',
                    title: 'Tanggal',
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
							<a href="javascript:;" data-id="' + row.antri_poli_id + '" data-jk="' + row.pasien_jk + '" data-poli="' + row.poli_id + '" class="btn btn-sm btn-clean btn-icon btnVerif" title="Update Status">\
								<i class="la la-check"></i>\
							</a>\
							<a href="javascript:;" data-id="' + row.antri_poli_id + '" class="btn btn-sm btn-clean btn-icon btnDelete" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
						';
                    },
                }],

            });

            $('#kt_datatable_search_tanggal').select2();
            $('#kt_datatable_search_poli').select2();

            $('#kt_datatable_search_tanggal').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'jadwal_poli_tanggal');
            });

            $('#kt_datatable_search_poli').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'poli_id');
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