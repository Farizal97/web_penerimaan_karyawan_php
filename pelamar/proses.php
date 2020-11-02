<?php 


session_start();
//cek level user
if(@$_SESSION['pelamar']){


include "koneksi.php";

	
		
		
		$id_pelamar = $_POST['pelamar'];
		$hasil = $_POST['hasil'];

		$q2 = mysqli_query($connect,"INSERT into tabel_nilai (id_pelamar,total) values ('$id_pelamar','$hasil')");

		if ($q2) {
			echo "<script>alert('berhasil')</>";
		}else{
			echo "<script>alert('gagal')</>";
		}



		 
}else {
	echo "anda bukan pelamar";
}


?>