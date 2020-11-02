<?php 

		include "koneksi.php";

		// Ambil Data yang Dikirim dari Form
			$soal        = $_POST['soal'];
			$jenis_soal  = $_POST['jenis_soal'];
			$a           = $_POST['a'];
			$b           = $_POST['b'];
			$c           = $_POST['c'];
			$d           = $_POST['d'];
			$knc_jawaban = $_POST['knc_jawaban'];
			$tanggal     = date("Y-m-d H:i:s");
			$gambar      = $_FILES['gambar']['name'];
			$tmp         = $_FILES['gambar']['tmp_name'];
			$aktif       = $_POST['aktif'];

			


			
		// Rename jenis_soal gambarnya dengan menambahkan tanggal dan jam upload
		$gambarbaru = date('dmYHis').$gambar;

		// Set path folder tempat menyimpan gambarnya
		$path = "images/".$gambarbaru;

		// Proses upload
		if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
			// Proses simpan ke Database
			$query = "INSERT INTO tbl_soal VALUES(
			'$soal', 
			'$jenis_soal', 
			'$a', 
			'$b', 
			'$c', 
			'$d',
			'$knc_jawaban', 
			'$tanggal',
			'$gambarbaru',
			'$aktif')";



			$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: view_soal.php"); // Redirect ke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
				echo "<br><a href='add_soal.php'>Kembali Ke Form</a>";
			}
		}else{
			// Jika gambar gagal diupload, Lakukan :
			echo "Maaf, Gambar gagal untuk diupload.";
			echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
		}

 ?>