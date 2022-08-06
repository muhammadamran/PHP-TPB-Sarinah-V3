<?php 
function curl($url){
   $ch = curl_init(); 
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
   $output = curl_exec($ch);  
   curl_close($ch);      
   return $output;
}
?>
<!-- // Total Tables -->
<?php
$curl_total_tables = curl("http://117.54.102.106/APITPB/api.php?function=get_total_tables");
$data_total_tables = json_decode($curl_total_tables, TRUE);
?>
<h1>Total <?= $data_total_tables['result']; ?> Tables TPB Local</h1>
<hr>
<br>
<!-- // 1 -->
<?php
$curl_aktivasi_aplikasi = curl("http://117.54.102.106/APITPB/api.php?function=get_aktivasi_aplikasi");
$data_aktivasi_aplikasi = json_decode($curl_aktivasi_aplikasi, TRUE);
?>
<!-- // Record echo aktivasi_aplikasi"; -->
<b>Data aktivasi_aplikasi: </b><?= $data_aktivasi_aplikasi['result']; ?> Record
<br> 

<!-- // 2 -->
<?php
$curl_hasil_validasi_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_hasil_validasi_barang");
$data_hasil_validasi_barang = json_decode($curl_hasil_validasi_barang, TRUE);
?>
<!-- // Record echo hasil_validasi_barang"; -->
<b>Data hasil_validasi_header: </b><?= $data_hasil_validasi_barang['result'];?> Record
<br>

<!-- // 3 -->
<?php
$curl_hasil_validasi_header = curl("http://117.54.102.106/APITPB/api.php?function=get_hasil_validasi_header");
$data_hasil_validasi_header = json_decode($curl_hasil_validasi_header, TRUE);
?>
<!-- // Record echo hasil_validasi_header"; -->
<b>Data hasil_validasi_header: </b><?= $data_hasil_validasi_header['result'];?> Record
<br>  

<!-- // 4 -->
<?php
$curl_referensi_asal_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_asal_barang");
$data_referensi_asal_barang = json_decode($curl_referensi_asal_barang, TRUE);
?>
<!-- // Record echo referensi_asal_barang"; -->
<b>Data referensi_asal_barang: </b><?= $data_referensi_asal_barang['result'];?> Record
<br>  

<!-- // 5 -->
<?php
$curl_referensi_asal_data = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_asal_data");
$data_referensi_asal_data = json_decode($curl_referensi_asal_data, TRUE);
?>
<!-- // Record echo referensi_asal_data"; -->
<b>Data referensi_asal_data: </b><?= $data_referensi_asal_data['result'];?> Record
<br>  

<!-- // 6 -->
<?php
$curl_referensi_asuransi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_asuransi");
$data_referensi_asuransi = json_decode($curl_referensi_asuransi, TRUE);
?>
<!-- // Record echo referensi_asuransi"; -->
<b>Data referensi_asuransi: </b><?= $data_referensi_asuransi['result'];?> Record
<br>  

<!-- // 7 -->
<?php
$curl_referensi_cara_angkut = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_cara_angkut");
$data_referensi_cara_angkut = json_decode($curl_referensi_cara_angkut, TRUE);
?>
<!-- // Record echo referensi_cara_angkut"; -->
<b>Data referensi_cara_angkut: </b><?= $data_referensi_cara_angkut['result'];?> Record
<br>  

<!-- // 8 -->
<?php
$curl_referensi_cara_bayar = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_cara_bayar");
$data_referensi_cara_bayar = json_decode($curl_referensi_cara_bayar, TRUE);
?>
<!-- // Record echo referensi_cara_bayar"; -->
<b>Data referensi_cara_bayar: </b><?= $data_referensi_cara_bayar['result'];?> Record
<br>  

<!-- // 9 -->
<?php
$curl_referensi_daerah = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_daerah");
$data_referensi_daerah = json_decode($curl_referensi_daerah, TRUE);
?>
<!-- // Record echo referensi_daerah"; -->
<b>Data referensi_daerah: </b><?= $data_referensi_daerah['result'];?> Record
<br>  

<!-- // 10 -->
<?php
$curl_referensi_dokumen = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_dokumen");
$data_referensi_dokumen = json_decode($curl_referensi_dokumen, TRUE);
?>
<!-- // Record echo referensi_dokumen"; -->
<b>Data referensi_dokumen: </b><?= $data_referensi_dokumen['result'];?> Record
<br>  

