<!-- QUERY -->
<?php
include "include/connection.php";
// include "include/restrict.php";

$dataHeadSettting = $dbcon->query("SELECT * FROM tbl_setting");
$resultHeadSetting = mysqli_fetch_array($dataHeadSettting);

$dataSetRealTime = $dbcon->query("SELECT * FROM tbl_realtime ORDER BY id DESC LIMIT 1");
$resultSetRealTime = mysqli_fetch_array($dataSetRealTime);

$SetTime = $resultSetRealTime['reload'];

$CheckForPrivileges = $_SESSION['username'];
$dataForPrivileges = $dbcon->query("SELECT INSERT_DATA,UPDATE_DATA,DELETE_DATA,KIRIM_DATA,UPDATE_PASSWORD FROM view_privileges WHERE USER_NAME='$CheckForPrivileges'");
$resultForPrivileges = mysqli_fetch_array($dataForPrivileges);

$dataGETAJU = $_GET['AJU'];
$DataCK5PLB = $dbcon->query("SELECT * FROM tpb_header WHERE NOMOR_AJU='$dataGETAJU'");
$resultDataCK5PLB = mysqli_fetch_array($DataCK5PLB);

// Cari Nama Kantor Pemasok
$forNamaKantor = $resultDataCK5PLB['KPPBC'];
$DataNamaKantor = $dbcon->query("SELECT URAIAN_KANTOR FROM referensi_kantor_pabean WHERE KODE_KANTOR='$forNamaKantor'");
$resultDataNamaKantor = mysqli_fetch_array($DataNamaKantor);

// Cari Nama Kantor Tujuan
$forNamaKantorTujuan = $resultDataCK5PLB['KODE_KANTOR_TUJUAN'];
$DataNamaKantorTujuan = $dbcon->query("SELECT URAIAN_KANTOR FROM referensi_kantor_pabean WHERE KODE_KANTOR='$forNamaKantorTujuan'");
$resultDataNamaKantorTujuan = mysqli_fetch_array($DataNamaKantorTujuan);

// Cari Tanggal SKEP
$forTanggalSKEP = $resultDataCK5PLB['NOMOR_IJIN_TPB'];
$DataTanggalSKEP = $dbcon->query("SELECT *, SUBSTR(TANGGAL_SKEP,1,10) AS for_tgl_skep FROM referensi_pengusaha WHERE NOMOR_SKEP='$forTanggalSKEP'");
$resultDataTanggalSKEP = mysqli_fetch_array($DataTanggalSKEP);


