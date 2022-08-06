<?php
include "../include/connection.php";

if(isset($_GET['s_mitra'])){
	$s_mitra = $_GET['s_mitra'];
	$dataGetPengusaha = $dbcon->query("SELECT * FROM referensi_pengusaha WHERE NPWP='$s_mitra'");
	$resultGetPengusaha = mysqli_fetch_array($dataGetPengusaha);
	echo "<input type='text' name='ID' class='form-control' value=" . $resultGetPengusaha['ID'] . ">";
	echo "<input type='text' name='NAMA' class='form-control' value=" . $resultGetPengusaha['NAMA'] . ">";
}

if(isset($_GET['c_id'])){
	$c_id = $_GET['c_id'];
	$dataGetPengusaha = $dbcon->query("SELECT * FROM referensi_pengusaha WHERE NPWP='$c_id'");
	$resultGetPengusaha = mysqli_fetch_array($dataGetPengusaha);
	echo "<textarea type='text' class='for-area-one-oke' name='ALAMAT'>" . $resultGetPengusaha['ALAMAT'] . "</textarea>";
}

// KodeOne
if(isset($_GET['c_kode_one'])){
	$c_kode_one = $_GET['c_kode_one'];
	$dataGetPengusaha = $dbcon->query("SELECT * FROM referensi_kantor_pabean WHERE KODE_KANTOR='$c_kode_one'");
	$resultGetPengusaha = mysqli_fetch_array($dataGetPengusaha);
	echo "<input type='text' style='border: transparent;width: 70px' value=" . $resultGetPengusaha['KODE_KANTOR'] . ">";
	echo "<input type='hidden' name='InputKodeOneUraianKantor' value=" . $resultGetPengusaha['URAIAN_KANTOR'] . ">";
}
// KodeTwo
if(isset($_GET['c_kode_two'])){
	$c_kode_two = $_GET['c_kode_two'];
	$dataGetPengusaha = $dbcon->query("SELECT * FROM referensi_kantor_pabean WHERE KODE_KANTOR='$c_kode_two'");
	$resultGetPengusaha = mysqli_fetch_array($dataGetPengusaha);
	echo "<input type='text' style='border: transparent;width: 70px' value=" . $resultGetPengusaha['KODE_KANTOR'] . ">";
	echo "<input type='hidden' name='InputKodeTwoUraianKantor' value=" . $resultGetPengusaha['URAIAN_KANTOR'] . ">";
}
// KodeThree
if(isset($_GET['c_kode_three'])){
	$c_kode_three = $_GET['c_kode_three'];
	$dataGetPengusaha = $dbcon->query("SELECT * FROM referensi_kantor_pabean WHERE KODE_KANTOR='$c_kode_three'");
	$resultGetPengusaha = mysqli_fetch_array($dataGetPengusaha);
	echo "<input type='text' style='border: transparent;width: 70px' value=" . $resultGetPengusaha['KODE_KANTOR'] . ">";
	echo "<input type='hidden' name='InputKodeThreeUraianKantor' value=" . $resultGetPengusaha['URAIAN_KANTOR'] . ">";
}
?>