<!-- // 11 -->
<?php
$curl_referensi_dokumen_pabean = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_dokumen_pabean");
$data_referensi_dokumen_pabean = json_decode($curl_referensi_dokumen_pabean, TRUE);
?>
<!-- // Record echo referensi_dokumen_pabean"; -->
<b>Data referensi_dokumen_pabean: </b><?= $data_referensi_dokumen_pabean['result'];?> Record
<br>  

<!-- // 12 -->
<?php
$curl_referensi_fasilitas = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_fasilitas");
$data_referensi_fasilitas = json_decode($curl_referensi_fasilitas, TRUE);
?>
<!-- // Record echo referensi_fasilitas"; -->
<b>Data referensi_fasilitas: </b><?= $data_referensi_fasilitas['result'];?> Record
<br>  

<!-- // 13 -->
<?php
$curl_referensi_filter_komunikasi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_filter_komunikasi");
$data_referensi_filter_komunikasi = json_decode($curl_referensi_filter_komunikasi, TRUE);
?>
<!-- // Record echo referensi_filter_komunikasi"; -->
<b>Data referensi_filter_komunikasi: </b><?= $data_referensi_filter_komunikasi['result'];?> Record
<br>  

<!-- // 14 -->
<?php
$curl_referensi_harga = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_harga");
$data_referensi_harga = json_decode($curl_referensi_harga, TRUE);
?>
<!-- // Record echo referensi_harga"; -->
<b>Data referensi_harga: </b><?= $data_referensi_harga['result'];?> Record
<br>  

<!-- // 15 -->
<?php
$curl_referensi_identitas = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_identitas");
$data_referensi_identitas = json_decode($curl_referensi_identitas, TRUE);
?>
<!-- // Record echo referensi_identitas"; -->
<b>Data referensi_identitas: </b><?= $data_referensi_identitas['result'];?> Record
<br>  

<!-- // 16 -->
<?php
$curl_referensi_jenis_api = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_api");
$data_referensi_jenis_api = json_decode($curl_referensi_jenis_api, TRUE);
?>
<!-- // Record echo referensi_jenis_api"; -->
<b>Data referensi_jenis_api: </b><?= $data_referensi_jenis_api['result'];?> Record
<br>  

<!-- // 17 -->
<?php
$curl_referensi_jenis_bc25 = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_bc25");
$data_referensi_jenis_bc25 = json_decode($curl_referensi_jenis_bc25, TRUE);
?>
<!-- // Record echo referensi_jenis_bc25"; -->
<b>Data referensi_jenis_bc25: </b><?= $data_referensi_jenis_bc25['result'];?> Record
<br>  

<!-- // 18 -->
<?php
$curl_referensi_jenis_jaminan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_jaminan");
$data_referensi_jenis_jaminan = json_decode($curl_referensi_jenis_jaminan, TRUE);
?>
<!-- // Record echo referensi_jenis_jaminan"; -->
<b>Data referensi_jenis_jaminan: </b><?= $data_referensi_jenis_jaminan['result'];?> Record
<br>  

<!-- // 19 -->
<?php
$curl_referensi_jenis_kendaraan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_kendaraan");
$data_referensi_jenis_kendaraan = json_decode($curl_referensi_jenis_kendaraan, TRUE);
?>
<!-- // Record echo referensi_jenis_kendaraan"; -->
<b>Data referensi_jenis_kendaraan: </b><?= $data_referensi_jenis_kendaraan['result'];?> Record
<br>  

<!-- // 20 -->
<?php
$curl_referensi_jenis_nilai = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_nilai");
$data_referensi_jenis_nilai = json_decode($curl_referensi_jenis_nilai, TRUE);
?>
<!-- // Record echo referensi_jenis_nilai"; -->
<b>Data referensi_jenis_nilai: </b><?= $data_referensi_jenis_nilai['result'];?> Record
<br>  

<!-- // 21 -->
<?php
$curl_referensi_jenis_pemasukan01 = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_pemasukan01");
$data_referensi_jenis_pemasukan01 = json_decode($curl_referensi_jenis_pemasukan01, TRUE);
?>
<!-- // Record echo referensi_jenis_pemasukan01"; -->
<b>Data referensi_jenis_pemasukan01: </b><?= $data_referensi_jenis_pemasukan01['result'];?> Record
<br>  

