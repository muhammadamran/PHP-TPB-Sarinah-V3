<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/top-sidebar.php";
include "include/cssDatatables.php";
// include "include/sidebar.php";

$NoPengajuan = '';
$TanggalInputOne = '';
$TanggalInputTwo = '';
$NoBC27 = '';
$TanggalBC27One = '';
$TanggalBC27Two = '';
$Supplier = '';
$AlamatSupplier = '';
$KodeNegara = '';
$NamaNegara = '';
$Party = '';
$NoContainer = '';
$MataUang = '';
$TanggalMasukBarangOne = '';
$TanggalMasukBarangTwo = '';
$TanggalKeluarBarangOne = '';
$TanggalKeluarBarangTwo = '';
if (isset($_POST["findOne"])) {

    if ($_POST["NoPengajuan"] != '') {
        $NoPengajuan = $_POST['NoPengajuan'];
    }

    if ($_POST["TanggalInputOne"] != '') {
        $TanggalInputOne = $_POST['TanggalInputOne'];
    }

    if ($_POST["TanggalInputTwo"] != '') {
        $TanggalInputTwo = $_POST['TanggalInputTwo'];
    }

    if ($_POST["NoBC27"] != '') {
        $NoBC27 = $_POST['NoBC27'];
    }

    if ($_POST["TanggalBC27One"] != '') {
        $TanggalBC27One = $_POST['TanggalBC27One'];
    }

    if ($_POST["TanggalBC27Two"] != '') {
        $TanggalBC27Two = $_POST['TanggalBC27Two'];
    }

    if ($_POST["Supplier"] != '') {
        $Supplier = $_POST['Supplier'];
    }

    if ($_POST["AlamatSupplier"] != '') {
        $AlamatSupplier = $_POST['AlamatSupplier'];
    }

    if ($_POST["KodeNegara"] != '') {
        $KodeNegara = $_POST['KodeNegara'];
    }

    if ($_POST["NamaNegara"] != '') {
        $NamaNegara = $_POST['NamaNegara'];
    }

    if ($_POST["Party"] != '') {
        $Party = $_POST['Party'];
    }

    if ($_POST["NoContainer"] != '') {
        $NoContainer = $_POST['NoContainer'];
    }

    if ($_POST["MataUang"] != '') {
        $MataUang = $_POST['MataUang'];
    }

    if ($_POST["TanggalMasukBarangOne"] != '') {
        $TanggalMasukBarangOne = $_POST['TanggalMasukBarangOne'];
    }

    if ($_POST["TanggalMasukBarangTwo"] != '') {
        $TanggalMasukBarangTwo = $_POST['TanggalMasukBarangTwo'];
    }

    if ($_POST["TanggalKeluarBarangOne"] != '') {
        $TanggalKeluarBarangOne = $_POST['TanggalKeluarBarangOne'];
    }

    if ($_POST["TanggalKeluarBarangTwo"] != '') {
        $TanggalKeluarBarangTwo = $_POST['TanggalKeluarBarangTwo'];
    }
}

