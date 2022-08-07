<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/top-sidebar.php";
// include "include/sidebar.php";
include "include/cssDatatables.php";
// Get
// $WGetTahunAju = $_GET['TahunAju'];
// End Get
?>
<!-- begin #content -->
<div id="content" class="nav-top-content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-desktop icon-page"></i>
                <font class="text-page">Laporan Masuk Barang</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Index</a></li>
                <li class="breadcrumb-item"><a href="index_report.php">Report</a></li>
                <li class="breadcrumb-item active">Laporan Masuk Barang</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id=""><?= date_indo(date('Y-m-d'), TRUE) ?> - <font style="text-transform: uppercase;"><?= date('h:m:i a') ?></font></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- Begin Row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-perusahaan">
                <div class="panel-body text-inverse">
                    <div class="report-header-realisasi" style="display: flex;justify-content: space-around;align-items: center;">
                        <?php if ($resultHeadSetting['logo'] == NULL) { ?>
                            <img src="assets/images/logo/logo-default.png" width="10%">
                        <?php } else { ?>
                            <img src="assets/images/logo/<?= $resultHeadSetting['logo'] ?>" width="20%">
                        <?php } ?>
                        <div class="title-laporan" style="justify-content: center;text-align: center;align-items: center;display: grid;">
                            <font style="font-size: 20px;text-transform: uppercase;font-weight: 900;">LAPORAN PEMASUKAN BARANG PER DOKUMEN PABEAN</font>
                            <font><?= $resultHeadSetting['address'] ?></font>
                            <font><?= $resultHeadSetting['company'] ?></font>
                        </div>
                        <div class="detail-get" style="justify-content: center;text-align: center;align-items: center;">
                            <!-- For Cari Tanggal -->
                            <center><a href="#modal-cari-tanggal" class="btn btn-primary-css" data-toggle="modal" title="Cari Tanggal"><i class="fas fa-calendar-alt"></i> Cari Tanggal</a></center>
                            <div class="modal fade" id="modal-cari-tanggal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="report_realisasi_per_tahun.php" target="_blank" method="GET">
                                            <div class="modal-header">
                                                <h4 class="modal-title">[Laporan Masuk Barang] Cari Tanggal</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row" style="display: grid;justify-content: center;align-items: center;">
                                                    <div class="col-12">
                                                        <img src="assets/img/svg/realisasi_b.svg" alt="Laporan Realisasi Mitra Per Tahun" class="image" width="50%">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row" style="align-items: center;">
                                                    <div class="col-xl-5">
                                                        <div class="form-group">
                                                            <input type="date" name="StartTanggal" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2">
                                                        <div class="form-group">
                                                            s.d
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="form-group">
                                                            <input type="date" name="EndTanggal" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                                <button type="submit" name="find_TahunAju" class="btn btn-primary"><i class="fas fa-calendar-alt"></i> Cari Tanggal</button>
                                                <!-- <a href="report_realisasi_per_tahun.php?TahunAju=<?= $_POST['TahunAju'] ?>" class="btn btn-primary"><i class="fas fa-search"></i> Cari</a> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End For Cari Tanggal -->
                        </div>
                    </div>
                    <div style="background: #4c4747;height: 4px;width: 100%;margin: 15px -1px;box-sizing: border-box;"></div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th rowspan="2" width="1%">#</th>
                                    <th colspan="3" style="text-align: center;">Dokumen Pabean</th>
                                    <th rowspan="2" style="text-align: center;">Supplier</th>
                                    <th rowspan="2" style="text-align: center;">Kode Barang (No. HS)</th>
                                    <th rowspan="2" style="text-align: center;">Barang</th>
                                    <th rowspan="2" style="text-align: center;">Jumlah</th>
                                    <th rowspan="2" style="text-align: center;">Nilai Barang</th>
                                </tr>
                                <tr>
                                    <th style="text-align: center;">Jenis</th>
                                    <th style="text-align: center;">No.</th>
                                    <th style="text-align: center;">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- 9 -->
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Begin Row -->
    <?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php
// include "include/panel.php";
include "include/footer.php";
include "include/jsDatatables.php";
?>