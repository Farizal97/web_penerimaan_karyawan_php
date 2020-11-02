<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id_pelamar       = $_POST['id_pelamar'];
$posisi_pekerjaan = $_POST['posisi_pekerjaan'];
$lokasi_seleksi   = $_POST['lokasi_seleksi'];
$username         = $_POST['username'];
$password         = $_POST['password'];
$nama             = $_POST['nama'];
$jekel            = $_POST['jekel'];
$tempat_lhr       = $_POST['tempat_lhr'];
$tgl_lhr          = $_POST['tgl_lhr'];
$alamat           = $_POST['alamat'];
$kodepos          = $_POST['kodepos'];
$kota             = $_POST['kota'];
$no_tlp           = $_POST['no_tlp'];
$no_hp            = $_POST['no_hp'];
$ktp              = $_POST['ktp'];
$negara           = $_POST['negara'];
$agama            = $_POST['agama'];
$hobi             = $_POST['hobi'];
$alamat_ortu      = $_POST['alamat_ortu'];
$kodepos_ortu     = $_POST['kodepos_ortu'];
$kota_ortu        = $_POST['kota_ortu'];
$status           = $_POST['status'];
$jml_anak         = $_POST['jml_anak'];
$nm_kel           = $_POST['nm_kel'];
$hubungan         = $_POST['hubungan'];
$alamat_kel       = $_POST['alamat_kel'];
$no_kel           = $_POST['no_kel'];
$pendidikan       = $_POST['pendidikan'];
$nm_sekolah       = $_POST['nm_sekolah'];
$jurusan          = $_POST['jurusan'];
$tgl_mulai        = $_POST['tgl_mulai'];
$tgl_selesai      = $_POST['tgl_selesai'];
$nilai            = $_POST['nilai'];
$organisasi       = $_POST['organisasi'];
$jabatan          = $_POST['jabatan'];
$periode_org      = $_POST['periode_org'];
$nm_kursus        = $_POST['nm_kursus'];
$tahun            = $_POST['tahun'];
$penyelenggara    = $_POST['penyelenggara'];
$peringkat        = $_POST['peringkat'];
$bahasa           = $_POST['bahasa'];
$dengar           = $_POST['dengar'];
$baca             = $_POST['baca'];
$bicara           = $_POST['bicara'];
$tulis            = $_POST['tulis'];
$nm_pt            = $_POST['nm_pt'];
$tgl_awal         = $_POST['tgl_awal'];
$tgl_akhir        = $_POST['tgl_akhir'];
$almt_pt          = $_POST['almt_pt'];
$tlp_pt           = $_POST['tlp_pt'];
$jabat_awal       = $_POST['jabat_awal'];
$jabat_akhir      = $_POST['jabat_akhir'];
$nm_atasan        = $_POST['nm_atasan'];
$alasan           = $_POST['alasan'];
$gaji             = $_POST['gaji'];


// id_pelamar, posisi_pekerjaan, lokasi_seleksi, username, password

	// Proses simpan ke Database
	$query = "INSERT INTO pelamar
	(nama, 
	jekel, 
	tempat_lhr, 
	tgl_lhr, 
	alamat, 
	kodepos, 
	kota, 
	no_tlp, 
	no_hp, 
	ktp, 
	negara, 
	agama, 
	hobi, 
	alamat_ortu, 
	kodepos_ortu, 
	kota_ortu, 
	status, 
	jml_anak, 
	nm_kel, 
	hubungan, 
	alamat_kel, 
	no_kel, 
	pendidikan, 
	nm_sekolah, 
	jurusan, 
	tgl_mulai, 
	tgl_selesai, 
	nilai, 
	organisasi, 
	jabatan, 
	periode_org, 
	nm_kursus, 
	tahun, 
	penyelenggara, 
	peringkat, 
	bahasa, 
	dengar, 
	baca, 
	bicara, 
	tulis, 
	nm_pt, 
	tgl_awal, 
	tgl_akhir, 
	almt_pt, 
	tlp_pt, 
	jabat_awal, 
	jabat_akhir, 
	nm_atasan,
	alasan, 
	gaji
	)
	 VALUES(
	'".$nama."', 
	'".$jekel."', 
	'".$tempat_lhr."', 
	'".$tgl_lhr."', 
	'".$alamat."', 
	'".$kodepos."', 
	'".$kota."', 
	'".$no_tlp."', 
	'".$no_hp."', 
	'".$ktp."', 
	'".$negara."', 
	'".$agama."', 
	'".$hobi."', 
	'".$alamat_ortu."', 
	'".$kodepos_ortu."', 
	'".$kota_ortu."', 
	'".$status."', 
	'".$jml_anak."', 
	'".$nm_kel."', 
	'".$hubungan."', 
	'".$alamat_kel."',
	'".$no_kel."', 
	'".$pendidikan."', 
	'".$nm_sekolah."', 
	'".$jurusan."', 
	'".$tgl_mulai."', 
	'".$tgl_selesai."', 
	'".$nilai."', 
	'".$organisasi."', 
	'".$jabatan."', 
	'".$periode_org."', 
	'".$nm_kursus."', 
	'".$tahun."', 
	'".$penyelenggara."', 
	'".$peringkat."', 
	'".$bahasa."', 
	'".$dengar."', 
	'".$baca."', 
	'".$bicara."', 
	'".$tulis."', 
	'".$nm_pt."', 
	'".$tgl_awal."', 
	'".$tgl_akhir."', 
	'".$almt_pt."', 
	'".$tlp_pt."', 
	'".$jabat_awal."', 
	'".$jabat_akhir."',
	'".$nm_atasan."', 
	'".$alasan."', 
	'".$gaji."')";


	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
?>
