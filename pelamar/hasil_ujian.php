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

				$db= mysqli_query($connect,"SELECT * FROM master_pelamar where id_pelamar='$id_pelamar'");
		$data= mysqli_fetch_array($db);
			}
		}

		//Lakukan Penyimpanan Kedalam Database

		// hanya untuk tampil


		if ($score >= 70 ) {
				$keterangan = "Lulus";
			}else{
				$keterangan = "Tidak Lulus";
			}



	  echo "
			<!doctype html>
			<html lang='en'>
			  <head>
			    <title>Hello, world!</title>
			    <!-- Required meta tags -->
			    <meta charset='utf-8'>
			    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

			    <!-- Bootstrap CSS -->
			    <link rel='stylesheet' href='../bootstrap4/css/bootstrap.min.css'>
			  </head>
			  <body style='background:transparent;'>

			    <div class='container' style='margin-top: 5%;'>
			      <div class='row'>
			        <div class='col-md-6 offset-md-3'>
			                <h1>Hasil Ujian</h1>

			          <form action='' method='POST'>

			            <table border='0'>

			              <tr>
			                <td width='220'>ID Pelamar</td>
			                <td width='10'>:</td>
			                <td>$id_pelamar</td>
			              </tr>

			              <tr height='10'></tr>

			            

			              <tr>
			                <td>Jawaban Benar</td>
			                <td width='10'>:</td>
			                <td>$benar</td>
			              </tr>

			              <tr height='10'></tr>

			              <tr>
			                <td>Jawaban Salah</td>
			                <td width='10'>:</td>
			                <td>$salah</td>
			              </tr>

			              <tr height='10'></tr>

			              <tr>
			                <td>Jawaban Kosong</td>
			                <td width='10'>:</td>
			                <td>$kosong</td>
			              </tr>

			              <tr height='10'></tr>

			              <tr>
			                <td>Total Score</td>
			                <td width='10'>:</td>
			                <td>$score</td>
			              </tr>

			              <tr height='10'></tr>

			              <tr>
			                <td>Status Ujian</td>
			                <td width='10'>:</td>
			                <td>$keterangan</td>
			              </tr>
			            </table><br>



			              <input type='hidden' name='benar' value='$benar' readonly>
			              <input type='hidden' name='salah' value='$salah' readonly>
			              <input type='hidden' name='kosong' value='$kosong' readonly>
			              <input type='hidden' name='score' value='$score' readonly>
			              <input type='submit' class='btn btn-primary' value='Selesai' name='simpan' >


			          </form>
			        </div>
			      </div>
			    </div>

			    <!-- Optional JavaScript -->
			    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
			    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
			    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js' integrity='sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh' crossorigin='anonymous'></script>
			    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js' integrity='sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ' crossorigin='anonymous'></script>
			  </body>
			</html>
		";






		if (isset($_POST['simpan'])) {
			$id_pelamar;

			$benar     = $_POST['benar'];
			$salah     = $_POST['salah'];
			$kosong    = $_POST['kosong'];
			$score     = $_POST['score'];
			$tgl_ujian = date("Y-m-d H:i:s");
			$jenis_soal= "Umum";

			if ($score >= 65 ) {
				$keterangan = "Lulus";
			}else{
				$keterangan = "Tidak Lulus";
			}

			$queryinsert = (mysqli_query($connect, "INSERT into tbl_nilai VALUES ('',
				'$id_pelamar',
				'$benar',
				'$salah',
				'$kosong',
				'$score',
				'$jenis_soal',
				'$tgl_ujian',
				'$keterangan'
				)"));

			if ($queryinsert) {
				header("location:ujian_psikotes.php");

			}

		}



		?>
		




















<?php
}else {
	echo "anda bukan pelamar";
}
?>



