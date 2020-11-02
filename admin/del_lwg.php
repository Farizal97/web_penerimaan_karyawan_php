<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data id_lowongan yang dikirim oleh index.php melalui URL
$id_lowongan = $_GET['id_lowongan'];



// Query untuk menghapus data siswa berdasarkan id_lowongan yang dikirim
$query2 = "DELETE FROM lowongan WHERE id_lowongan='".$id_lowongan."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: view_lwg.php"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
