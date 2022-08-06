<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
include "include/cssDatatables.php";
?>
<?php
// CREATE DAFTAR BARANG
if (isset($_POST["SimpanDaftarBarang"])) {

    $CekInputKodeBarang = $_POST['InputKodeBarang'];
    $DataCekInputKodeBarang = $dbcon->query("SELECT KODE_BARANG FROM referensi_kode_barang WHERE KODE_BARANG='$CekInputKodeBarang'");
    $HasilCekInputKodeBarang = mysqli_fetch_array($DataCekInputKodeBarang);

    if ($HasilCekInputKodeBarang != NULL) {
        echo "<script>window.location.href='ref_daftar_barang.php?DataAlready=true';</script>";
    } else {
        $InputUraianBarang     = $_POST['InputUraianBarang'];
        $InputMerk             = $_POST['InputMerk'];
        $InputTipe             = $_POST['InputTipe'];
        $InputSpesifikasiLain  = $_POST['InputSpesifikasiLain'];
        $InputKodeBarang       = $_POST['InputKodeBarang'];

        $query = $dbcon->query("INSERT INTO referensi_kode_barang
                               (ID,NOHS,URAIAN_BARANG,MERK,TIPE,SPESIFIKASI_LAIN,KODE_BARANG,SERI,BARANG_KE)
                               VALUES
                               ('',NULL,'$InputUraianBarang','$InputMerk','$InputTipe','$InputSpesifikasiLain','$InputKodeBarang',NULL,NULL)");

        if ($query) {
            echo "<script>window.location.href='ref_daftar_barang.php?InputSuccess=true';</script>";
        } else {
            echo "<script>window.location.href='ref_daftar_barang.php?InputFailed=true';</script>";
        }
    }
}
// END CREATE DAFTAR BARANG

// DELETE DAFTAR BARANG
if (isset($_POST["NDeleteData"])) {

    $IDUNIQ             = $_POST['IDUNIQ'];

    $query = $dbcon->query("DELETE FROM referensi_kode_barang WHERE ID='$IDUNIQ'");

    if ($query) {
        echo "<script>window.location.href='ref_daftar_barang.php?DeleteSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='ref_daftar_barang.php?DeleteFailed=true';</script>";
    }
}
// END DELETE DAFTAR BARANG
// 
// FUNCTION SEARCHING
$fusername = '';
if (isset($_GET['findOne'])) {
    $fusername = $_GET['fusername'];
}

$fHakAkses = '';
if (isset($_GET['findTwo'])) {
    $fHakAkses = $_GET['fHakAkses'];
}

$startdate = '';
$enddate = '';
if (isset($_GET['findThree'])) {
    $startdate = $_GET['startdate'];
    $enddate = $_GET['enddate'];
}
// END FUNCTION SEARCHING

if (isset($_GET['findOne']) != '') {
    $displayOne = 'show';
    $displayTwo = 'none';
    $displayThree = 'none';

    $selectOne = 'selected';
    $selectTwo = '';
    $selectThree = '';
} else if (isset($_GET['findTwo']) != '') {
    $displayOne = 'none';
    $displayTwo = 'show';
    $displayThree = 'none';

    $selectOne = '';
    $selectTwo = 'selected';
    $selectThree = '';
} else if (isset($_GET['findThree']) != '') {
    $displayOne = 'none';
    $displayTwo = 'none';
    $displayThree = 'show';

    $selectOne = '';
    $selectTwo = '';
    $selectThree = 'selected';
} else {
    $displayOne = 'show';
    $displayTwo = 'none';
    $displayThree = 'none';

    $selectOne = 'selected';
    $selectTwo = '';
    $selectThree = '';
}

?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-book icon-page"></i>
                <font class="text-page">Referensi</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index_viewonline.php">View Data Online</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Referensi</a></li>
                <li class="breadcrumb-item active">Daftar Barang</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>

    <!-- begin Search -->
    <!-- <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-filter"></i> Filter User Manajemen Web - berdasarkan
                        <select type="text" id="findby" style="background: transparent;border-color: transparent;color:#fff;">
                            <option value="opone" style="color: #1d2226;" <?= $selectOne ?>>Username</option>
                            <option value="optwo" style="color: #1d2226;" <?= $selectTwo ?>>Hak Akses</option>
                            <option value="opthree" style="color: #1d2226;" <?= $selectThree ?>>Tanggal Created</option>
                        </select>
                    </h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <form action="" id="fformone" method="GET" style="display: <?= $displayOne ?>;">
                        <fieldset>
                            <div class="form-group row m-b-15">
                                <label class="col-md-3 col-form-label">Username</label>
                                <div class="col-md-7">
                                    <?php if ($fusername == '') { ?>
                                        <input type="text" class="form-control" name="fusername" placeholder="Username ...">
                                    <?php } else { ?>
                                        <input type="text" class="form-control" name="fusername" placeholder="Username ..." value="<?= $fusername; ?>">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <button type="submit" class="btn btn-sm btn-info m-r-5" name="findOne">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                    <a href="adm_user_manajemen_web.php" type="button" class="btn btn-sm btn-yellow m-r-5">
                                        <i class="fa fa-refresh"></i> Reset
                                    </a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformtwo" method="GET" style="display: <?= $displayTwo ?>;">
                        <fieldset>
                            <div class="form-group row m-b-15">
                                <label class="col-md-3 col-form-label">Hak Akses</label>
                                <div class="col-md-7">
                                    <select class="form-control" name="fHakAkses">
                                        <?php if ($fHakAkses == '') { ?>
                                            <option value="">-- Pilih Hak Akses --</option>
                                        <?php } else { ?>
                                            <option value="<?= $fHakAkses; ?>"><?= $fHakAkses; ?></option>
                                            <option value="">-- Pilih Hak Akses --</option>
                                        <?php } ?>
                                        <?php
                                        $findresultHakAkses = $dbcon->query("SELECT role FROM tbl_role ORDER BY role ASC");
                                        foreach ($findresultHakAkses as $findrowHakAkses) {
                                        ?>
                                            <option value="<?= $findrowHakAkses['role'] ?>"><?= $findrowHakAkses['role'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <button type="submit" class="btn btn-sm btn-info m-r-5" name="findTwo">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                    <a href="adm_user_manajemen_web.php" type="button" class="btn btn-sm btn-yellow m-r-5">
                                        <i class="fa fa-refresh"></i> Reset
                                    </a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformthree" class="form-inline" style="justify-content: center; display: <?= $displayThree ?>" method="GET">
                        <div class="form-group m-r-10">
                            <?php if ($startdate == '') { ?>
                                <input type="date" name="startdate" class="form-control" required>
                            <?php } else { ?>
                                <input type="date" name="startdate" class="form-control" value="<?= $startdate ?>">
                            <?php } ?>
                        </div>
                        <div class="form-check m-r-10">
                            <label class="form-check-label" for="inline_form_checkbox">s/d</label>
                        </div>
                        <div class="form-group m-r-10">
                            <?php if ($enddate == '') { ?>
                                <input type="date" name="enddate" class="form-control" required>
                            <?php } else { ?>
                                <input type="date" name="enddate" class="form-control" value="<?= $enddate ?>">
                            <?php } ?>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info m-r-5" name="findThree"><i class="fa fa-search"></i> Cari</button>
                        <a href="adm_user_manajemen_web.php" type="button" class="btn btn-sm btn-yellow"><i class="fa fa-refresh"></i> Reset</a>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Search -->

    <!-- Begin Tambah Daftar Barang -->
    <!-- <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title">[Tambah Data] Daftar Barang</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <form action="" id="myFormDaftarBarang" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Uraian Barang <font style="color: red;">*</font></label>
                                        <textarea type="text" class="form-control" name="InputUraianBarang" id="idUraianBarang" placeholder="Uraian Barang ..." required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Merk <font style="color: red;">*</font></label>
                                        <input type="text" class="form-control" name="InputMerk" id="idMerk" placeholder="Merk ..." required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tipe <font style="color: red;">*</font></label>
                                        <input type="text" class="form-control" name="InputTipe" id="idTipe" placeholder="Tipe ..." required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Spesifikasi Lain</label>
                                        <input type="text" class="form-control" name="InputSpesifikasiLain" id="idSpesifikasiLain" placeholder="Spesifikasi Lain ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Kode Barang <font style="color: red;">*</font></label>
                                        <input type="text" class="form-control" name="InputKodeBarang" id="idKodeBarang" placeholder="Kode Barang ..." required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <font style="color: red;">*</font> <i>Wajib diisi.</i>
                                </div>
                                <hr>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-primary" name="SimpanDaftarBarang"><i class="fa fa-save"></i> Simpan</button>
                                        <button type="button" class="btn btn-sm btn-yellow" onclick="myFunctionIDDaftarBarang()"><i class="fa fa-refresh"></i> Reset</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Tambah Daftar Barang -->

    <!-- begin row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-daftar-barang">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> [Referensi] Daftar Barang</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <div class="table-responsive">
                        <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th class="text-nowrap" style="text-align: center;">No. HS</th>
                                    <th class="text-nowrap" style="text-align: center;">Uraian Barang</th>
                                    <th class="text-nowrap" style="text-align: center;">Merk</th>
                                    <th class="text-nowrap" style="text-align: center;">Tipe</th>
                                    <th class="text-nowrap" style="text-align: center;">Spesifikasi Lain</th>
                                    <th class="text-nowrap" style="text-align: center;">Kode Barang</th>
                                    <!-- <th class="text-nowrap">Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $dataTable = $dbcon->query("SELECT * FROM referensi_kode_barang ORDER BY ID DESC");
                                if (mysqli_num_rows($dataTable) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($dataTable)) {
                                        $no++;
                                ?>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                            <td style="text-align: center;">
                                                <?php if ($row['NOHS'] == NULL || $row['NOHS'] == '') { ?>
                                                    <font style="font-size: 8px;font-weight: 600;color: red"><i>Belum memiliki Tarif HS</i></font>
                                                <?php } else { ?>
                                                    <?= $row['NOHS'] ?>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: left;">
                                                <?php if ($row['URAIAN_BARANG'] == NULL || $row['URAIAN_BARANG'] == '') { ?>
                                                    <font style="font-size: 8px;font-weight: 600;color: red"><i>Tidak Diisi!</i></font>
                                                <?php } else { ?>
                                                    <?= $row['URAIAN_BARANG'] ?>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: left;">
                                                <?php if ($row['MERK'] == NULL || $row['MERK'] == '') { ?>
                                                    <font style="font-size: 8px;font-weight: 600;color: red"><i>Tidak Diisi!</i></font>
                                                <?php } else { ?>
                                                    <?= $row['MERK'] ?>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: left;">
                                                <?php if ($row['TIPE'] == NULL || $row['TIPE'] == '') { ?>
                                                    <font style="font-size: 8px;font-weight: 600;color: red"><i>Tidak Diisi!</i></font>
                                                <?php } else { ?>
                                                    <?= $row['TIPE'] ?>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: left;">
                                                <?php if ($row['SPESIFIKASI_LAIN'] == NULL || $row['SPESIFIKASI_LAIN'] == '') { ?>
                                                    <font style="font-size: 8px;font-weight: 600;color: red"><i>Tidak Diisi!</i></font>
                                                <?php } else { ?>
                                                    <?= $row['SPESIFIKASI_LAIN'] ?>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php if ($row['KODE_BARANG'] == NULL || $row['KODE_BARANG'] == '') { ?>
                                                    <font style="font-size: 8px;font-weight: 600;color: red"><i>Tidak Diisi!</i></font>
                                                <?php } else { ?>
                                                    <?= $row['KODE_BARANG'] ?>
                                                <?php } ?>
                                            </td>
                                            <!-- <td>
                                                <a href="#updateData<?= $row['ID'] ?>" class="btn btn-sm btn-warning" data-toggle="modal" title="Update Data"><i class="fas fa-edit"></i></a>
                                                <a href="#deleteData<?= $row['ID'] ?>" class="btn btn-sm btn-danger" data-toggle="modal" title="Hapus Data"><i class="fas fa-trash"></i></a>
                                            </td> -->
                                        </tr>
                                        <!-- Update Data -->
                                        <div class="modal fade" id="updateData<?= $row['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Update Data] Daftar Barang - <?= $row['ID'] ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div style="margin-bottom: 10px;">
                                                                            <font style="font-size: 20px;font-weight: 700;"><i class="fas fa-user-check"></i> Sign In Detail</font>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDUsername">Username</label>
                                                                            <input type="text" class="form-control" name="username" id="IDUsername" placeholder="Username ..." value="<?= $row['username'] ?>" readonly />
                                                                            <input type="hidden" name="IDUNIQ" value="<?= $row['USRIDUNIQ'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDPassword">Password</label>
                                                                            <input type="password" class="form-control" id="IDPassword" placeholder="Password ..." value="<?= $row['PASSWORD'] ?>" readonly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div style="margin-bottom: 10px;">
                                                                            <font style="font-size: 20px;font-weight: 700;"><i class="fas fa-user-cog"></i> Hak Akses</font>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDRole">Hak Akses</label>
                                                                            <select type="text" class="form-control" name="HakAkses" id="IDRole" required>
                                                                                <option value="<?= $row['role'] ?>"><?= $row['role'] ?></option>
                                                                                <option value="">-- Pilih Hak Akses --</option>
                                                                                <?php
                                                                                $resultHakAkses = $dbcon->query("SELECT role FROM tbl_role ORDER BY role ASC");
                                                                                foreach ($resultHakAkses as $rowHakAkses) {
                                                                                ?>
                                                                                    <option value="<?= $rowHakAkses['role'] ?>"><?= $rowHakAkses['role'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="col-md-3 col-form-label">Privileges</label>
                                                                        <!-- INSERT_DATA,UPDATE_DATA,DELETE_DATA,KIRIM_DATA,UPDATE_PASSWORD -->
                                                                        <div class="col-md-9">
                                                                            <div class="form-check form-check-inline">
                                                                                <?php if ($row['INSERT_DATA'] == 'Y') { ?>
                                                                                    <?php $insert_checked = 'checked'; ?>
                                                                                <?php } else if ($row['INSERT_DATA'] == 'N') { ?>
                                                                                    <?php $insert_checked = ''; ?>
                                                                                <?php } ?>
                                                                                <input type="checkbox" name="able_add" value="Y" id="checkbox-inline-c-1" class="form-check-input" <?= $insert_checked; ?> />
                                                                                <label class="form-check-label" for="checkbox-inline-c-1">Insert Data</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <?php if ($row['UPDATE_DATA'] == 'Y') { ?>
                                                                                    <?php $update_checked = 'checked'; ?>
                                                                                <?php } else if ($row['UPDATE_DATA'] == 'N') { ?>
                                                                                    <?php $update_checked = ''; ?>
                                                                                <?php } ?>
                                                                                <input type="checkbox" name="able_edit" value="Y" id="checkbox-inline-c-2" class="form-check-input" <?= $update_checked; ?> />
                                                                                <label class="form-check-label" for="checkbox-inline-c-2">Update Data</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <?php if ($row['DELETE_DATA'] == 'Y') { ?>
                                                                                    <?php $delete_checked = 'checked'; ?>
                                                                                <?php } else if ($row['DELETE_DATA'] == 'N') { ?>
                                                                                    <?php $delete_checked = ''; ?>
                                                                                <?php } ?>
                                                                                <input type="checkbox" name="able_delete" value="Y" id="checkbox-inline-c-3" class="form-check-input" <?= $delete_checked; ?> />
                                                                                <label class="form-check-label" for="checkbox-inline-c-3">Hapus Data</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <?php if ($row['KIRIM_DATA'] == 'Y') { ?>
                                                                                    <?php $send_checked = 'checked'; ?>
                                                                                <?php } else if ($row['KIRIM_DATA'] == 'N') { ?>
                                                                                    <?php $send_checked = ''; ?>
                                                                                <?php } ?>
                                                                                <input type="checkbox" name="able_send" value="Y" id="checkbox-inline-c-4" class="form-check-input" <?= $send_checked; ?> />
                                                                                <label class="form-check-label" for="checkbox-inline-c-4">Kirim Data</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="checkbox checkbox-css m-b-20">
                                                                            <?php if ($row['UPDATE_PASSWORD'] == 'Y') { ?>
                                                                                <?php $pass_checked = 'checked'; ?>
                                                                            <?php } else if ($row['UPDATE_PASSWORD'] == 'N') { ?>
                                                                                <?php $pass_checked = ''; ?>
                                                                            <?php } ?>
                                                                            <input type="checkbox" id="nf_checkbox_css_c_1" name="able_password" value="Y" <?= $pass_checked; ?> />
                                                                            <label for="nf_checkbox_css_c_1">Klik jika User dapat melakukan update password secara mandiri.</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                                            <button type="submit" name="NUpdateData" class="btn btn-warning"><i class="fas fa-edit"></i> Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Update Data -->

                                        <!-- Delete Data -->
                                        <div class="modal fade" id="deleteData<?= $row['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Hapus Data] Daftar Barang - <?= $row['ID'] ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="alert alert-danger m-b-0">
                                                                <h5><i class="fa fa-info-circle"></i> Anda yakin akan menghapus data ini?</h5>
                                                                <p>Anda tidak akan melihat data ini lagi, data akan di hapus secara permanen pada sistem informasi TPB!<br><i>"Silahkan klik <b>Ya</b> untuk melanjutkan proses penghapusan data."</i></p>
                                                                <input type="hidden" name="IDUNIQ" value="<?= $row['ID'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tidak</button>
                                                            <button type="submit" class="btn btn-danger" name="NDeleteData"><i class="fas fa-check-circle"></i> Ya</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Delete Data -->
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="7">
                                            <center>
                                                <div style="display: grid;">
                                                    <i class="far fa-times-circle no-data"></i> Tidak ada data
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                <?php }
                                mysqli_close($dbcon); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>
<?php include "include/jsDatatables.php"; ?>

<script type="text/javascript">
    // <!-- Reset Form -->
    function myFunctionIDDaftarBarang() {
        document.getElementById("myFormDaftarBarang").reset();
    }
    // <!-- End Reset Form -->

    // DATA ALREADY
    if (window?.location?.href?.indexOf('DataAlready') > -1) {
        Swal.fire({
            title: 'Kode Barang sudah terdaftar!',
            icon: 'info',
            text: 'Kode Barang sudah terdaftar disistem, Kode Barang harus bersifat uniq atau tidak boleh sama!'
        })
        history.replaceState({}, '', './ref_daftar_barang.php');
    }

    // INSERT SUCCESS
    if (window?.location?.href?.indexOf('InputSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil disimpan!',
            icon: 'success',
            text: 'Data berhasil disimpan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './ref_daftar_barang.php');
    }
    // INSERT FAILED
    if (window?.location?.href?.indexOf('InputFailed') > -1) {
        Swal.fire({
            title: 'Data gagal disimpan!',
            icon: 'error',
            text: 'Data gagal disimpan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './ref_daftar_barang.php');
    }

    // DELETE SUCCESS
    if (window?.location?.href?.indexOf('DeleteSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil dihapus!',
            icon: 'success',
            text: 'Data berhasil dihapus didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './ref_daftar_barang.php');
    }
    // DELETE FAILED
    if (window?.location?.href?.indexOf('DeleteFailed') > -1) {
        Swal.fire({
            title: 'Data gagal dihapus!',
            icon: 'error',
            text: 'Data gagal dihapus didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './ref_daftar_barang.php');
    }
</script>

<script type="text/javascript">
    $(function() {
        $("#findby").change(function() {
            if ($(this).val() == "opone") {
                $("#fformone").show();
                $("#fformtwo").hide();
                $("#fformthree").hide();
            } else if ($(this).val() == "optwo") {
                $("#fformtwo").show();
                $("#fformone").hide();
                $("#fformthree").hide();
            } else if ($(this).val() == "opthree") {
                $("#fformthree").show();
                $("#fformone").hide();
                $("#fformtwo").hide();
            } else {
                $("#fformone").hide();
                $("#fformtwo").hide();
                $("#fformthree").hide();
            }
        });
    });
</script>