<!-- // 22 -->
<?php
$curl_referensi_jenis_pemasukan02 = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_pemasukan02");
$data_referensi_jenis_pemasukan02 = json_decode($curl_referensi_jenis_pemasukan02, TRUE);
?>
<!-- // Record echo referensi_jenis_pemasukan02"; -->
<b>Data referensi_jenis_pemasukan02: </b><?= $data_referensi_jenis_pemasukan02['result'];?> Record
<br>  

<!-- // 23 -->
<?php
$curl_referensi_jenis_tanda_pengaman = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_tanda_pengaman");
$data_referensi_jenis_tanda_pengaman = json_decode($curl_referensi_jenis_tanda_pengaman, TRUE);
?>
<!-- // Record echo referensi_jenis_tanda_pengaman"; -->
<b>Data referensi_jenis_tanda_pengaman: </b><?= $data_referensi_jenis_tanda_pengaman['result'];?> Record
<br>  

<!-- // 24 -->
<?php
$curl_referensi_jenis_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_tarif");
$data_referensi_jenis_tarif = json_decode($curl_referensi_jenis_tarif, TRUE);
?>
<!-- // Record echo referensi_jenis_tarif"; -->
<b>Data referensi_jenis_tarif: </b><?= $data_referensi_jenis_tarif['result'];?> Record
<br>  

<!-- // 25 -->
<?php
$curl_referensi_jenis_tpb = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_tpb");
$data_referensi_jenis_tpb = json_decode($curl_referensi_jenis_tpb, TRUE);
?>
<!-- // Record echo referensi_jenis_tpb"; -->
<b>Data referensi_jenis_tpb: </b><?= $data_referensi_jenis_tpb['result'];?> Record
<br>  

<!-- // 26 -->
<?php
$curl_referensi_kantor_pabean = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kantor_pabean");
$data_referensi_kantor_pabean = json_decode($curl_referensi_kantor_pabean, TRUE);
?>
<!-- // Record echo referensi_kantor_pabean"; -->
<b>Data referensi_kantor_pabean: </b><?= $data_referensi_kantor_pabean['result'];?> Record
<br>  

<!-- // 27 -->
<?php
$curl_referensi_kapal = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kapal");
$data_referensi_kapal = json_decode($curl_referensi_kapal, TRUE);
?>
<!-- // Record echo referensi_kapal"; -->
<b>Data referensi_kapal: </b><?= $data_referensi_kapal['result'];?> Record
<br>  

<!-- // 28 -->
<?php
$curl_referensi_kategori_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kategori_barang");
$data_referensi_kategori_barang = json_decode($curl_referensi_kategori_barang, TRUE);
?>
<!-- // Record echo referensi_kategori_barang"; -->
<b>Data referensi_kategori_barang: </b><?= $data_referensi_kategori_barang['result'];?> Record
<br>  

<!-- // 29 -->
<?php
$curl_referensi_kategori_barangbc25 = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kategori_barangbc25");
$data_referensi_kategori_barangbc25 = json_decode($curl_referensi_kategori_barangbc25, TRUE);
?>
<!-- // Record echo referensi_kategori_barangbc25"; -->
<b>Data referensi_kategori_barangbc25: </b><?= $data_referensi_kategori_barangbc25['result'];?> Record
<br>  

<!-- // 30 -->
<?php
$curl_referensi_kemasan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kemasan");
$data_referensi_kemasan = json_decode($curl_referensi_kemasan, TRUE);
?>
<!-- // Record echo referensi_kemasan"; -->
<b>Data referensi_kemasan: </b><?= $data_referensi_kemasan['result'];?> Record
<br>  

<!-- // 31 -->
<?php
$curl_referensi_kode_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kode_barang");
$data_referensi_kode_barang = json_decode($curl_referensi_kode_barang, TRUE);
?>
<!-- // Record echo referensi_kode_barang"; -->
<b>Data referensi_kode_barang: </b><?= $data_referensi_kode_barang['result'];?> Record
<br>  

<!-- // 32 -->
<?php
$curl_referensi_kode_guna = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kode_guna");
$data_referensi_kode_guna = json_decode($curl_referensi_kode_guna, TRUE);
?>
<!-- // Record echo referensi_kode_guna"; -->
<b>Data referensi_kode_guna: </b><?= $data_referensi_kode_guna['result'];?> Record
<br>  

<!-- // 33 -->
<?php
$curl_referensi_kode_id = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kode_id");
$data_referensi_kode_id = json_decode($curl_referensi_kode_id, TRUE);
?>
<!-- // Record echo referensi_kode_id"; -->
<b>Data referensi_kode_id: </b><?= $data_referensi_kode_id['result'];?> Record
<br>  

