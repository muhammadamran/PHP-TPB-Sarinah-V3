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

<!-- // 1 -->
<?php
$curl_aktivasi_aplikasi = curl("http://117.54.102.106/APITPB/api.php?function=get_aktivasi_aplikasi");
$data_aktivasi_aplikasi = json_decode($curl_aktivasi_aplikasi, TRUE);
?>

<!-- // 2 -->
<?php
$curl_hasil_validasi_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_hasil_validasi_barang");
$data_hasil_validasi_barang = json_decode($curl_hasil_validasi_barang, TRUE);
?>

<!-- // 3 -->
<?php
$curl_hasil_validasi_header = curl("http://117.54.102.106/APITPB/api.php?function=get_hasil_validasi_header");
$data_hasil_validasi_header = json_decode($curl_hasil_validasi_header, TRUE);
?>

<!-- // 4 -->
<?php
$curl_referensi_asal_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_asal_barang");
$data_referensi_asal_barang = json_decode($curl_referensi_asal_barang, TRUE);
?>

<!-- // 5 -->
<?php
$curl_referensi_asal_data = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_asal_data");
$data_referensi_asal_data = json_decode($curl_referensi_asal_data, TRUE);
?>

<!-- // 6 -->
<?php
$curl_referensi_asuransi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_asuransi");
$data_referensi_asuransi = json_decode($curl_referensi_asuransi, TRUE);
?>

<!-- // 7 -->
<?php
$curl_referensi_cara_angkut = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_cara_angkut");
$data_referensi_cara_angkut = json_decode($curl_referensi_cara_angkut, TRUE);
?>

<!-- // 8 -->
<?php
$curl_referensi_cara_bayar = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_cara_bayar");
$data_referensi_cara_bayar = json_decode($curl_referensi_cara_bayar, TRUE);
?>

<!-- // 9 -->
<?php
$curl_referensi_daerah = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_daerah");
$data_referensi_daerah = json_decode($curl_referensi_daerah, TRUE);
?>

<!-- // 10 -->
<?php
$curl_referensi_dokumen = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_dokumen");
$data_referensi_dokumen = json_decode($curl_referensi_dokumen, TRUE);
?>

<!-- // 11 -->
<?php
$curl_referensi_dokumen_pabean = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_dokumen_pabean");
$data_referensi_dokumen_pabean = json_decode($curl_referensi_dokumen_pabean, TRUE);
?>

<!-- // 12 -->
<?php
$curl_referensi_fasilitas = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_fasilitas");
$data_referensi_fasilitas = json_decode($curl_referensi_fasilitas, TRUE);
?>

<!-- // 13 -->
<?php
$curl_referensi_filter_komunikasi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_filter_komunikasi");
$data_referensi_filter_komunikasi = json_decode($curl_referensi_filter_komunikasi, TRUE);
?>

<!-- // 14 -->
<?php
$curl_referensi_harga = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_harga");
$data_referensi_harga = json_decode($curl_referensi_harga, TRUE);
?>

<!-- // 15 -->
<?php
$curl_referensi_identitas = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_identitas");
$data_referensi_identitas = json_decode($curl_referensi_identitas, TRUE);
?>

<!-- // 16 -->
<?php
$curl_referensi_jenis_api = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_api");
$data_referensi_jenis_api = json_decode($curl_referensi_jenis_api, TRUE);
?>

<!-- // 17 -->
<?php
$curl_referensi_jenis_bc25 = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_bc25");
$data_referensi_jenis_bc25 = json_decode($curl_referensi_jenis_bc25, TRUE);
?>

<!-- // 18 -->
<?php
$curl_referensi_jenis_jaminan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_jaminan");
$data_referensi_jenis_jaminan = json_decode($curl_referensi_jenis_jaminan, TRUE);
?>

<!-- // 19 -->
<?php
$curl_referensi_jenis_kendaraan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_kendaraan");
$data_referensi_jenis_kendaraan = json_decode($curl_referensi_jenis_kendaraan, TRUE);
?>

<!-- // 20 -->
<?php
$curl_referensi_jenis_nilai = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_nilai");
$data_referensi_jenis_nilai = json_decode($curl_referensi_jenis_nilai, TRUE);
?>

<!-- // 21 -->
<?php
$curl_referensi_jenis_pemasukan01 = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_pemasukan01");
$data_referensi_jenis_pemasukan01 = json_decode($curl_referensi_jenis_pemasukan01, TRUE);
?>

<!-- // 22 -->
<?php
$curl_referensi_jenis_pemasukan02 = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_pemasukan02");
$data_referensi_jenis_pemasukan02 = json_decode($curl_referensi_jenis_pemasukan02, TRUE);
?>

