<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/top-sidebar.php";
include "include/cssDatatables.php";
// include "include/sidebar.php";

$sql_aju = '';
if (isset($_POST["filterdata"])) {

    if ($_POST["no_aju"] != '') {
        $sql_aju = $_POST['no_aju'];
    } else {
        $sql_aju = '';
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
                    <h4 class="panel-title"><i class="fas fa-upload"></i> Upload Data CK5 Sarinah</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row" style="display: flex;align-items: center;">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>No. Pengajuan</label>
                                            <input type="text" name="no_aju" class="form-control" placeholder="No. Pengajuan..." value="<?= $sql_aju ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>No. BC.11</label>
                                            <input type="text" name="no_bc11_plb" class="form-control" placeholder="No. BC.11...">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Tanggal BC.11</label>
                                            <input type="date" name="tgl_bc11_plb" class="form-control" placeholder="Tanggal BC.11...">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Supplier Name</label>
                                            <input type="text" name="supplier_name" class="form-control" placeholder="Supplier Name...">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Supplier Country</label>
                                            <input type="text" name="supplier_country" class="form-control" placeholder="Supplier Country...">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Party</label>
                                            <input type="text" name="party_info" class="form-control" placeholder="Party...">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Container No.</label>
                                            <input type="text" name="cont_no" class="form-control" placeholder="Container No....">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Currency</label>
                                            <input type="number" name="currency" class="form-control" placeholder="Currency...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="btn btn-block btn-primary" name="filterdata" value="filterdata"><i class="fas fa-upload"></i> Filter</button>
                            </div>
                        </div>
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
                        <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th style="text-align:center">BC.27</th>
                                    <th style="text-align:center">Tgl Input</th>
                                    <th style="text-align:center">No BC11</th>
                                    <th style="text-align:center">Tgl BC11</th>
                                    <th style="text-align:center">Negara</th>
                                    <th style="text-align:center">Supplier</th>
                                    <th style="text-align:center">Jumlah Barang</th>
                                    <th style="text-align:center">Currency</th>
                                    <th style="text-align:center">Nilai Total</th>
                                    <th style="text-align:center">NPWP Tujuan</th>
                                    <th style="text-align:center">Nama Tujuan</th>
                                    <th style="text-align:center">Origin</th>
                                    <?php if (isset($_POST["filterdata"])) { ?>
                                        <th style="text-align:center">Cont. Details</th>
                                        <!-- <th style="text-align:center">Cont. No</th> -->
                                    <?php } else { ?>
                                    <?php } ?>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_POST["filterdata"])) {
                                    $result2 = mysqli_query($dbcon, "SELECT * FROM tpb_header WHERE NOMOR_AJU LIKE '%$sql_aju%'");
                                } else {
                                    $result2 = mysqli_query($dbcon, "SELECT * FROM tpb_header LIMIT 0");
                                }
                                if (mysqli_num_rows($result2) > 0) {
                                    while ($row2 = mysqli_fetch_array($result2)) {
                                        echo "<tr>";
                                        echo "<td>" . $row2['NOMOR_AJU'] . "</td>";
                                        echo "<td>" . $row2['TANGGAL_AJU'] . "</td>";
                                        echo "<td>" . $row2['NOMOR_BC11'] . ".</td>";
                                        echo "<td>" . $row2['TANGGAL_BC11'] . "</td>";
                                        echo "<td>" . $row2['KODE_NEGARA_PEMASOK'] . "</td>";
                                        echo "<td>" . $row2['NAMA_PEMASOK'] . "</td>";
                                        echo "<td>" . $row2['JUMLAH_BARANG'] . "</td>";
                                        echo "<td>" . $row2['KODE_VALUTA'] . "</td>";
                                        echo "<td>" . $row2['HARGA_PENYERAHAN'] . "</td>";
                                        echo "<td>" . $row2['ID_PENERIMA_BARANG'] . "</td>";
                                        echo "<td>" . $row2['NAMA_PENERIMA_BARANG'] . "</td>";
                                        echo "<td>" . $row2['ALAMAT_PEMASOK'] . "</td>";
                                        if (isset($_POST["filterdata"])) { ?>
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
                                                                        /* get container details */
                                                                        $contDet = mysqli_query($dbcon, "SELECT * FROM tpb_kontainer WHERE ID_HEADER = '$row2[ID]' ");
                                                                        // $cont = mysqli_fetch_array($contDet);
                                                                        if (mysqli_num_rows($contDet) > 0) {
                                                                            $nocont = 0;
                                                                            while ($cont = mysqli_fetch_array($contDet)) {
                                                                                $nocont++;
                                                                        ?>
                                                                                <div style="display: flex;justify-content: space-between;align-items: center;padding: 10px;font-weight: 700;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;">
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
</script>