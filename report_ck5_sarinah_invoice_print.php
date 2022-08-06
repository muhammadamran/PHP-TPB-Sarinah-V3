<!-- QUERY -->
<?php
include "include/connection.php";
include "include/restrict.php";

$dataHeadSettting = $dbcon->query("SELECT * FROM tbl_setting");
$resultHeadSetting = mysqli_fetch_array($dataHeadSettting);

$dataSetRealTime = $dbcon->query("SELECT * FROM tbl_realtime ORDER BY id DESC LIMIT 1");
$resultSetRealTime = mysqli_fetch_array($dataSetRealTime);

$SetTime = $resultSetRealTime['reload'];

$CheckForPrivileges = $_SESSION['username'];
$dataForPrivileges = $dbcon->query("SELECT INSERT_DATA,UPDATE_DATA,DELETE_DATA,KIRIM_DATA,UPDATE_PASSWORD FROM view_privileges WHERE USER_NAME='$CheckForPrivileges'");
$resultForPrivileges = mysqli_fetch_array($dataForPrivileges);

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
</style>
<body onload="window.print();">
	<!-- begin #page-container -->
	<div id="content" class="nav-top-content">
		<div class="invoice">
			<div class="invoice-company">
				<?= $resultHeadSetting['company'] ?>
			</div>
			<!-- <div class="invoice-header">
				<div class="invoice-from">
					<small>from</small>
					<address class="m-t-5 m-b-5">
						<strong class="text-inverse">Twitter, Inc.</strong><br />
						Street Address<br />
						City, Zip Code<br />
						Phone: (123) 456-7890<br />
						Fax: (123) 456-7890
					</address>
				</div>
				<div class="invoice-to">
					<small>to</small>
					<address class="m-t-5 m-b-5">
						<strong class="text-inverse">Company Name</strong><br />
						Street Address<br />
						City, Zip Code<br />
						Phone: (123) 456-7890<br />
						Fax: (123) 456-7890
					</address>
				</div>
				<div class="invoice-date">
					<small>Invoice / July period</small>
					<div class="date text-inverse m-t-5">August 3,2012</div>
					<div class="invoice-detail">
						#0000123DSS<br />
						Services Product
					</div>
				</div>
			</div> -->
			<div class="invoice-content">
				<!-- <div style="display: flex;justify-content: center;"> -->
					<!-- <div style="margin-left: 80px;"> -->
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
                                <td colspan=6 rowspan=4 height="150" align="left" valign=middle><br><img src="result_htm_b1201ce0c5a22261.jpg" width=207 height=109 hspace=49 vspace=22>
                                </td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5><br></font></b></td>
                                <td style="border-bottom: 2px solid #000000" align="left" valign=middle><b><font face="Aharoni" size=5>PT. SARINAH ( PERSERO )</font></b></td>
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
                                <td align="left" valign=middle><br></td>
                                <td style="border-top: 2px solid #000000" align="left" valign=middle><b><font size=4>Jl. MH Thamrin No 11 Jakarta 10350</font></b></td>
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
                                <td align="left" valign=middle><b><font size=5><br></font></b></td>
                                <td align="left" valign=middle><b><font size=5><br></font></b></td>
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
					<!-- </div> -->
				<!-- </div> -->
				<!-- <div class="invoice-price">
					<div class="invoice-price-left">
						<div class="invoice-price-row">
							<div class="sub-price">
								<small>SUBTOTAL</small>
								<span class="text-inverse">$4,500.00</span>
							</div>
							<div class="sub-price">
								<i class="fa fa-plus text-muted"></i>
							</div>
							<div class="sub-price">
								<small>PAYPAL FEE (5.4%)</small>
								<span class="text-inverse">$108.00</span>
							</div>
						</div>
					</div>
					<div class="invoice-price-right">
						<small>TOTAL</small> <span class="f-w-600">$4508.00</span>
					</div>
				</div> -->
			</div>
			<!-- <div class="invoice-note">
				* Make all cheques payable to [Your Company Name]<br />
				* Payment is due within 30 days<br />
				* If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
			</div> -->
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
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
</body>
</html>
