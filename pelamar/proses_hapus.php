<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data Pelamar yang dikirim oleh index.php melalui URL
$id_pelamar = $_GET['id_pelamar'];

// Query untuk menampilkan data pelamar berdasarkan id_pelamar yang dikirim
$query = "SELECT * FROM pelamar WHERE id_pelamar='".$id_pelamar."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql


// Query untuk menghapus data pelamar berdasarkan id_pelamar yang dikirim
$query2 = "DELETE FROM pelamar WHERE id_pelamar='".$id_pelamars."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: index.php"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
