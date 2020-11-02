<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$id_lowongan		 = $_POST['id_lowongan'];
$posisi_pekerjaan    = $_POST['posisi_pekerjaan'];
$lokasi_seleksi      = $_POST['lokasi_seleksi'];
$tgl_mulai           = $_POST['tgl_mulai'];
$tgl_selesai         = $_POST['tgl_selesai'];
$deskripsi_pekerjaan = $_POST['deskripsi_pekerjaan'];
$jurusan_akademik    = $_POST['jurusan_akademik'];
$lokasi_pekerjaan    = $_POST['lokasi_pekerjaan'];
$nip                 = $_POST['nip'];


	// Proses simpan ke Database
	$query = "INSERT INTO lowongan(
	id_lowongan,
	posisi_pekerjaan, 
	lokasi_seleksi, 
	tgl_mulai, 
	tgl_selesai, 
	deskripsi_pekerjaan, 
	jurusan_akademik, 
	lokasi_pekerjaan, 
	nip) 
	VALUES(
	'$id_lowongan',
	'$posisi_pekerjaan', 
	'$lokasi_seleksi', 
	'$tgl_mulai', 
	'$tgl_selesai',
	'$deskripsi_pekerjaan',
	'$jurusan_akademik',
	'$lokasi_pekerjaan', 
	'$nip')";

	

	if(mysqli_query($connect,$query)){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";

?>