<!-- // 23 -->
<?php
$curl_referensi_jenis_tanda_pengaman = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_tanda_pengaman");
$data_referensi_jenis_tanda_pengaman = json_decode($curl_referensi_jenis_tanda_pengaman, TRUE);
?>

<!-- // 24 -->
<?php
$curl_referensi_jenis_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_tarif");
$data_referensi_jenis_tarif = json_decode($curl_referensi_jenis_tarif, TRUE);
?>

<!-- // 25 -->
<?php
$curl_referensi_jenis_tpb = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_jenis_tpb");
$data_referensi_jenis_tpb = json_decode($curl_referensi_jenis_tpb, TRUE);
?>

<!-- // 26 -->
<?php
$curl_referensi_kantor_pabean = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kantor_pabean");
$data_referensi_kantor_pabean = json_decode($curl_referensi_kantor_pabean, TRUE);
?>

<!-- // 27 -->
<?php
$curl_referensi_kapal = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kapal");
$data_referensi_kapal = json_decode($curl_referensi_kapal, TRUE);
?>

<!-- // 28 -->
<?php
$curl_referensi_kategori_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kategori_barang");
$data_referensi_kategori_barang = json_decode($curl_referensi_kategori_barang, TRUE);
?>

<!-- // 29 -->
<?php
$curl_referensi_kategori_barangbc25 = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kategori_barangbc25");
$data_referensi_kategori_barangbc25 = json_decode($curl_referensi_kategori_barangbc25, TRUE);
?>

<!-- // 30 -->
<?php
$curl_referensi_kemasan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kemasan");
$data_referensi_kemasan = json_decode($curl_referensi_kemasan, TRUE);
?>

<!-- // 31 -->
<?php
$curl_referensi_kode_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kode_barang");
$data_referensi_kode_barang = json_decode($curl_referensi_kode_barang, TRUE);
?>

<!-- // 32 -->
<?php
$curl_referensi_kode_guna = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kode_guna");
$data_referensi_kode_guna = json_decode($curl_referensi_kode_guna, TRUE);
?>

<!-- // 33 -->
<?php
$curl_referensi_kode_id = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kode_id");
$data_referensi_kode_id = json_decode($curl_referensi_kode_id, TRUE);
?>

<!-- // 34 -->
<?php
$curl_referensi_komoditi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_komoditi");
$data_referensi_komoditi = json_decode($curl_referensi_komoditi, TRUE);
?>

<!-- // 35 -->
<?php
$curl_referensi_kondisi_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_kondisi_barang");
$data_referensi_kondisi_barang = json_decode($curl_referensi_kondisi_barang, TRUE);
?>

<!-- // 36 -->
<?php
$curl_referensi_lokasi_bayar = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_lokasi_bayar");
$data_referensi_lokasi_bayar = json_decode($curl_referensi_lokasi_bayar, TRUE);
?>

<!-- // 37 -->
<?php
$curl_referensi_mata_uang = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_mata_uang");
$data_referensi_mata_uang = json_decode($curl_referensi_mata_uang, TRUE);
?>

<!-- // 38 -->
<?php
$curl_referensi_negara = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_negara");
$data_referensi_negara = json_decode($curl_referensi_negara, TRUE);
?>

<!-- // 39 -->
<?php
$curl_referensi_npwp_billing = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_npwp_billing");
$data_referensi_npwp_billing = json_decode($curl_referensi_npwp_billing, TRUE);
?>

<!-- // 40 -->
<?php
$curl_referensi_pelabuhan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pelabuhan");
$data_referensi_pelabuhan = json_decode($curl_referensi_pelabuhan, TRUE);
?>

<!-- // 41 -->
<?php
$curl_referensi_pemasok = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pemasok");
$data_referensi_pemasok = json_decode($curl_referensi_pemasok, TRUE);
?>

<!-- // 42 -->
<?php
$curl_referensi_pembayar = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pembayar");
$data_referensi_pembayar = json_decode($curl_referensi_pembayar, TRUE);
?>

<!-- // 43 -->
<?php
$curl_referensi_pengusaha = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pengusaha");
$data_referensi_pengusaha = json_decode($curl_referensi_pengusaha, TRUE);
?>

<!-- // 44 -->
<?php
$curl_referensi_pilihan_komunikasi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pilihan_komunikasi");
$data_referensi_pilihan_komunikasi = json_decode($curl_referensi_pilihan_komunikasi, TRUE);
?>

<!-- // 45 -->
<?php
$curl_referensi_pos_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pos_tarif");
$data_referensi_pos_tarif = json_decode($curl_referensi_pos_tarif, TRUE);
?>

<!-- // 46 -->
<?php
$curl_referensi_ppjk = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_ppjk");
$data_referensi_ppjk = json_decode($curl_referensi_ppjk, TRUE);
?>