<!-- // 34 -->
<?php
$curl_referensi_komoditi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_komoditi");
$data_referensi_komoditi = json_decode($curl_referensi_komoditi, TRUE);
?>
<!-- // Record echo referensi_komoditi"; -->
<b>Data referensi_komoditi: </b><?= $data_referensi_komoditi['result'];?> Record
<br>  

<!-- // 35 -->
<?php
$curl_referensi_kondisi_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kondisi_barang");
$data_referensi_kondisi_barang = json_decode($curl_referensi_kondisi_barang, TRUE);
?>
<!-- // Record echo referensi_kondisi_barang"; -->
<b>Data referensi_kondisi_barang: </b><?= $data_referensi_kondisi_barang['result'];?> Record
<br>  

<!-- // 36 -->
<?php
$curl_referensi_lokasi_bayar = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_lokasi_bayar");
$data_referensi_lokasi_bayar = json_decode($curl_referensi_lokasi_bayar, TRUE);
?>
<!-- // Record echo referensi_lokasi_bayar"; -->
<b>Data referensi_lokasi_bayar: </b><?= $data_referensi_lokasi_bayar['result'];?> Record
<br>  

<!-- // 37 -->
<?php
$curl_referensi_mata_uang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_mata_uang");
$data_referensi_mata_uang = json_decode($curl_referensi_mata_uang, TRUE);
?>
<!-- // Record echo referensi_mata_uang"; -->
<b>Data referensi_mata_uang: </b><?= $data_referensi_mata_uang['result'];?> Record
<br>  

<!-- // 38 -->
<?php
$curl_referensi_negara = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_negara");
$data_referensi_negara = json_decode($curl_referensi_negara, TRUE);
?>
<!-- // Record echo referensi_negara"; -->
<b>Data referensi_negara: </b><?= $data_referensi_negara['result'];?> Record
<br>  

<!-- // 39 -->
<?php
$curl_referensi_npwp_billing = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_npwp_billing");
$data_referensi_npwp_billing = json_decode($curl_referensi_npwp_billing, TRUE);
?>
<!-- // Record echo referensi_npwp_billing"; -->
<b>Data referensi_npwp_billing: </b><?= $data_referensi_npwp_billing['result'];?> Record
<br>  

<!-- // 40 -->
<?php
$curl_referensi_pelabuhan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pelabuhan");
$data_referensi_pelabuhan = json_decode($curl_referensi_pelabuhan, TRUE);
?>
<!-- // Record echo referensi_pelabuhan"; -->
<b>Data referensi_pelabuhan: </b><?= $data_referensi_pelabuhan['result'];?> Record
<br>  

<!-- // 41 -->
<?php
$curl_referensi_pemasok = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pemasok");
$data_referensi_pemasok = json_decode($curl_referensi_pemasok, TRUE);
?>
<!-- // Record echo referensi_pemasok"; -->
<b>Data referensi_pemasok: </b><?= $data_referensi_pemasok['result'];?> Record
<br>  

<!-- // 42 -->
<?php
$curl_referensi_pembayar = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pembayar");
$data_referensi_pembayar = json_decode($curl_referensi_pembayar, TRUE);
?>
<!-- // Record echo referensi_pembayar"; -->
<b>Data referensi_pembayar: </b><?= $data_referensi_pembayar['result'];?> Record
<br>  

<!-- // 43 -->
<?php
$curl_referensi_pengusaha = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pengusaha");
$data_referensi_pengusaha = json_decode($curl_referensi_pengusaha, TRUE);
?>
<!-- // Record echo referensi_pengusaha"; -->
<b>Data referensi_pengusaha: </b><?= $data_referensi_pengusaha['result'];?> Record
<br>  

<!-- // 44 -->
<?php
$curl_referensi_pilihan_komunikasi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pilihan_komunikasi");
$data_referensi_pilihan_komunikasi = json_decode($curl_referensi_pilihan_komunikasi, TRUE);
?>
<!-- // Record echo referensi_pilihan_komunikasi"; -->
<b>Data referensi_pilihan_komunikasi: </b><?= $data_referensi_pilihan_komunikasi['result'];?> Record
<br>  

<!-- // 45 -->
<?php
$curl_referensi_pos_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pos_tarif");
$data_referensi_pos_tarif = json_decode($curl_referensi_pos_tarif, TRUE);
?>
<!-- // Record echo referensi_pos_tarif"; -->
<b>Data referensi_pos_tarif: </b><?= $data_referensi_pos_tarif['result'];?> Record
<br>  