?>
<!-- begin #content -->
<div id="content" class="nav-top-content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-desktop icon-page"></i>
                <font class="text-page">Data TPB / Sarinah</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Index</a></li>
                <li class="breadcrumb-item"><a href="index_report.php">Report</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Data TPB</a></li>
                <li class="breadcrumb-item active">Sarinah Records</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- begin row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-filter"></i> Filter Data TPB Sarinah</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <form action="" id="fformone" method="POST">
                        <fieldset>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">No. Pengajuan PLB</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="NoPengajuan" placeholder="No. Pengajuan PLB ..." value="<?= $NoPengajuan ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Tanggal Input PLB</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="TanggalInputOne" placeholder="Tanggal Input PLB ..." value="<?= $TanggalInputOne ?>">
                                </div>
                                <div class="col-md-1" style="display: flex;justify-content: center;">
                                    <font>s.d</font>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="TanggalInputTwo" placeholder="Tanggal Input PLB ..." value="<?= $TanggalInputTwo ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">No. BC.27 PLB</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="NoBC27" placeholder="No. BC.27 PLB ..." value="<?= $NoBC27 ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Tanggal BC.27 PLB</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="TanggalBC27One" placeholder="Tanggal BC.27 PLB ..." value="<?= $TanggalBC27One ?>">
                                </div>
                                <div class="col-md-1" style="display: flex;justify-content: center;">
                                    <font>s.d</font>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="TanggalBC27Two" placeholder="Tanggal BC.27 PLB ..." value="<?= $TanggalBC27Two ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Supplier</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="Supplier" placeholder="Supplier ..." value="<?= $Supplier ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Alamat Supplier</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="AlamatSupplier" placeholder="Alamat Supplier ..." value="<?= $AlamatSupplier ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Kode Negara / Nama Negara Supplier</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="KodeNegara" placeholder="Kode Negara ..." value="<?= $KodeNegara ?>">
                                </div>
                                <div class="col-md-1" style="display: flex;justify-content: center;">
                                    <font>/</font>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="NamaNegara" placeholder="Nama Negara ..." value="<?= $NamaNegara ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Party</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="Party" placeholder="Party ..." value="<?= $Party ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">No. Container</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="NoContainer" placeholder="No. Container ..." value="<?= $NoContainer ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Mata Uang</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="MataUang" placeholder="No. Container ..." value="<?= $MataUang ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Tanggal Masuk Barang</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="TanggalMasukBarangOne" placeholder="Tanggal Masuk Barang ..." value="<?= $TanggalMasukBarangOne ?>">
                                </div>
                                <div class="col-md-1" style="display: flex;justify-content: center;">
                                    <font>s.d</font>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="TanggalMasukBarangTwo" placeholder="Tanggal Masuk Barang ..." value="<?= $TanggalMasukBarangTwo ?>">
                                </div>
                            </div>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Tanggal Keluar Barang</label>
                                <div class="col-md-2">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="TanggalKeluarBarangOne" placeholder="Tanggal Keluar Barang ..." value="<?= $TanggalKeluarBarangOne ?>">
                                </div>
                                <div class="col-md-1" style="display: flex;justify-content: center;">
                                    <font>s.d</font>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="TanggalKeluarBarangTwo" placeholder="Tanggal Keluar Barang ..." value="<?= $TanggalKeluarBarangTwo ?>">
                                </div>
                            </div>
                            <div class="form-group row" style="justify-content: flex-end;">
                                <div class="col-md-7 offset-md-3">
                                    <button type="submit" class="btn btn-info m-r-5" name="findOne">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                    <a href="report_data_tpb.php" type="button" class="btn btn-yellow m-r-5">
                                        <i class="fa fa-refresh"></i> Reset
                                    </a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> Data TPB - Sarinah / Master Data</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <div class="table-responsive">
                        <table id="TableDataTPB" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th colspan="4" style="text-align:center">BC.27 PLB</th>
                                    <th colspan="4" style="text-align:center">BC.27 Sarinah</th>
                                    <th rowspan="2" style="text-align:center">KD / Negara</th>
                                    <th rowspan="2" style="text-align:center">Supplier</th>
                                    <th rowspan="2" style="text-align:center">Jumlah Barang</th>
                                    <th rowspan="2" style="text-align:center">Party</th>
                                    <th rowspan="2" style="text-align:center">Valas</th>
                                    <th rowspan="2" style="text-align:center">Nilai Total</th>
                                    <th colspan="3" style="text-align:center">Tujuan</th>
                                    <th rowspan="2" style="text-align:center">Tanggal Masuk Barang</th>
                                    <th rowspan="2" style="text-align:center">Tanggal Keluar Barang</th>
                                    <?php if (isset($_POST["findOne"])) { ?>
                                        <th rowspan="2" style="text-align:center">Cont. Details</th>
                                    <?php } else { ?>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <!-- PLB -->
                                    <th style="text-align:center">No. Pengajuan</th>
                                    <th style="text-align:center">Tanggal Input</th>
                                    <th style="text-align:center">No. Daftar</th>
                                    <th style="text-align:center">Tanggal Daftar</th>
                                    <!-- Sarinah -->
                                    <th style="text-align:center">No. AJU</th>
                                    <th style="text-align:center">Tanggal Input</th>
                                    <th style="text-align:center">No. Daftar</th>
                                    <th style="text-align:center">Tanggal Daftar</th>
                                    <!-- Tujuan -->
                                    <th rowspan="2" style="text-align:center">NPWP</th>
                                    <th rowspan="2" style="text-align:center">Nama</th>
                                    <th rowspan="2" style="text-align:center">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // if (isset($_POST["findOne"])) {
                                //     $result2 = mysqli_query($dbcon, "SELECT a.*,ngr.URAIAN_NEGARA
                                //                                      FROM tpb_header AS a
                                //                                      LEFT OUTER JOIN referensi_negara AS ngr ON a.KODE_NEGARA_PEMASOK=ngr.KODE_NEGARA
                                //                                      WHERE a.NOMOR_AJU LIKE '%$NoPengajuan%' 
                                //                                      AND a.TANGGAL_AJU BETWEEN $TanggalInputOne AND $TanggalInputTwo
                                //                                      AND a.NOMOR_BC11 LIKE '%$NoBC27%'
                                //                                      AND a.TANGGAL_BC11 BETWEEN $TanggalBC27One AND $TanggalBC27Two
                                //                                      AND a.NAMA_PEMASOK LIKE '%$Supplier%'
                                //                                      AND a.ALAMAT_PEMASOK LIKE '%$AlamatSupplier%'
                                //                                      AND a.KODE_NEGARA_PEMASOK LIKE '%$KodeNegara%'
                                //                                      AND ngr.URAIAN_NEGARA LIKE '%$KodeNegara%'
                                //                                     --  AND a.NAMA_PENERIMA_BARANG LIKE '%$Party%' ??
                                //                                      AND a.KODE_VALUTA LIKE '%$MataUang%'
                                //                                      AND a.TANGGAL_DAFTAR BETWEEN $TanggalMasukBarangOne AND $TanggalMasukBarangTwo
                                //                                      AND a.TANGGAL_TTD BETWEEN $TanggalKeluarBarangOne AND $TanggalKeluarBarangTwo
                                //                                      ORDER BY a.NOMOR_AJU ASC");
                                // } else {
                                $result2 = mysqli_query($dbcon, "SELECT plb.NOMOR_AJU AS PLB_NOMOR_AJU,
                                                                        plb.NOMOR_DAFTAR AS PLB_NOMOR_DAFTAR,
                                                                        plb.TANGGAL_DAFTAR AS PLB_TANGGAL_DAFTAR,

                                                                        tpb.NOMOR_AJU AS TPB_NOMOR_AJU,
                                                                        tpb.NOMOR_DAFTAR AS TPB_NOMOR_DAFTAR,
                                                                        tpb.TANGGAL_DAFTAR AS TPB_TANGGAL_DAFTAR,

                                                                        tpb.KODE_NEGARA_PEMASOK,
                                                                        ngr.URAIAN_NEGARA,
                                                                        tpb.NAMA_PEMASOK,
                                                                        tpb.JUMLAH_BARANG,
                                                                        plb_kem.KODE_JENIS_KEMASAN,
                                                                        plb_kem.JUMLAH_KEMASAN,
                                                                        ref_kem.URAIAN_KEMASAN,
                                                                        plb_kem.MEREK_KEMASAN,
                                                                        tpb.KODE_VALUTA,
                                                                        tpb.CIF,
                                                                        peng.NPWP,
                                                                        tpb.NAMA_PENERIMA_BARANG,
                                                                        tpb.ALAMAT_PENERIMA_BARANG,
                                                                        plb.TANGGAL_BC11 AS PLB_TANGGAL_BC11,
                                                                        tpb.TANGGAL_BC11 AS TPB_TANGGAL_BC11
                                                                 FROM plb_header AS plb
                                                                 LEFT OUTER JOIN plb_kemasan AS plb_kem ON plb.NOMOR_AJU=plb_kem.NOMOR_AJU
                                                                 LEFT OUTER JOIN referensi_kemasan AS ref_kem ON plb_kem.KODE_JENIS_KEMASAN=ref_kem.KODE_KEMASAN
                                                                 LEFT OUTER JOIN tpb_header AS tpb ON plb.NOMOR_DAFTAR=tpb.NOMOR_DAFTAR
                                                                 LEFT OUTER JOIN referensi_negara AS ngr ON tpb.KODE_NEGARA_PEMASOK=ngr.KODE_NEGARA
                                                                 LEFT OUTER JOIN referensi_pengusaha AS peng ON tpb.NAMA_PENERIMA_BARANG=peng.NAMA
                                                                 ORDER BY plb.NOMOR_AJU ASC LIMIT 0");
                                // }
                                if (mysqli_num_rows($result2) > 0) {
                                    while ($row2 = mysqli_fetch_array($result2)) {
                                        // FOR TANGGAL INPUT PLB
                                        $PLB_YYMMDD = SUBSTR($row2['PLB_NOMOR_AJU'], 12, 8);
                                        $PLB_YY = SUBSTR($PLB_YYMMDD, 0, 4);
                                        $PLB_MM = SUBSTR($PLB_YYMMDD, 4, 2);
                                        $PLB_DD = SUBSTR($PLB_YYMMDD, 6, 2);
                                        // FOR TANGGAL INPUT TPB
                                        $TPB_YYMMDD = SUBSTR($row2['TPB_NOMOR_AJU'], 12, 8);
                                        $TPB_YY = SUBSTR($TPB_YYMMDD, 0, 4);
                                        $TPB_MM = SUBSTR($TPB_YYMMDD, 4, 2);
                                        $TPB_DD = SUBSTR($TPB_YYMMDD, 6, 2);
                                        echo "<tr>";
                                        echo "<td>" . $row2['PLB_NOMOR_AJU'] . "</td>";
                                        echo "<td>" . $PLB_YY . "-" . $PLB_MM . "-" . $PLB_DD . "</td>";
                                        echo "<td>" . $row2['PLB_NOMOR_DAFTAR'] . "</td>";
                                        echo "<td>" . $row2['PLB_TANGGAL_DAFTAR'] . "</td>";
                                        echo "<td>" . $row2['TPB_NOMOR_AJU'] . "</td>";
                                        echo "<td>" . $TPB_YY . "-" . $TPB_MM . "-" . $TPB_DD . "</td>";
                                        echo "<td>" . $row2['TPB_NOMOR_DAFTAR'] . "</td>";
                                        echo "<td>" . SUBSTR($row2['TPB_TANGGAL_DAFTAR'], 0, 10) . "</td>";
                                        echo "<td>" . $row2['KODE_NEGARA_PEMASOK'] . "/" . $row2['URAIAN_NEGARA'] . "</td>";
                                        echo "<td>" . $row2['NAMA_PEMASOK'] . "</td>";
                                        echo "<td>" . $row2['JUMLAH_BARANG'] . "</td>";
                                        echo "<td>" . $row2['JUMLAH_KEMASAN'] . " " . $row2['URAIAN_KEMASAN'] . " " . $row2['MEREK_KEMASAN'] . "</td>";
                                        echo "<td>" . $row2['KODE_VALUTA'] . "</td>";
                                        echo "<td>" . $row2['CIF'] . "</td>";
                                        echo "<td>" . $row2['NPWP'] . "</td>";
                                        echo "<td>" . $row2['NAMA_PENERIMA_BARANG'] . "</td>";
                                        echo "<td>" . $row2['ALAMAT_PENERIMA_BARANG'] . "</td>";
                                        echo "<td>" . $row2['PLB_TANGGAL_BC11'] . "</td>";
                                        if ($row2['TPB_TANGGAL_BC11'] == NULL || $row2['TPB_TANGGAL_BC11'] == '') {
                                            echo "<td style='text-align: center;color: red'><i>Belum ada tanggal</i></td>";
                                        } else {
                                            echo "<td>" . $row2['TPB_TANGGAL_BC11'] . "</td>";
                                        }
                                        if (isset($_POST["findOne"])) { ?>
                                            <td>
                                                <a href="#kontainer<?= $row2['ID'] ?>" class="btn btn-primary" data-toggle="modal" title="Cont. Details"><i class="fas fa-box"></i> Cont. Details</a>
                                            </td>
                                        <?php } else { ?>
                                        <?php } ?>
                                        <?php
                                        echo "</tr>";
                                        ?>

                                        <!-- Cont. Details -->
                                        <div class="modal fade" id="kontainer<?= $row2['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Cont. Details] No. Pengajuan - <?= $row2['NOMOR_AJU'] ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <?php
                                                                        $contDet = mysqli_query($dbcon, "SELECT * FROM tpb_kontainer WHERE ID_HEADER = '$row2[ID]' ");
                                                                        if (mysqli_num_rows($contDet) > 0) {
                                                                            $nocont = 0;
                                                                            while ($cont = mysqli_fetch_array($contDet)) {
                                                                                $nocont++;
                                                                        ?>
                                                                                <div style="display: flex;justify-content: space-between;align-items: center;padding: 10px;font-weight: 700;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;background: #ddd;">
                                                                                    <div style="display: grid;">
                                                                                        <font>No.</font>
                                                                                        <font style="font-weight: 400;"><?= $nocont; ?>.</font>
                                                                                    </div>
                                                                                    <div style="display: grid;">
                                                                                        <font>Cont. Details</font>
                                                                                        <font style="font-weight: 400;"><?= $cont['KODE_TIPE_KONTAINER']; ?> / <?= $cont['KODE_UKURAN_KONTAINER']; ?></font>
                                                                                    </div>
                                                                                    <div style="display: grid;">
                                                                                        <font>Cont. No</font>
                                                                                        <font style="font-weight: 400;"><?= $cont['NOMOR_KONTAINER']; ?></font>
                                                                                    </div>
                                                                                </div>
                                                                        <?php }
                                                                        }
                                                                        ?>
                                                                        <div class="form-group">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Cont. Details -->
                                    <?php }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="20">
                                            <center>
                                                <div style="display: grid;">
                                                    <i class="far fa-times-circle no-data"></i> Tidak ada data
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                <?php
                                }
                                mysqli_close($dbcon);
                                ?>
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
    // UPDATE SUCCESS
    if (window?.location?.href?.indexOf('UploadSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil diupload!',
            icon: 'success',
            text: 'Data berhasil diupload didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './report_ck5_plb.php');
    }
    // UPDATE FAILED
    if (window?.location?.href?.indexOf('UploadFailed') > -1) {
        Swal.fire({
            title: 'Data gagal diupload!',
            icon: 'error',
            text: 'Data gagal diupload didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './report_ck5_plb.php');
    }

    // TableDataTPB
    $(document).ready(function() {
        $('#TableDataTPB').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>