<!-- // 47 -->
<?php
$curl_referensi_pungutan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_pungutan");
$data_referensi_pungutan = json_decode($curl_referensi_pungutan, TRUE);
?>

<!-- // 48 -->
<?php
$curl_referensi_refeteks = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_refeteks");
$data_referensi_refeteks = json_decode($curl_referensi_refeteks, TRUE);
?>

<!-- // 49 -->
<?php
$curl_referensi_respon = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_respon");
$data_referensi_respon = json_decode($curl_referensi_respon, TRUE);
?>

<!-- // 50 -->
<?php
$curl_referensi_satuan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_satuan");
$data_referensi_satuan = json_decode($curl_referensi_satuan, TRUE);
?>

<!-- // 51 -->
<?php
$curl_referensi_skema_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_skema_tarif");
$data_referensi_skema_tarif = json_decode($curl_referensi_skema_tarif, TRUE);
?>

<!-- // 52 -->
<?php
$curl_referensi_status = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_status");
$data_referensi_status = json_decode($curl_referensi_status, TRUE);
?>

<!-- // 53 -->
<?php
$curl_referensi_status_pengusaha = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_status_pengusaha");
$data_referensi_status_pengusaha = json_decode($curl_referensi_status_pengusaha, TRUE);
?>

<!-- // 54 -->
<?php
$curl_referensi_tarif_fasilitas = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tarif_fasilitas");
$data_referensi_tarif_fasilitas = json_decode($curl_referensi_tarif_fasilitas, TRUE);
?>

<!-- // 55 -->
<?php
$curl_referensi_tipe_kontainer = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tipe_kontainer");
$data_referensi_tipe_kontainer = json_decode($curl_referensi_tipe_kontainer, TRUE);
?>

<!-- // 56 -->
<?php
$curl_referensi_tps = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tps");
$data_referensi_tps = json_decode($curl_referensi_tps, TRUE);
?>

<!-- // 57 -->
<?php
$curl_referensi_tujuan_pemasukan = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tujuan_pemasukan");
$data_referensi_tujuan_pemasukan = json_decode($curl_referensi_tujuan_pemasukan, TRUE);
?>

<!-- // 58 -->
<?php
$curl_referensi_tujuan_pengiriman = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tujuan_pengiriman");
$data_referensi_tujuan_pengiriman = json_decode($curl_referensi_tujuan_pengiriman, TRUE);
?>

<!-- // 59 -->
<?php
$curl_referensi_tujuan_tpb = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tujuan_tpb");
$data_referensi_tujuan_tpb = json_decode($curl_referensi_tujuan_tpb, TRUE);
?>

<!-- // 60 -->
<?php
$curl_referensi_tutup_pu = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_tutup_pu");
$data_referensi_tutup_pu = json_decode($curl_referensi_tutup_pu, TRUE);
?>

<!-- // 61 -->
<?php
$curl_referensi_ukuran_kontainer = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_ukuran_kontainer");
$data_referensi_ukuran_kontainer = json_decode($curl_referensi_ukuran_kontainer, TRUE);
?>

<!-- // 62 -->
<?php
$curl_referensi_validasi = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_validasi");
$data_referensi_validasi = json_decode($curl_referensi_validasi, TRUE);
?>

<!-- // 63 -->
<?php
$curl_referensi_validasi_jenis_nilai = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_validasi_jenis_nilai");
$data_referensi_validasi_jenis_nilai = json_decode($curl_referensi_validasi_jenis_nilai, TRUE);
?>

<!-- // 64 -->
<?php
$curl_referensi_valuta = curl("http://117.54.102.106/APITPB/api.php?function=get_referensi_valuta");
$data_referensi_valuta = json_decode($curl_referensi_valuta, TRUE);
?>

<!-- // 65 -->
<?php
$curl_setting_aplikasi = curl("http://117.54.102.106/APITPB/api.php?function=get_setting_aplikasi");
$data_setting_aplikasi = json_decode($curl_setting_aplikasi, TRUE);
?>

<!-- // 66 -->
<?php
$curl_tbl_aktifitas = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_aktifitas");
$data_tbl_aktifitas = json_decode($curl_tbl_aktifitas, TRUE);
?>

<!-- // 67 -->
<?php
$curl_tbl_department = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_department");
$data_tbl_department = json_decode($curl_tbl_department, TRUE);
?>

<!-- // 68 -->
<?php
$curl_tbl_faq = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_faq");
$data_tbl_faq = json_decode($curl_tbl_faq, TRUE);
?>

<!-- // 69 -->
<?php
$curl_tbl_informasi = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_informasi");
$data_tbl_informasi = json_decode($curl_tbl_informasi, TRUE);
?>

<!-- // 70 -->
<?php
$curl_tbl_jabatan = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_jabatan");
$data_tbl_jabatan = json_decode($curl_tbl_jabatan, TRUE);
?>

