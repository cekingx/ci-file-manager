<?php

function parseDate($tanggal)
{
    $bulan = [
        '01' => 'Januari',
        '02' => 'Pebruari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'Nopember',
        '12' => 'Desember'
    ];

    $old = date($tanggal);
    $old_timestamp = strtotime($old);
    $new = date('H:i, d-m-Y', $old_timestamp);
    $exploded = explode('-', $new);
    $exploded[1] = $bulan[$exploded[1]];
    $new = implode(' ', $exploded);

    return $new;
}

function parseSize($size)
{
    if($size > 999) {
        $satuan = array('B', 'KB', 'MB', 'GB');
        $angka_terformat = number_format($size);
        $angka_exploded = explode(',', $angka_terformat);
        $bagian_ribuan = count($angka_exploded) - 1;
        $new_size = $size;
        foreach(range(1, $bagian_ribuan) as $range) {
            $new_size /= 1000;
        };
        $new_size = number_format($new_size, 1);
        return (string)$new_size . ' ' . $satuan[$bagian_ribuan];
    }

    return $size;
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Manajer Berkas</h3>
        </div>
        <div class="card-body">
            <div>
                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#uploadmodal">Upload</button>
            </div>
            <table class="table table-head-fixed">
                <thead>
                    <tr>
                        <th width="50%">Nama Berkas</th>
                        <th>Tipe</th>
                        <th>Ukuran</th>
                        <th>Tanggal Upload</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($user_files as $key => $user_file): ?>
                    <tr>
                        <td><a target="_blank" href="<?= base_url($user_file->file_manager_path . $this->session->userdata('user_nik') . '/' . $user_file->file_manager_nama) ?>"><?= $user_file->file_manager_nama ?></a></td>
                        <td><?= $user_file->file_manager_tipe ?></td>
                        <td><?= parseSize($user_file->file_manager_ukuran) ?></td>
                        <td><?= parseDate($user_file->file_manager_tanggal) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- modal-->
<div class="modal fade" id="uploadmodal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticbackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="examplemodallabel">Upload Lampiran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="dropzone dropzone-default dropzone-primary" id="kt_dropzone_2">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">Letakkan file yang akan di upload disini</h3>
                                    <span class="dropzone-msg-desc">Maks. 5 file sekali upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<script>
    var KTDropzonedemo = function () {
        // private functions
        var demo1 = function () {
            // multiple file upload
            $('#kt_dropzone_2').dropzone({
                url: "<?= base_url('file-manager/upload') ?>", // set the url for your upload script location
                paramname: "file", // the name that will be used to transfer the file
                maxfiles: 6,
                maxfilesize: 10, // mb
                addremovelinks: true,
                success: function (response) {
                    console.log(response);
                },
                completed: function (response) {
                    console.log(response);
                }
            });
        }

        return {
            // public functions
            init: function () {
                demo1();
            }
        };
    }();

    KTUtil.ready(function () {
        KTDropzonedemo.init();
    });
</script>