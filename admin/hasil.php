<?php
error_reporting(0);

session_start();
//cek level user
if(@$_SESSION['pelamar']){
	$id_pelamar = $_GET['id_pelamar'];

	include"koneksi.php";

       if(isset($_POST['submit'])){
			$pilihan=$_POST["pilihan"];
			$id_soal=$_POST["id"];
			$jumlah=$_POST['jumlah'];
			
			$score=0;
			$benar=0;
			$salah=0;
			$kosong=0;
			
			for ($i=0;$i<$jumlah;$i++){
				//id nomor soal
				$nomor=$id_soal[$i];
				
				//jika user tidak memilih jawaban
				if (empty($pilihan[$nomor])){
					$kosong++;
				}else{
					//jawaban dari user
					$jawaban=$pilihan[$nomor];
					
					//cocokan jawaban user dengan jawaban di database
					$query=mysqli_query($connect, "SELECT * FROM tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
					
					$cek=mysqli_num_rows($query);
					
					if($cek){
						//jika jawaban cocok (benar)
						$benar++;
					}else{
						//jika salah
						$salah++;
					}
					
				} 
				/*RUMUS
				Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
				hasil= 100 / jumlah soal * jawaban yang benar
				*/
				
				$result=mysqli_query($connect, "SELECT * from tbl_soal WHERE aktif='Y'");
				$jumlah_soal=mysqli_num_rows($result);
				$score = 100/$jumlah_soal*$benar;
				$hasil = number_format($score,1);
			}
		}

		//Lakukan Penyimpanan Kedalam Database
	  echo "
		 <tr><td>Jumlah Jawaban Benar</td><td> : $benar </td></tr><br>
		 <tr><td>Jumlah Jawaban Salah</td><td> : $salah</td></tr><br>
		 <tr><td>Jumlah Jawaban Kosong</td><td>: $kosong</td></tr><br>
		 <tr><td>Total Score</td><td>: $score</td></tr><br>

		 <tr><td>isi variabel id pelamar : $id_pelamar </td></tr>
		";


		echo "
		<hr>
		<form action='' method='POST'>
			<label>nilai anda adalah </label>
			<input type='text' name='nilai' value='$score'>
			<input type='submit' value='simpan' name='simpan' >
		</form>
		";


		if (isset($_POST['simpan'])) {
			$id_pelamar;
			$nilai = $_POST['nilai'];

			$queryinsert = (mysqli_query($connect, "INSERT into tbl_nilai (id_pelamar,nilai) VALUES ('$id_pelamar','$nilai')"));

			if ($queryinsert) {
				echo "<scipt>alert('data berhasil dimasukan')</script>";
			}else {
				echo "<scipt>alert('data gagal dimasukan')</script>";

			}

		}

		?>
		








<?php
}else {
	echo "anda bukan pelamar";
}
?>