<!-- // 46 -->
<?php
$curl_referensi_ppjk = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_ppjk");
$data_referensi_ppjk = json_decode($curl_referensi_ppjk, TRUE);
?>
<!-- // Record echo referensi_ppjk"; -->
<b>Data referensi_ppjk: </b><?= $data_referensi_ppjk['result'];?> Record
<br>  

<!-- // 47 -->
<?php
$curl_referensi_pungutan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pungutan");
$data_referensi_pungutan = json_decode($curl_referensi_pungutan, TRUE);
?>
<!-- // Record echo referensi_pungutan"; -->
<b>Data referensi_pungutan: </b><?= $data_referensi_pungutan['result'];?> Record
<br>  

<!-- // 48 -->
<?php
$curl_referensi_refeteks = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_refeteks");
$data_referensi_refeteks = json_decode($curl_referensi_refeteks, TRUE);
?>
<!-- // Record echo referensi_refeteks"; -->
<b>Data referensi_refeteks: </b><?= $data_referensi_refeteks['result'];?> Record
<br>  

<!-- // 49 -->
<?php
$curl_referensi_respon = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_respon");
$data_referensi_respon = json_decode($curl_referensi_respon, TRUE);
?>
<!-- // Record echo referensi_respon"; -->
<b>Data referensi_respon: </b><?= $data_referensi_respon['result'];?> Record
<br>  

<!-- // 50 -->
<?php
$curl_referensi_satuan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_satuan");
$data_referensi_satuan = json_decode($curl_referensi_satuan, TRUE);
?>
<!-- // Record echo referensi_satuan"; -->
<b>Data referensi_satuan: </b><?= $data_referensi_satuan['result'];?> Record
<br>  

<!-- // 51 -->
<?php
$curl_referensi_skema_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_skema_tarif");
$data_referensi_skema_tarif = json_decode($curl_referensi_skema_tarif, TRUE);
?>
<!-- // Record echo referensi_skema_tarif"; -->
<b>Data referensi_skema_tarif: </b><?= $data_referensi_skema_tarif['result'];?> Record
<br>  

<!-- // 52 -->
<?php
$curl_referensi_status = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_status");
$data_referensi_status = json_decode($curl_referensi_status, TRUE);
?>
<!-- // Record echo referensi_status"; -->
<b>Data referensi_status: </b><?= $data_referensi_status['result'];?> Record
<br>  

<!-- // 53 -->
<?php
$curl_referensi_status_pengusaha = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_status_pengusaha");
$data_referensi_status_pengusaha = json_decode($curl_referensi_status_pengusaha, TRUE);
?>
<!-- // Record echo referensi_status_pengusaha"; -->
<b>Data referensi_status_pengusaha: </b><?= $data_referensi_status_pengusaha['result'];?> Record
<br>  

<!-- // 54 -->
<?php
$curl_referensi_tarif_fasilitas = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tarif_fasilitas");
$data_referensi_tarif_fasilitas = json_decode($curl_referensi_tarif_fasilitas, TRUE);
?>
<!-- // Record echo referensi_tarif_fasilitas"; -->
<b>Data referensi_tarif_fasilitas: </b><?= $data_referensi_tarif_fasilitas['result'];?> Record
<br>  

<!-- // 55 -->
<?php
$curl_referensi_tipe_kontainer = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tipe_kontainer");
$data_referensi_tipe_kontainer = json_decode($curl_referensi_tipe_kontainer, TRUE);
?>
<!-- // Record echo referensi_tipe_kontainer"; -->
<b>Data referensi_tipe_kontainer: </b><?= $data_referensi_tipe_kontainer['result'];?> Record
<br>  

<!-- // 56 -->
<?php
$curl_referensi_tps = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tps");
$data_referensi_tps = json_decode($curl_referensi_tps, TRUE);
?>
<!-- // Record echo referensi_tps"; -->
<b>Data referensi_tps: </b><?= $data_referensi_tps['result'];?> Record
<br>  

<!-- // 57 -->
<?php
$curl_referensi_tujuan_pemasukan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tujuan_pemasukan");
$data_referensi_tujuan_pemasukan = json_decode($curl_referensi_tujuan_pemasukan, TRUE);
?>
<!-- // Record echo referensi_tujuan_pemasukan"; -->
<b>Data referensi_tujuan_pemasukan: </b><?= $data_referensi_tujuan_pemasukan['result'];?> Record
<br>  

