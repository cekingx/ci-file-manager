<title><?php echo $title; ?></title>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_add">
                    <div class="card-body">
                        <input type="hidden" class="form-control profesi_id">
                        <div class="form-group">
                            <label>Profesi</label><br>
                            <input type="text" class="form-control profesi" placeholder="Profesi">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnSave">Simpan</button>
                <button type="button" class="btn btn-primary btnUpdate" style="display:none;">Update</button>
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
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Master Data Profesi</h5>
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
                        <h3 class="card-label">Master Data Profesi
                            <span class="d-block text-muted pt-2 font-size-sm">Manajemen Master Data Profesi</span></h3>
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
                            </span>Tambah Profesi</a>
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
    $('.btnTambah').click(function() {
        $(".form_add").trigger('reset');
        $('#modalTambahTitle').html('Tambah Profesi');
        $('.btnUpdate').fadeOut(1);
        $('.btnSave').fadeIn(1);
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
            url: '<?php echo base_url('Master_profesi/add') ?>',
            dataType: 'json',
            data: {
                profesi: $('.profesi').val(),
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
            url: '<?php echo base_url('Master_profesi/update') ?>',
            dataType: 'json',
            data: {
                profesi_id: $('.profesi_id').val(),
                profesi: $('.profesi').val(),
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
                            url: '<?php echo base_url('Master_profesi/get_list_profesi') ?>',
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
                    field: 'profesi',
                    title: 'Profesi'
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
							<a href="javascript:;" data-id="' + row.profesi_id + '" data-nama="' + row.profesi + '" class="btn btn-sm btn-clean btn-icon btnEdit" title="Edit details">\
								<i class="la la-edit"></i>\
							</a>\
							<a href="javascript:;" data-id="' + row.profesi_id + '" class="btn btn-sm btn-clean btn-icon btnDelete" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
						';
                    },
                }],

            });

            $(document).on("click", ".btnDelete", function() {
                let id = $(this).data("id");
                bootbox.confirm({
                    title: "Hapus Profesi?",
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
                                url: '<?php echo base_url('Master_profesi/delete') ?>',
                                data: {
                                    profesi_id: id,
                                },
                                dataType: 'json',
                                success: function(data) {
                                    if (data) {
                                        bootbox.alert({
                                            message: "Profesi berhasil dihapus",
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

            $(document).on("click", ".btnEdit", function() {

                let id = $(this).data("id");
                let nama = $(this).data("nama");
                $('.btnSave').fadeOut(1);
                $('.btnUpdate').fadeIn(1);

                $('#modalTambahTitle').html('Update Profesi');
                $('.profesi_id').val(id);
                $('.profesi').val(nama);

                $('#modalTambah').modal();
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