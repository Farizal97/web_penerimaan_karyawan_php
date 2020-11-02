<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data id_soal yang dikirim oleh index.php melalui URL
$id_soal = $_GET['id_soal'];

// Query untuk menampilkan data siswa berdasarkan id_soal yang dikirim
$query = "SELECT * FROM tbl_soal WHERE id_soal='".$id_soal."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data['foto'])) // Jika foto ada
	unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data siswa berdasarkan id_soal yang dikirim
$query2 = "DELETE FROM tbl_soal WHERE id_soal='".$id_soal."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: view_soal.php"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='view_soal.php'>Kembali</a>";
}
?>