<!-- // 58 -->
<?php
$curl_referensi_tujuan_pengiriman = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tujuan_pengiriman");
$data_referensi_tujuan_pengiriman = json_decode($curl_referensi_tujuan_pengiriman, TRUE);
?>
<!-- // Record echo referensi_tujuan_pengiriman"; -->
<b>Data referensi_tujuan_pengiriman: </b><?= $data_referensi_tujuan_pengiriman['result'];?> Record
<br>  

<!-- // 59 -->
<?php
$curl_referensi_tujuan_tpb = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tujuan_tpb");
$data_referensi_tujuan_tpb = json_decode($curl_referensi_tujuan_tpb, TRUE);
?>
<!-- // Record echo referensi_tujuan_tpb"; -->
<b>Data referensi_tujuan_tpb: </b><?= $data_referensi_tujuan_tpb['result'];?> Record
<br>  

<!-- // 60 -->
<?php
$curl_referensi_tutup_pu = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tutup_pu");
$data_referensi_tutup_pu = json_decode($curl_referensi_tutup_pu, TRUE);
?>
<!-- // Record echo referensi_tutup_pu"; -->
<b>Data referensi_tutup_pu: </b><?= $data_referensi_tutup_pu['result'];?> Record
<br>  

<!-- // 61 -->
<?php
$curl_referensi_ukuran_kontainer = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_ukuran_kontainer");
$data_referensi_ukuran_kontainer = json_decode($curl_referensi_ukuran_kontainer, TRUE);
?>
<!-- // Record echo referensi_ukuran_kontainer"; -->
<b>Data referensi_ukuran_kontainer: </b><?= $data_referensi_ukuran_kontainer['result'];?> Record
<br>  

<!-- // 62 -->
<?php
$curl_referensi_validasi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_validasi");
$data_referensi_validasi = json_decode($curl_referensi_validasi, TRUE);
?>
<!-- // Record echo referensi_validasi"; -->
<b>Data referensi_validasi: </b><?= $data_referensi_validasi['result'];?> Record
<br>  

<!-- // 63 -->
<?php
$curl_referensi_validasi_jenis_nilai = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_validasi_jenis_nilai");
$data_referensi_validasi_jenis_nilai = json_decode($curl_referensi_validasi_jenis_nilai, TRUE);
?>
<!-- // Record echo referensi_validasi_jenis_nilai"; -->
<b>Data referensi_validasi_jenis_nilai: </b><?= $data_referensi_validasi_jenis_nilai['result'];?> Record
<br>  

<!-- // 64 -->
<?php
$curl_referensi_valuta = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_valuta");
$data_referensi_valuta = json_decode($curl_referensi_valuta, TRUE);
?>
<!-- // Record echo referensi_valuta"; -->
<b>Data referensi_valuta: </b><?= $data_referensi_valuta['result'];?> Record
<br>  

<!-- // 65 -->
<?php
$curl_setting_aplikasi = curl("http://117.54.102.106/APITPB/api.php?function=get_setting_aplikasi");
$data_setting_aplikasi = json_decode($curl_setting_aplikasi, TRUE);
?>
<!-- // Record echo setting_aplikasi"; -->
<b>Data setting_aplikasi: </b><?= $data_setting_aplikasi['result'];?> Record
<br>  

<!-- // 66 -->
<?php
$curl_tbl_aktifitas = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_aktifitas");
$data_tbl_aktifitas = json_decode($curl_tbl_aktifitas, TRUE);
?>
<!-- // Record echo tbl_aktifitas"; -->
<b>Data tbl_aktifitas: </b><?= $data_tbl_aktifitas['result'];?> Record
<br>  

<!-- // 67 -->
<?php
$curl_tbl_department = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_department");
$data_tbl_department = json_decode($curl_tbl_department, TRUE);
?>
<!-- // Record echo tbl_department"; -->
<b>Data tbl_department: </b><?= $data_tbl_department['result'];?> Record
<br>  

<!-- // 68 -->
<?php
$curl_tbl_faq = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_faq");
$data_tbl_faq = json_decode($curl_tbl_faq, TRUE);
?>
<!-- // Record echo tbl_faq"; -->
<b>Data tbl_faq: </b><?= $data_tbl_department['result'];?> Record
<br>

<!-- // 69 -->
<?php
$curl_tbl_informasi = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_informasi");
$data_tbl_informasi = json_decode($curl_tbl_informasi, TRUE);
?>
<!-- // Record echo tbl_informasi"; -->
<b>Data tbl_informasi: </b><?= $data_tbl_informasi['result'];?> Record
<br>  

