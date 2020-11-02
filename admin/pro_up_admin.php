<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID Admin yang dikirim oleh form_ubah.php melalui URL
$id_admin = $_GET['id_admin'];

// Ambil Data yang Dikirim dari Form
$nama 			= $_POST['nama'];
$jekel 			= $_POST['jekel'];
$tempat_lhr		= $_POST['tempat_lhr'];
$tgl_lhr		= $_POST['tgl_lhr'];
$agama			= $_POST['agama'];
$alamat			= $_POST['alamat'];
$no_tlp			= $_POST['no_tlp'];
$nip			= $_POST['nip'];
$jabatan		= $_POST['jabatan'];


// Proses upload
		// Query untuk menampilkan data admin berdasarkan id_admin yang dikirim
		$query = "SELECT * FROM admin WHERE id_admin='".$id_admin."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql


		// Proses ubah data ke Database
     $query           = "UPDATE admin SET 
     nama			  ='".$nama."',
     jekel			  ='".$jekel."',
     tempat_lhr		  ='".$tempat_lhr."',
     tgl_lhr		  ='".$tgl_lhr."',
     agama			  ='".$agama."',
     alamat			  ='".$alamat."',
     no_tlp			  ='".$no_tlp."',
     nip			  ='".$nip."',
     jabatan		  ='".$jabatan."'

     WHERE
     	 id_admin    ='".$id_admin."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
		    echo "<script>alert('Data Berhasil Terupdate')</script>";
		}else{
			// Jika Gagal, Lakukan :
			echo "<script>alert('Gagal menyimpan ke database')</script>";
			
		}

?>

