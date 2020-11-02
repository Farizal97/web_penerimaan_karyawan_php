<?php
session_start();
//cek level user
if(@$_SESSION['pelamar']){
?>


<?php
require_once ("koneksi.php");

$id_pelamar = $_SESSION["pelamar"];

if (isset($_POST["simpan"])) {
	$password_sekarang =$_POST["password_sekarang"];
	$password_baru_1 = $_POST["password_baru_1"];
	$password_baru_2 = $_POST["password_baru_2"];
	
	$sql = "SELECT * FROM pelamar WHERE id_pelamar = '$id_pelamar'";
	$query = mysqli_query($connect,$sql);
	$pelamar = mysqli_fetch_array($query);
	
	// $pelamarname = $pelamar["pelamarname"];
	if ($password_sekarang != $pelamar["password"]) {
			
	echo "<script>alert(\"Password lama salah!\");</script>";
	echo "<meta http-equiv='refresh' content='1;URL=pass.php?id_pelamar=$id_pelamar'>";
	
	} elseif ($password_baru_1 != $password_baru_2) {
	
	echo "<script>alert(\"Konfirmasi password baru tidak sama!\");</script>";
	echo "<meta http-equiv='refresh' content='1;URL=pass.php?id_pelamar=$id_pelamar'>";
	
	} elseif ($password_sekarang == $pelamar["password"] && $password_baru_1 == $password_baru_2) {
	
	$sql = "UPDATE pelamar SET password = '$password_baru_1' WHERE id_pelamar = '$id_pelamar'";
	$query = mysqli_query($connect,$sql);
	if (!$query){
		die ('Gagal mengubah password' . mysqli_error());
	}
	
	echo "<script>alert(\"Password pelamar berhasil diedit!\");</script>";
	echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
		
	} 
}
	
?>

<!-- <table width="350px" align="center" vspace="200px" bgcolor="#CCCCCC" cellspacing="5px">
<tr><td align="center" colspan="2" bgcolor="#CCCCCC"><b>UBAH PASSWORD</b></td></tr>

</table>
 -->


<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body style="background: transparent;">

	
	<div class="container">
	

		<div class="row">
			<div class="col-md-6 offset-md-3">

					<form name="ubah_password" action="" method="post" style="margin-top: 15%;">

						<table border="0">
							<tr>
								<td colspan="3">
								<h1 class="text-center">Ganti Password</h1>
								</td>
							</tr>

							<tr><td height="10"></td></tr>


							<tr>
								<td>Password Lama</td>
								<td width="10"></td>
								<td><input type="password" name="password_sekarang" class="form-control"></input>
								</td>
							</tr>

							<tr><td height="10"></td></tr>

							<tr>
								<td>Password baru</td>
								<td width="10"></td>
								<td>
									<input type="password" name="password_baru_1" class="form-control"></input>
								</td>
							</tr>

							<tr><td height="10"></td></tr>

							<tr>
								<td>Confirm Password</td>
								<td width="10"></td>
								<td>
									<input type="password" name="password_baru_2" class="form-control"></input>
								</td>
							</tr>

							<tr><td height="10"></td></tr>

							<tr>
								<td></td>
								<td></td>
								<td  align="center">
									<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
									<input type="reset" name="reset" class="btn btn-danger" value="Hapus">

								</td>
							</tr>
						</table>
						
					</form>
			</div>
		</div>
	</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>




<?php
}else {
    include "illegal.php";
}
?>










