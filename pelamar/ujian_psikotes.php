<?php
session_start();
//cek level user
if(@$_SESSION['pelamar']){
	$id_pelamar=$_SESSION['pelamar'];
?>


<?php 

	include"koneksi.php";

	$cek1 = mysqli_query($connect,"SELECT keterangan from tbl_nilai where id_pelamar='$id_pelamar' ");
	$cek2 = mysqli_fetch_array($cek1);

	if (is_null($cek2['keterangan']) ) {
		?>
			<!DOCTYPE html>
			<html lang="en">
				<head>
					<meta charset="UTF-8">
					<title>Document</title>

					<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
				  	<link rel="stylesheet" href="../bootstrap4/css/custom.css">
					<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
				</head>
				<body style="background: transparent;">



				<div class="constainer" style="margin-top: 10px;">
					

					<h3>selamat mengerjakan</h3>
						<b>Ujian Online Pilihan Ganda</b>
					<div>
					<table width="100%" border="0">


				<?php
				include "koneksi.php";


						$query= "SELECT * from tbl_soal WHERE aktif='Y' ORDER BY RAND ()";
						$hasil = mysqli_query($connect, $query);
						$jumlah=mysqli_num_rows($hasil);
						$urut=0;
						while($row =mysqli_fetch_array($hasil))
						{
							$id=$row["id_soal"];
							$pertanyaan=$row["soal"];
							$pilihan_a=$row["a"];
							$pilihan_b=$row["b"];
							$pilihan_c=$row["c"];
							$pilihan_d=$row["d"]; 

							echo "<form name='form1' method='post' action='hasil_ujian.php?id_pelamar=$id_pelamar''>";

							?>
							<input type="hidden" name="id[]" value=<?php echo $id; ?>>
							<input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
							<tr>
							  	<td width="17"><font color="#000000"><strong><?php echo $urut=$urut+1; ?></strong></font></td>
							  	<td width="430"><font color="#000000"><strong><?php echo "$pertanyaan"; ?></strong></font></td>
							</tr>
							<!-- <?php
								if (empty($row["gambar"])) {
									echo "<tr><td></td><td><img src='../images/$row[foto]' width='200' hight='200'></td></tr>";
								}
							?> -->
							<tr>
							  	<td height="21"><font color="#000000">&nbsp;</font></td>
						  	  <td><font color="#000000">
					  	     A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
					  	      <?php echo "$pilihan_a";?></font> </td>
							</tr>
							<tr>
							  	<td><font color="#000000">&nbsp;</font></td>
						  	  <td><font color="#000000">
					  	     B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
					  	      <?php echo "$pilihan_b";?></font> </td>
							</tr>
							<tr>
							  	<td><font color="#000000">&nbsp;</font></td>
						  	  <td><font color="#000000">
					  	    C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
					  	      <?php echo "$pilihan_c";?></font> </td>
							</tr>
							<tr>
								<td><font color="#000000">&nbsp;</font></td>
						  	  <td><font color="#000000">
					  	    D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
					  	      <?php echo "$pilihan_d";?></font> </td>
				            </tr>
							
							<tr>
								<td height="15"></td>
							</tr>
						<?php
						}
						?>



				        	<tr>
								<td>&nbsp;</td>
							  	<td><input type="submit" class="btn btn-primary" name="submit" value="Selesai" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
				            </tr>
							</table>
				</form>
				        </p>
				</div>

				</div>


					<script src="../bootstrap4/js/bootstrap.min.js"></script>
					<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
				</body>
			</html>
		<?php
	}else{
     				header("location:report.php?id_pelamar=$id_pelamar");
	}
 ?>


<?php
}else {
	include"illegal.php";
}
?>