// DATE
function date_indo($date, $print_day = false)
{
    $day = array(
        1 =>
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
    );
    $month = array(
        1 =>
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Augustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split    = explode('-', $date);
    $tgl_indo = $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];

    if ($print_day) {
        $num = date('N', strtotime($date));
        return $day[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<?php if ($resultHeadSetting['app_name'] == NULL || $resultHeadSetting['company'] == NULL || $resultHeadSetting['title'] == NULL) { ?>
		<title>TPBERP | PT. Sarinah (Persero)</title>
	<?php } else { ?>
		<title><?= $resultHeadSetting['app_name'] ?> | <?= $resultHeadSetting['company'] ?> - <?= $resultHeadSetting['title'] ?></title>
	<?php } ?>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
	<meta name=ProgId content=Excel.Sheet>
	<meta name=Generator content="Microsoft Excel 15">
	<link rel=File-List href="CK-5-DAW%2010%20Pallet%20TBB1_files/filelist.xml">
	<?php if ($resultHeadSetting['icon'] == NULL) { ?>
		<link rel="apple-touch-icon" sizes="180x180" href="assets/images/icon/icon-default.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/images/icon/icon-default.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/images/icon/icon-default.png">
	<?php } else { ?>
		<link rel="apple-touch-icon" sizes="180x180" href="assets/images/icon/<?= $resultHeadSetting['icon'] ?>">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/images/icon/<?= $resultHeadSetting['icon'] ?>">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/images/icon/<?= $resultHeadSetting['icon'] ?>">
	<?php } ?>
	<link href="assets/css/tpb.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link href="assets/css/default/invoice-print.min.css" rel="stylesheet" />
	<link href="assets/css/ck5plb.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q66YLEFFZ2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-Q66YLEFFZ2');
    </script>
</head>
<style type="text/css">
	.nav-top-content {
		padding: 20px;
		margin-top: 30px;
	}

	@media (max-width: 767.5px) {
		.nav-top-content {
			padding: 20px;
			margin-top: 0px;
		}
	}

    .for-area-one {
        border: transparent;
        height: 90px;
        width: 325px;
    }

    .for-area-one-oke {
        /*border: transparent;*/
        height: 90px;
        width: 325px;
    }

    .for-area-two {
        border: transparent;
        height: 90px;
        width: 400px;
    }

    @media (max-width: 1366.5px) {
        .for-area-one {
            border: transparent;
            height: 110px;
            width: 260px;
        }

        .for-area-one-oke {
            /*border: transparent;*/
            height: 110px;
            width: 260px;
        }

        .for-area-two {
            border: transparent;
            height: 110px;
            width: 310px;
        }
    }

    .area-big {
        border: transparent;
        width: 130px;
    }

    @media (max-width: 1156.5px) {
        .area-big {
            border: transparent;
            width: 88px;
        }
    }

    label {
        font-size: 12px;
    }

    div.table-responsive>div.dataTables_wrapper>div.row {
        margin: 0;
        font-size: 12px;
    }
</style>
<body>
	<div id="content" class="nav-top-content">
		<div class="invoice">
			<div class="invoice-company">
				<span class="pull-right hidden-print">
                    <!-- For Detail Mutasi Barang -->
                    <a href="#" class="btn btn-sm btn-blue m-b-10" data-toggle="modal" title="Detail Mutasi Barang" style="padding: 7px;">
                        <div style="display: flex;justify-content: space-between;align-items: end;">
                            &nbsp; Filename : Invoice - GB Sarinah
                        </div>
                    </a>
                    <a href="#detail-mutasi-barang" class="btn btn-sm btn-white m-b-10" data-toggle="modal" title="Detail Mutasi Barang" style="padding: 7px;">
                        <div style="display: flex;justify-content: space-between;align-items: end;">
                            <i class="fas fa-clipboard-list" style="font-size: 18px;margin-top: -10px;"></i>&nbsp;Detail Mutasi Barang
                        </div>
                    </a>
                    <div class="modal fade" id="detail-mutasi-barang">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="adm_hak_akses.php" method="POST">
                                    <div class="modal-header">
                                        <h4 class="modal-title">[Detail Mutasi Barang] Berdasarkan Nomor AJU: <?= $_GET['AJU']; ?></h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <p style="display: flex;justify-content: center;">Pemberitahuan Mutasi Barang Kena Cukai (PMBKC)</p>
                                        </div>
                                        <div class="line-page-table"></div>
                                        <div class="table-responsive">
                                            <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle" style="width: 100%;font-size: 12px;font-weight: 400;">
                                                <thead>
                                                    <tr>
                                                        <th width="1%">#</th>
                                                        <th class="text-nowrap" style="text-align: center;">Rincian Jumlah, Jenis Merk & Nomor</th>
                                                        <th class="text-nowrap" style="text-align: center;">Uraian jenis barang secara lengkap</th>
                                                        <th class="text-nowrap" style="text-align: center;">Jumlah dan jenis satuan barang</th>
                                                        <th class="text-nowrap" style="text-align: center;">HJE / HJP*) (Rp)</th>
                                                        <th class="text-nowrap" style="text-align: center;">Tarif Cukai</th>
                                                        <th class="text-nowrap" style="text-align: center;">Jumlah Cukai (Rp)</th>
                                                        <th class="text-nowrap" style="text-align: center;">Jumlah Devisa (USD)</th>
                                                        <th class="text-nowrap" style="text-align: center;">Keterangan</th>
                                                        <!-- <th class="text-nowrap">Aksi</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <!--  <?php
                                                    $dataTable = $dbcon->query("SELECT * FROM referensi_pengusaha AS a
                                                                                LEFT JOIN referensi_status_pengusaha AS b ON a.KODE_ID=b.KODE_STATUS_PENGUSAHA ORDER BY a.ID DESC");
                                                    if (mysqli_num_rows($dataTable) > 0) {
                                                        $no = 0;
                                                        while ($row = mysqli_fetch_array($dataTable)) {
                                                            $no++;
                                                            ?> -->
                                                            <tr class="odd gradeX">
                                                                <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                                                <td style="text-align: left;">
                                                                </td>
                                                                <td style="text-align: left;">
                                                                </td>
                                                                <td style="text-align: left;">
                                                                </td>
                                                                <td style="text-align: left;">
                                                                </td>
                                                                <td style="text-align: left;">
                                                                </td>
                                                                <td style="text-align: left;">
                                                                </td>
                                                                <td style="text-align: left;">
                                                                </td>
                                                                <td style="text-align: left;">
                                                                </td>
                                                            </tr>
                                                        <!-- <?php } ?>
                                                    <?php } else { ?>
                                                        <tr>
                                                            <td colspan="9">
                                                                <center>
                                                                    <div style="display: grid;">
                                                                        <i class="far fa-times-circle no-data"></i> Tidak ada data
                                                                    </div>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <?php } ?> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- For Detail Mutasi Barang -->
                        <a href="javascript:;" class="btn btn-sm btn-white m-b-10">
                            <img src="assets/img/favicon/excel.png" class="icon-primary-excel" alt="Excel">  Export Excel
                        </a>
                        <a href="report_ck5_sarinah_invoice_print.php" class="btn btn-sm btn-white m-b-10">
                            <img src="assets/img/favicon/print.png" class="icon-primary-print" alt="Print">  Print
                        </a>

                        <!-- <a href="javascript:;" class="btn btn-sm btn-white m-b-10"><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Export as xls</a> -->
                        <!-- <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a> -->
                        <!-- <a href="report_ck5_plb_detail_print.php" class="btn btn-sm btn-white m-b-10"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a> -->
                    </span>
                    <?= $resultHeadSetting['company'] ?>
                </div>
                <div class="line-page-table"></div>
                <div class="invoice-content">
                    <div class="table-responsive">
                        <table cellspacing="0" border="0">
                            <colgroup width="31"></colgroup>
                            <colgroup width="29"></colgroup>
                            <colgroup width="10"></colgroup>
                            <colgroup width="91"></colgroup>
                            <colgroup width="10"></colgroup>
                            <colgroup width="131"></colgroup>
                            <colgroup width="73"></colgroup>
                            <colgroup width="29"></colgroup>
                            <colgroup width="18"></colgroup>
                            <colgroup width="62"></colgroup>
                            <colgroup width="88"></colgroup>
                            <colgroup width="123"></colgroup>
                            <colgroup width="10"></colgroup>
                            <colgroup width="47"></colgroup>
                            <colgroup width="51"></colgroup>
                            <colgroup width="138"></colgroup>
                            <colgroup width="24"></colgroup>
                            <colgroup width="128"></colgroup>
                            <tr>
                                <td colspan=6 rowspan=2 height="150" align="left" valign=middle><br><img src="assets/images/icon/icon_1658131045.Sarinah.svg.png" width=300 height=70 hspace=49 vspace=22>
                                </td>
                                <td colspan=6 style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5>PT. SARINAH ( PERSERO )</font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><br></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><br></td>
                                <td style="border-bottom: 2px solid #000000" align="right" valign=bottom><font face="Arial Black" size=6 color="#404040"><br></font></td>
                            </tr>
                            <tr>
                                <td colspan=6 style="border-top: 2px solid #000000" align="left" valign=middle><b><font size=4>Jl. MH Thamrin No 11 Jakarta 10350</font></b></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=middle><b><font size=4><br></font></b></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=middle><b><font size=4><br></font></b></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=middle><b><font size=4><br></font></b></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=middle><b><font size=4><br></font></b></td>
                                <td align="left" valign=middle><b><font size=4><br></font></b></td>
                                <td align="left" valign=middle><b><font size=4><br></font></b></td>
                                <td align="center" valign=middle><b><font size=4><br></font></b></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="right" valign=bottom><font face="Arial Black" size=6 color="#404040"><br></font></td>
                            </tr>
                            <tr>
                                <td align="left" valign=middle><b><font size=5><br></font></b></td>
                                <td align="left" valign=middle><b><font size=5><br></font></b></td>
                                <td align="left" valign=middle><b><font size=5><br></font></b></td>
                                <td align="left" valign=middle><b><font size=5><br></font></b></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="right" valign=bottom><font face="Arial Black" size=6 color="#404040"><br></font></td>
                            </tr>
                            <tr>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=bottom><font face="Arial Black" size=6 color="#404040">INVOICE</font></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                                <td align="left" valign=middle><br></td>
                            </tr>
                            <tr>
                                <td style="border-bottom: 1px solid #969696" colspan=11 height="26" align="center" valign=middle bgcolor="#ECECEC"><b><font color="#404040"><br></font></b></td>
                                <td style="border-bottom: 1px solid #969696" colspan=7 align="center" valign=middle><b><font color="#404040"><br></font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #969696" colspan=11 height="10" align="left" valign=bottom><b><font color="#0070C0"><br></font></b></td>
                                <td style="border-top: 1px solid #969696" colspan=7 align="left" valign=bottom><b><font color="#0070C0"><br></font></b></td>
                            </tr>
                            <tr>
                                <td colspan=4 height="27" align="left" valign=bottom bgcolor="#FFFFFF">Duty Free Name</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><b>:</b></td>
                                <td align="left" valign=middle bgcolor="#FFFFFF">PT Dewataagung Wibawa</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><b><br></b></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF">Number</td>
                                <td align="right" valign=middle bgcolor="#FFFFFF"><b>:</b></td>
                                <td align="left" valign=middle bgcolor="#FFFFFF">003/GB-BGR/III/2018</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="center" valign=middle bgcolor="#FFFFFF" sdval="3" sdnum="1033;">3</td>
                                <td align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1057;DD MMMM YYYY;@">April 2018</td>
                            </tr>
                            <tr>
                                <td colspan=4 height="27" align="left" valign=bottom bgcolor="#FFFFFF">NPWP</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><b>:</b></td>
                                <td align="left" valign=middle bgcolor="#FFFFFF">01.337.224.8-415.001</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF">Ex Bill Of Lading</td>
                                <td align="right" valign=middle bgcolor="#FFFFFF"><b>:</b></td>
                                <td align="left" valign=middle>OOLU2602018450</td>
                                <td align="left" valign=middle bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=middle bgcolor="#FFFFFF"><br></td>
                                <td align="center" valign=middle bgcolor="#FFFFFF" sdval="25" sdnum="1033;">25</td>
                                <td align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1057;DD MMMM YYYY;@">Maret 2018</td>
                            </tr>
                            <tr>
                                <td colspan=4 height="27" align="left" valign=bottom bgcolor="#FFFFFF">Street Address</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><b>:</b></td>
                                <td align="left" valign=middle bgcolor="#FFFFFF">Wisma Soewarna 3rd Floor Suite K-R</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF">Ex Invoice</td>
                                <td align="right" valign=middle bgcolor="#FFFFFF"><b>:</b></td>
                                <td colspan=3 align="left" valign=middle bgcolor="#FFFFFF">97368072 ; 97368073 ; 9736874</td>
                                <td align="center" valign=middle bgcolor="#FFFFFF" sdval="22" sdnum="1033;">22</td>
                                <td align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1057;DD MMMM YYYY;@">Maret 2018</td>
                            </tr>
                            <tr>
                                <td height="25" align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><b>:</b></td>
                                <td align="left" valign=middle bgcolor="#FFFFFF">Soewarna Business Park, Soekarno - Hatta </td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF">Original</td>
                                <td align="right" valign=middle bgcolor="#FFFFFF"><b>:</b></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF">Singapore</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1057;DD MMMM YYYY;@"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=middle bgcolor="#FFFFFF">International Airport</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF">BC 2.3 Number</td>
                                <td align="right" valign=bottom bgcolor="#FFFFFF"><b>:</b></td>
                                <td colspan=2 align="left" valign=bottom bgcolor="#FFFFFF">013962</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="right" valign=middle bgcolor="#FFFFFF" sdval="12" sdnum="1033;">12</td>
                                <td align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1057;DD MMMM YYYY;@">April 2018</td>
                            </tr>
                            <tr>
                                <td height="17" align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF">JAKARTA</td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF"><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1057;DD MMMM YYYY;@"><br></td>
                            </tr>
                            <tr>
                                <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #969696" rowspan=2 height="68" align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">No</font></b></td>
                                <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #969696; border-right: 1px solid #000000" colspan=5 rowspan=2 align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">DESCRIPTION</font></b></td>
                                <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">SKU</font></b></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#F8F8F8"><b><font color="#404040"><br></font></b></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#F8F8F8"><b><font color="#404040"><br></font></b></td>
                                <td style="border-top: 2px solid #000000; border-right: 1px solid #969696" align="left" valign=middle bgcolor="#F8F8F8"><b><font color="#404040"><br></font></b></td>
                                <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #969696; border-right: 1px solid #969696" rowspan=2 align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">Quantity</font></b></td>
                                <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #969696; border-right: 1px solid #969696" rowspan=2 align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">Price</font></b></td>
                                <td style="border-top: 2px solid #000000; border-left: 1px solid #969696" align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040"><br></font></b></td>
                                <td style="border-top: 2px solid #000000; border-bottom: 1px solid #969696; border-right: 2px solid #000000" colspan=5 align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">Remarks</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle bgcolor="#F8F8F8"><b><font color="#404040"><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle bgcolor="#F8F8F8"><b><font color="#404040"><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000; border-right: 1px solid #969696" align="left" valign=middle bgcolor="#F8F8F8"><b><font color="#404040"><br></font></b></td>
                                <td style="border-top: 1px solid #969696; border-bottom: 2px solid #000000; border-left: 1px solid #969696; border-right: 1px solid #969696" colspan=2 align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">Pack(s)</font></b></td>
                                <td style="border-top: 1px solid #969696; border-bottom: 2px solid #000000; border-left: 1px solid #969696; border-right: 1px solid #969696" align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">Can(s)</font></b></td>
                                <td style="border-top: 1px solid #969696; border-bottom: 2px solid #000000; border-left: 1px solid #969696; border-right: 1px solid #969696" align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">Bottle</font></b></td>
                                <td style="border-top: 1px solid #969696; border-bottom: 2px solid #000000; border-left: 1px solid #969696" align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040"><br></font></b></td>
                                <td style="border-top: 1px solid #969696; border-bottom: 2px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#F8F8F8"><b><font color="#404040">Litre(s)</font></b></td>
                            </tr>
                            <tr>
                                <td style="border-top: 2px solid #000000" height="29" align="center" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=bottom><b>Asasorted Whisky</b></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="right" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="right" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td style="border-top: 2px solid #000000" align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td style="border-top: 2px solid #000000" align="right" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="right" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="right" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="right" valign=bottom><br></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=bottom sdnum="1033;0;_(&quot;$&quot;* #,##0.00_);_(&quot;$&quot;* \(#,##0.00\);_(&quot;$&quot;* &quot;-&quot;??_);_(@_)"><br></td>
                            </tr>
                            <tr>
                                <td height="20" align="center" valign=bottom><br></td>
                                <td align="center" valign=bottom><b>HS </b></td>
                                <td align="center" valign=bottom><b>:</b></td>
                                <td align="left" valign=bottom><b>2208.30.00 - 2204.30.20</b></td>
                                <td align="left" valign=bottom><b><br></b></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="right" valign=bottom><br></td>
                                <td align="right" valign=bottom><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom><br></td>
                                <td align="right" valign=bottom><br></td>
                                <td align="right" valign=bottom><br></td>
                                <td align="right" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(&quot;$&quot;* #,##0.00_);_(&quot;$&quot;* \(#,##0.00\);_(&quot;$&quot;* &quot;-&quot;??_);_(@_)"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom sdval="1" sdnum="1033;">1</td>
                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>Chivas Regal 18y 40% 1L</td>
                                <td align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom bgcolor="#FFFFFF">01254051</td>
                                <td align="right" valign=bottom sdval="6" sdnum="1033;0;#,##0">6</td>
                                <td align="center" valign=middle><font face="Calibri" color="#000000">X</font></td>
                                <td align="right" valign=bottom sdval="1000" sdnum="1033;0;0 &quot;ml&quot;">1000 ml</td>
                                <td align="right" valign=bottom sdval="60" sdnum="1033;0;0 &quot;Ctn(s)&quot;">60 Ctn(s)</td>
                                <td colspan=2 align="right" valign=bottom sdval="17640" sdnum="1033;0;_([$USD] * #,##0.00_);_([$USD] * \(#,##0.00\);_([$USD] * &quot;-&quot;??_);_(@_)"> USD 17,640.00 <img src="result_htm_9b1e7b3d98a5eb94.png" width=132 height=1 hspace=1 vspace=13>
                                </td>
                                <td align="right" valign=bottom sdval="0" sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"> - </td>
                                <td align="right" valign=bottom sdval="0" sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"> - </td>
                                <td align="right" valign=bottom sdval="360" sdnum="1033;0;0.00 &quot;Btl(s)&quot;">360.00 Btl(s)</td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdval="360" sdnum="1033;0;0.00 &quot;Ltr(s)&quot;">360.00 Ltr(s)</td>
                            </tr>
                            <tr>
                                <td height="24" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td colspan=2 align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br><img src="result_htm_9b1e7b3d98a5eb94.png" width=189 height=1 hspace=11 vspace=11>
                                </td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdval="60" sdnum="1033;0;#,##0 &quot;Ctn(s)&quot;"><b>60 Ctn(s)</b></td>
                                <td align="right" valign=bottom sdval="17640" sdnum="1033;0;_([$USD] * #,##0.00_);_([$USD] * \(#,##0.00\);_([$USD] * &quot;-&quot;??_);_(@_)"><b> USD 17,640.00 </b></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><b><br></b></td>
                                <td align="right" valign=bottom sdval="0" sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><b> - </b></td>
                                <td align="right" valign=bottom sdval="0" sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><b> - </b></td>
                                <td align="right" valign=bottom sdval="360" sdnum="1033;0;#,##0 &quot;Btl(s)&quot;"><b>360 Btl(s)</b></td>
                                <td align="right" valign=bottom sdnum="1033;0;#,##0 &quot;Btl(s)&quot;"><b><br></b></td>
                                <td align="right" valign=bottom sdval="360" sdnum="1033;0;#,##0.00 &quot;Ltr(s)&quot;"><b>360.00 Ltr(s)</b></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><b>PT SARINAH ( PERSERO )</b></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><b><br></b></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><b><br></b></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;">Divisi Perdagangan</td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                            <tr>
                                <td height="27" align="center" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;ml&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><b><u>Hari Prabowo</u></b></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                            <tr>
                                <td height="21" align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0 &quot;X&quot;"><br></td>
                                <td align="right" valign=bottom><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0 &quot;Ctn(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;_([$SGD] * #,##0.00_);_([$SGD] * \(#,##0.00\);_([$SGD] * &quot;-&quot;??_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;_(* #,##0_);_(* \(#,##0\);_(* &quot;-&quot;_);_(@_)"><br></td>
                                <td align="left" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;">General Manager</td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Btl(s)&quot;"><br></td>
                                <td align="right" valign=bottom sdnum="1033;0;0.00 &quot;Ltr(s)&quot;"><br></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="invoice-footer">
                    <p class="text-center m-b-5 f-w-600">
                     Export CK5 Sarinah | IT Inventory <?= $resultHeadSetting['company'] ?>
                 </p>
                 <p class="text-center">
                     <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> <?= $resultHeadSetting['website'] ?></span>
                     <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:<?= $resultHeadSetting['telp'] ?></span>
                     <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> <?= $resultHeadSetting['email'] ?></span>
                 </p>
             </div>
         </div>
     </div>
     <?php 
		// include "include/panel.php"; 
     ?>
     <?php include "include/panel.php"; ?>
     <?php include "include/footer.php"; ?>
     <?php include "include/jsDatatables.php"; ?>
     <script>
        // Show and Hidden
        $(function() {
            $("#IDJenisBarangKenaCukai").change(function() {
                if ($(this).val() == 4) {
                    $("#OthersJenisBarangKenaCukai").show();
                } else {
                    $("#OthersJenisBarangKenaCukai").hide();
                }
            });
        });
        $(function() {
            $("#IDJenisPemberitahuan").change(function() {
                if ($(this).val() == 4) {
                    $("#OthersJenisPemberitahuan").show();
                } else {
                    $("#OthersJenisPemberitahuan").hide();
                }
            });
        });
        // IDNamaKodeNegaraTujuan
        $(function() {
            $("#IDNamaKodeNegaraTujuan").change(function() {
                if ($(this).val() == 'NPPBKC') {
                    $("#IdentitasTwoNPPBKC").show();
                    $("#IdentitasTwoNPP").hide();
                } else if ($(this).val() == 'NPP') {
                    $("#IdentitasTwoNPPBKC").hide();
                    $("#IdentitasTwoNPP").show();
                } else {
                    $("#IdentitasTwoNPPBKC").hide();
                    $("#IdentitasTwoNPP").hide();
                }
            });
        });
        // show-address-identitas-two
        function showAddress(c_str) {
          if (c_str == "") {
            document.getElementById("show-address-identitas-two").innerHTML = "";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("show-address-identitas-two").innerHTML = this.responseText;
          }
      }
      xmlhttp.open("GET", "function/function_get.php/get_c_client?c_id=" + c_str, true);
      xmlhttp.send();
  }

        // showKodeOne
        function showKodeOne(kode_one) {
          if (kode_one == "") {
            document.getElementById("InputshowKodeOne").innerHTML = "";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("InputshowKodeOne").innerHTML = this.responseText;
          }
      }
      xmlhttp.open("GET", "function/function_get.php/get_kode_one?c_kode_one=" + kode_one, true);
      xmlhttp.send();
  }
        // showKodeTwo
        function showKodeTwo(kode_two) {
          if (kode_two == "") {
            document.getElementById("InputshowKodeTwo").innerHTML = "";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("InputshowKodeTwo").innerHTML = this.responseText;
          }
      }
      xmlhttp.open("GET", "function/function_get.php/get_kode_two?c_kode_two=" + kode_two, true);
      xmlhttp.send();
  }
        // showKodeThree
        function showKodeThree(kode_three) {
          if (kode_three == "") {
            document.getElementById("InputshowKodeThree").innerHTML = "";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("InputshowKodeThree").innerHTML = this.responseText;
          }
      }
      xmlhttp.open("GET", "function/function_get.php/get_kode_three?c_kode_three=" + kode_three, true);
      xmlhttp.send();
  }
        // Show and Hide
        $(function() {
            $("#IDJaminan").change(function() {
                if ($(this).val() == 4) {
                    $("#OthersJaminan").show();
                } else {
                    $("#OthersJaminan").hide();
                }
            });
        });
    </script>

</body>
</html>
