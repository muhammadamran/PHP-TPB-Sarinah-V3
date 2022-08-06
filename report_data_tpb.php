<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/top-sidebar.php";
// include "include/sidebar.php";

if (isset($_POST["filterdata"])) {

    if ($_POST["no_aju"] != '' ){
        $sql_aju = "NOMOR_AJU =" . $_POST['no_aju'];
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
                                            <input type="text" name="no_aju" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>No. BC11</label>
                                            <input type="text" name="no_bc11_plb" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Tanggal BC11</label>
                                            <input type="date" name="tgl_bc11_plb" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Supplier Name</label>
                                            <input type="text" name="supplier_name" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Supplier Country</label>
                                            <input type="text" name="supplier_country" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Party</label>
                                            <input type="text" name="party_info" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Container No.</label>
                                            <input type="text" name="cont_no" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Currency</label>
                                            <input type="number" name="currency" class="form-control">
                                        </div>
                                    </div>
<!--                                     <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Tgl Masuk Brg</label>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="col-xl-6">
                                                        <input type="date" name="tgl_masuk_start" class="form-control">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <input type="date" name="tgl_masuk_end" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Tgl Keluar Brg</label>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="col-xl-6">
                                                        <input type="date" name="tgl_out_start" class="form-control" >
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <input type="date" name="tgl_out_end" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
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
                   <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                    <thead>
                        <tr>
                            <th style="text-align:center">BC.27</th>
                            <th style="text-align:center">Tgl Input</th>
                            <th style="text-align:center">No BC11</th>
                            <th style="text-align:center">Tgl BC11</th>
                            <th style="text-align:center">Negara</th>
                            <th style="text-align:center">Supplier</th>
                            <th style="text-align:center">JumlahBarang</th>
                            <th style="text-align:center">Currency</th>
                            <th style="text-align:center">Nilai Total</th>
                            <th style="text-align:center">NPWP Tujuan</th>
                            <th style="text-align:center">Nama Tujuan</th>
                            <th style="text-align:center">Origin</th>
                            <th style="text-align:center">Cont. Details</th>
                            <th style="text-align:center">Cont. No</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result2 = mysqli_query($dbcon, "SELECT * FROM tpb_header WHERE $sql_aju ");
                        if (mysqli_num_rows($result2)>0) {
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

                                /* get container details */
                                $contDet = mysqli_query($dbcon, "SELECT * FROM tb_kontainer WHERE ID_HEADER = '$row2[ID]' ");
                                $cont = mysqli_fetch_array($contDet);

                                echo "<td>" . $cont['KODE_TIPE_KONTAINER'] . "/" . $cont['KODE_UKURAN_KONTAINER'] . "</td>";
                                echo "<td>" . $cont['NOMOR_KONTAINER'] . "</td>";
                                echo "</tr>";
                            }
                        }
                        mysqli_close($dbcon);
                        ?>
                    </tbody>
                </table>
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