<!-- // 70 -->
<?php
$curl_tbl_jabatan = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_jabatan");
$data_tbl_jabatan = json_decode($curl_tbl_jabatan, TRUE);
?>
<!-- // Record echo tbl_jabatan"; -->
<b>Data tbl_jabatan: </b><?= $data_tbl_jabatan['result'];?> Record
<br>  

<!-- // 71 -->
<?php
$curl_tbl_log = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_log");
$data_tbl_log = json_decode($curl_tbl_log, TRUE);
?>
<!-- // Record echo tbl_log"; -->
<b>Data tbl_log: </b><?= $data_tbl_log['result'];?> Record
<br>

<!-- // 72 -->
<?php
$curl_tbl_pegawai = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_pegawai");
$data_tbl_pegawai = json_decode($curl_tbl_pegawai, TRUE);
?>
<!-- // Record echo tbl_pegawai"; -->
<b>Data tbl_pegawai: </b><?= $data_tbl_pegawai['result'];?> Record
<br>  

<!-- // 73 -->
<?php
$curl_tbl_realtime = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_realtime");
$data_tbl_realtime = json_decode($curl_tbl_realtime, TRUE);
?>
<!-- // Record echo tbl_realtime"; -->
<b>Data tbl_realtime: </b><?= $data_tbl_realtime['result'];?> Record
<br>  

<!-- // 74 -->
<?php
$curl_tbl_role = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_role");
$data_tbl_role = json_decode($curl_tbl_role, TRUE);
?>
<!-- // Record echo tbl_role"; -->
<b>Data tbl_role: </b><?= $data_tbl_role['result'];?> Record
<br>

<!-- // 75 -->
<?php
$curl_tbl_setting = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_setting");
$data_tbl_setting = json_decode($curl_tbl_setting, TRUE);
?>
<!-- // Record echo tbl_setting"; -->
<b>Data tbl_setting: </b><?= $data_tbl_setting['result'];?> Record
<br>  

<!-- // 76 -->
<?php
$curl_tbl_users = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_users");
$data_tbl_users = json_decode($curl_tbl_users, TRUE);
?>
<!-- // Record echo tbl_users"; -->
<b>Data tbl_users: </b><?= $data_tbl_users['result'];?> Record
<br>  

<!-- // 77 -->
<?php
$curl_tpb_bahan_baku = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_bahan_baku");
$data_tpb_bahan_baku = json_decode($curl_tpb_bahan_baku, TRUE);
?>
<!-- // Record echo tpb_bahan_baku"; -->
<b>Data tpb_bahan_baku: </b><?= $data_tpb_bahan_baku['result'];?> Record
<br>  

<!-- // 78 -->
<?php
$curl_tpb_bahan_baku_dokumen = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_bahan_baku_dokumen");
$data_tpb_bahan_baku_dokumen = json_decode($curl_tpb_bahan_baku_dokumen, TRUE);
?>
<!-- // Record echo tpb_bahan_baku_dokumen"; -->
<b>Data tpb_bahan_baku_dokumen: </b><?= $data_tpb_bahan_baku_dokumen['result'];?> Record
<br>  

<!-- // 79 -->
<?php
$curl_tpb_bahan_baku_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_bahan_baku_tarif");
$data_tpb_bahan_baku_tarif = json_decode($curl_tpb_bahan_baku_tarif, TRUE);
?>
<!-- // Record echo tpb_bahan_baku_tarif"; -->
<b>Data tpb_bahan_baku_tarif: </b><?= $data_tpb_bahan_baku_tarif['result'];?> Record
<br>  

<!-- // 80 -->
<?php
$curl_tpb_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_barang");
$data_tpb_barang = json_decode($curl_tpb_barang, TRUE);
?>
<!-- // Record echo tpb_barang"; -->
<b>Data tpb_barang: </b><?= $data_tpb_barang['result'];?> Record
<br>  

<!-- // 81 -->
<?php
$curl_tpb_barang_dokumen = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_barang_dokumen");
$data_tpb_barang_dokumen = json_decode($curl_tpb_barang_dokumen, TRUE);
?>
<!-- // Record echo tpb_barang_dokumen"; -->
<b>Data tpb_barang_dokumen: </b><?= $data_tpb_barang_dokumen['result'];?> Record
<br>  

