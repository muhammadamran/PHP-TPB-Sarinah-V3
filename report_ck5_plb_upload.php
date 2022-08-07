<?php
// include 'Classes/PHPExcelSheet.php';
// include "include/connection.php";	
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if (isset($_FILES["file_upload"])) {
	$dir = "files/ck5plb/";
	$timeUpload = date('Y-m-d h:m:i');
	$file_name = $timeUpload."_".$_FILES["file_upload"]["name"];
	$size = $_FILES["file_upload"]["size"];
	$tmp_file_name = $_FILES["file_upload"]["tmp_name"];
	move_uploaded_file($tmp_file_name, $dir . $file_name);

	// For Name Row Excel
	// $NameHeader  			= $_POST['Header'];
	// $NameBahanBaku  		= $_POST['BahanBaku'];
	// $NameBahanBakuTarif  	= $_POST['BahanBakuTarif'];
	// $NameBahanBakuDokumen  	= $_POST['BahanBakuDokumen'];
	// $NameBarang  			= $_POST['Barang'];
	// $NameBarangTarif  		= $_POST['BarangTarif'];
	// $NameBarangDokumen  	= $_POST['BarangDokumen'];
	// $NameDokumen  			= $_POST['Dokumen'];
	// $NameKemasan  			= $_POST['Kemasan'];
	// $NameKontainer  		= $_POST['Kontainer'];
	// $NameRespon  			= $_POST['Respon'];
	// $NameStatus  			= $_POST['Status'];
	// End For Name Row Excel
	

	// FOR AKTIFITAS
	// $me = $_POST['username'];
	// $datame = $dbcon->query("SELECT * FROM view_privileges WHERE USER_NAME='$me'");
	// $resultme = mysqli_fetch_array($datame);

 //    $IDUNIQme             = $resultme['USRIDUNIQ'];
 //    $InputUsername        = $me;
 //    $InputModul           = 'Report/PLB CK5';
 //    $InputDescription     = $me . " Upload Excel PLB CK5 nama file: ".$file_name.", Simpan Data Sebagai Report PLB CK5";
 //    $InputAction          = 'Upload PLB CK5';
 //    $InputDate            = date('Y-m-d h:m:i');

 //    $query = $dbcon->query("INSERT INTO tbl_aktifitas
 //                           (id,IDUNIQ,username,modul,description,action,date_created)
 //                           VALUES
 //                           ('','$IDUNIQme','$InputUsername','$InputModul','$InputDescription','$InputAction','$InputDate')");
   	// var_dump($query);exit;
	
	include 'report_ck5_plb_read_file.php';
    echo "<script>window.location.href='report_ck5_plb.php?UploadSuccess=true';</script>";
} else {
	echo "File not selected";
    echo "<script>window.location.href='report_ck5_plb.php?UploadFailed=true';</script>";
}
