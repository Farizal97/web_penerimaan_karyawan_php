<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID Pelamar yang dikirim oleh form_ubah.php melalui URL
$id_pelamar = $_GET['id_pelamar'];

// Ambil Data yang Dikirim dari Form
$nama          = $_POST['nama'];
$jekel         = $_POST['jekel'];
$tempat_lhr    = $_POST['tempat_lhr'];
$tgl_lhr       = $_POST['tgl_lhr'];
$alamat        = $_POST['alamat'];
$kodepos       = $_POST['kodepos'];
$kota          = $_POST['kota'];
$no_tlp        = $_POST['no_tlp'];
$no_hp         = $_POST['no_hp'];
$ktp           = $_POST['ktp'];
$negara        = $_POST['negara'];
$agama         = $_POST['agama'];
$hobi          = $_POST['hobi'];
$alamat_ortu   = $_POST['alamat_ortu'];
$kodepos_ortu  = $_POST['kodepos_ortu'];
$kota_ortu     = $_POST['kota_ortu'];
$status        = $_POST['status'];
$jml_anak      = $_POST['jml_anak'];
$nm_kel        = $_POST['nm_kel'];
$hubungan      = $_POST['hubungan'];
$alamat_kel    = $_POST['alamat_kel'];
$no_kel        = $_POST['no_kel'];
$pendidikan    = $_POST['pendidikan'];
$nm_sekolah    = $_POST['nm_sekolah'];
$jurusan       = $_POST['jurusan'];
$tgl_mulai     = $_POST['tgl_mulai'];
$tgl_selesai   = $_POST['tgl_selesai'];
$nilai         = $_POST['nilai'];
$organisasi    = $_POST['organisasi'];
$jabatan       = $_POST['jabatan'];
$periode_org   = $_POST['periode_org'];
$nm_kursus     = $_POST['nm_kursus'];
$tahun         = $_POST['tahun'];
$penyelenggara = $_POST['penyelenggara'];
$peringkat     = $_POST['peringkat'];
$sertifikat    = $_POST['sertifikat'];
$bahasa        = $_POST['bahasa'];
$dengar        = $_POST['dengar'];
$baca          = $_POST['baca'];
$bicara        = $_POST['bicara'];
$tulis         = $_POST['tulis'];
$nm_pt         = $_POST['nm_pt'];
$tgl_awal      = $_POST['tgl_awal'];
$tgl_akhir     = $_POST['tgl_akhir'];
$almt_pt       = $_POST['almt_pt'];
$tlp_pt        = $_POST['tlp_pt'];
$jabat_awal    = $_POST['jabat_awal'];
$jabat_akhir   = $_POST['jabat_akhir'];
$nm_atasan     = $_POST['nm_atasan'];
$alasan        = $_POST['alasan'];
$gaji          = $_POST['gaji'];


	

	// Proses upload
		// Query untuk menampilkan data pelamar berdasarkan id_pelamar yang dikirim
		$query = "SELECT * FROM pelamar WHERE id_pelamar='".$id_pelamar."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		
		// Proses ubah data ke Database
		$query = "UPDATE pelamar SET nama='".$nama."', jekel='".$jekel."', tempat_lhr='".$tempat_lhr."', tgl_lhr='".$tgl_lhr."', alamat='".$alamat."', kodepos='".$kodepos."', kota='".$kota."', no_tlp='".$no_tlp."', no_hp='".$no_hp."', ktp='".$ktp."', negara='".$negara."', agama='".$agama."', hobi='".$hobi."', alamat_ortu='".$alamat_ortu."', kodepos_ortu='".$kodepos_ortu."', kota_ortu='".$kota_ortu."', status='".$status."', jml_anak='".$jml_anak."', nm_kel='".$nm_kel."', hubungan='".$hubungan."', alamat_kel='".$alamat_kel."', no_kel='".$no_kel."', pendidikan='".$pendidikan."', nm_sekolah='".$nm_sekolah."', jurusan='".$jurusan."', tgl_mulai='".$tgl_mulai."', tgl_selesai='".$tgl_selesai."', nilai='".$nilai."', organisasi='".$organisasi."', jabatan='".$jabatan."', periode_org='".$periode_org."', nm_kursus='".$nm_kursus."', tahun='".$tahun."', penyelenggara='".$penyelenggara."', peringkat='".$peringkat."', bahasa='".$bahasa."', dengar='".$dengar."', baca='".$baca."', bicara ='".$bicara."', tulis='".$tulis."', nm_pt='" .$nm_pt."', tgl_awal='".$tgl_awal."', tgl_akhir='".$tgl_akhir."', almt_pt='" .$almt_pt."', tlp_pt='" .$tlp_pt."', jabat_awal='" .$jabat_awal."', nm_atasan='".$nm_atasan."', alasan='".$alasan."', gaji='".$gaji."' WHERE id_pelamar='".$id_pelamar."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}

?>