<!-- // 82 -->
<?php
$curl_tpb_barang_penerima = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_barang_penerima");
$data_tpb_barang_penerima = json_decode($curl_tpb_barang_penerima, TRUE);
?>
<!-- // Record echo tpb_barang_penerima"; -->
<b>Data tpb_barang_penerima: </b><?= $data_tpb_barang_penerima['result'];?> Record
<br>  

<!-- // 83 -->
<?php
$curl_tpb_barang_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_barang_tarif");
$data_tpb_barang_tarif = json_decode($curl_tpb_barang_tarif, TRUE);
?>
<!-- // Record echo tpb_barang_tarif"; -->
<b>Data tpb_barang_tarif: </b><?= $data_tpb_barang_tarif['result'];?> Record
<br>  

<!-- // 84 -->
<?php
$curl_tpb_detil_status = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_detil_status");
$data_tpb_detil_status = json_decode($curl_tpb_detil_status, TRUE);
?>
<!-- // Record echo tpb_detil_status"; -->
<b>Data tpb_detil_status: </b><?= $data_tpb_detil_status['result'];?> Record
<br>  

<!-- // 85 -->
<?php
$curl_tpb_dokumen = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_dokumen");
$data_tpb_dokumen = json_decode($curl_tpb_dokumen, TRUE);
?>
<!-- // Record echo tpb_dokumen"; -->
<b>Data tpb_dokumen: </b><?= $data_tpb_dokumen['result'];?> Record
<br>  

<!-- // 86 -->
<?php
$curl_tpb_header = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_header");
$data_tpb_header = json_decode($curl_tpb_header, TRUE);
?>
<!-- // Record echo tpb_header"; -->
<b>Data tpb_header: </b><?= $data_tpb_header['result'];?> Record
<br>  

<!-- // 87 -->
<?php
$curl_tpb_jaminan = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_jaminan");
$data_tpb_jaminan = json_decode($curl_tpb_jaminan, TRUE);
?>
<!-- // Record echo tpb_jaminan"; -->
<b>Data tpb_jaminan: </b><?= $data_tpb_jaminan['result'];?> Record
<br>  

<!-- // 88 -->
<?php
$curl_tpb_kemasan = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_kemasan");
$data_tpb_kemasan = json_decode($curl_tpb_kemasan, TRUE);
?>
<!-- // Record echo tpb_kemasan"; -->
<b>Data tpb_kemasan: </b><?= $data_tpb_kemasan['result'];?> Record
<br>  

<!-- // 89 -->
<?php
$curl_tpb_kontainer = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_kontainer");
$data_tpb_kontainer = json_decode($curl_tpb_kontainer, TRUE);
?>
<!-- // Record echo tpb_kontainer"; -->
<b>Data tpb_kontainer: </b><?= $data_tpb_kontainer['result'];?> Record
<br>  

<!-- // 90 -->
<?php
$curl_tpb_npwp_billing = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_npwp_billing");
$data_tpb_npwp_billing = json_decode($curl_tpb_npwp_billing, TRUE);
?>
<!-- // Record echo tpb_npwp_billing"; -->
<b>Data tpb_npwp_billing: </b><?= $data_tpb_npwp_billing['result'];?> Record
<br>  

<!-- // 91 -->
<?php
$curl_tpb_penerima = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_penerima");
$data_tpb_penerima = json_decode($curl_tpb_penerima, TRUE);
?>
<!-- // Record echo tpb_penerima"; -->
<b>Data tpb_penerima: </b><?= $data_tpb_penerima['result'];?> Record
<br>  

<!-- // 92 -->
<?php
$curl_tpb_pungutan = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_pungutan");
$data_tpb_pungutan = json_decode($curl_tpb_pungutan, TRUE);
?>
<!-- // Record echo tpb_pungutan"; -->
<b>Data tpb_pungutan: </b><?= $data_tpb_pungutan['result'];?> Record
<br>  

<!-- // 93 -->
<?php
$curl_tpb_respon = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_respon");
$data_tpb_respon = json_decode($curl_tpb_respon, TRUE);
?>
<!-- // Record echo tpb_respon"; -->
<b>Data tpb_respon: </b><?= $data_tpb_respon['result'];?> Record
<br>  

<!-- // 94 -->
<?php
$curl_user_manajemen = curl("http://117.54.102.106/APITPB/api.php?function=get_user_manajemen");
$data_user_manajemen = json_decode($curl_user_manajemen, TRUE);
?>
<!-- // Record echo user_manajemen"; -->
<b>Data user_manajemen: </b><?= $data_user_manajemen['result'];?> Record
<br>  