<!-- // 71 -->
<?php
$curl_tbl_log = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_log");
$data_tbl_log = json_decode($curl_tbl_log, TRUE);
?>

<!-- // 72 -->
<?php
$curl_tbl_pegawai = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_pegawai");
$data_tbl_pegawai = json_decode($curl_tbl_pegawai, TRUE);
?>

<!-- // 73 -->
<?php
$curl_tbl_realtime = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_realtime");
$data_tbl_realtime = json_decode($curl_tbl_realtime, TRUE);
?>

<!-- // 74 -->
<?php
$curl_tbl_role = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_role");
$data_tbl_role = json_decode($curl_tbl_role, TRUE);
?>

<!-- // 75 -->
<?php
$curl_tbl_setting = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_setting");
$data_tbl_setting = json_decode($curl_tbl_setting, TRUE);
?>

<!-- // 76 -->
<?php
$curl_tbl_users = curl("http://117.54.102.106/APITPB/api.php?function=get_tbl_users");
$data_tbl_users = json_decode($curl_tbl_users, TRUE);
?>

<!-- // 77 -->
<?php
$curl_tpb_bahan_baku = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_bahan_baku");
$data_tpb_bahan_baku = json_decode($curl_tpb_bahan_baku, TRUE);
?>

<!-- // 78 -->
<?php
$curl_tpb_bahan_baku_dokumen = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_bahan_baku_dokumen");
$data_tpb_bahan_baku_dokumen = json_decode($curl_tpb_bahan_baku_dokumen, TRUE);
?>

<!-- // 79 -->
<?php
$curl_tpb_bahan_baku_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_bahan_baku_tarif");
$data_tpb_bahan_baku_tarif = json_decode($curl_tpb_bahan_baku_tarif, TRUE);
?>

<!-- // 80 -->
<?php
$curl_tpb_barang = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_barang");
$data_tpb_barang = json_decode($curl_tpb_barang, TRUE);
?>

<!-- // 81 -->
<?php
$curl_tpb_barang_dokumen = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_barang_dokumen");
$data_tpb_barang_dokumen = json_decode($curl_tpb_barang_dokumen, TRUE);
?>

<!-- // 82 -->
<?php
$curl_tpb_barang_penerima = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_barang_penerima");
$data_tpb_barang_penerima = json_decode($curl_tpb_barang_penerima, TRUE);
?>

<!-- // 83 -->
<?php
$curl_tpb_barang_tarif = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_barang_tarif");
$data_tpb_barang_tarif = json_decode($curl_tpb_barang_tarif, TRUE);
?>

<!-- // 84 -->
<?php
$curl_tpb_detil_status = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_detil_status");
$data_tpb_detil_status = json_decode($curl_tpb_detil_status, TRUE);
?>

<!-- // 85 -->
<?php
$curl_tpb_dokumen = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_dokumen");
$data_tpb_dokumen = json_decode($curl_tpb_dokumen, TRUE);
?>

<!-- // 86 -->
<?php
$curl_tpb_header = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_header");
$data_tpb_header = json_decode($curl_tpb_header, TRUE);
?>

<!-- // 87 -->
<?php
$curl_tpb_jaminan = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_jaminan");
$data_tpb_jaminan = json_decode($curl_tpb_jaminan, TRUE);
?>

<!-- // 88 -->
<?php
$curl_tpb_kemasan = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_kemasan");
$data_tpb_kemasan = json_decode($curl_tpb_kemasan, TRUE);
?>

<!-- // 89 -->
<?php
$curl_tpb_kontainer = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_kontainer");
$data_tpb_kontainer = json_decode($curl_tpb_kontainer, TRUE);
?>

<!-- // 90 -->
<?php
$curl_tpb_npwp_billing = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_npwp_billing");
$data_tpb_npwp_billing = json_decode($curl_tpb_npwp_billing, TRUE);
?>

<!-- // 91 -->
<?php
$curl_tpb_penerima = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_penerima");
$data_tpb_penerima = json_decode($curl_tpb_penerima, TRUE);
?>

<!-- // 92 -->
<?php
$curl_tpb_pungutan = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_pungutan");
$data_tpb_pungutan = json_decode($curl_tpb_pungutan, TRUE);
?>

<!-- // 93 -->
<?php
$curl_tpb_respon = curl("http://117.54.102.106/APITPB/api.php?function=get_tpb_respon");
$data_tpb_respon = json_decode($curl_tpb_respon, TRUE);
?>

<!-- // 94 -->
<?php
$curl_user_manajemen = curl("http://117.54.102.106/APITPB/api.php?function=get_user_manajemen");
$data_user_manajemen = json_decode($curl_user_manajemen, TRUE);
?>