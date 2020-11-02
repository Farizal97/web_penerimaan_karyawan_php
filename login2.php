<?php
session_start();
if($_SESSION){
	if($_SESSION['admin'])
	{
		header("Location: admin/");
	}
	if($_SESSION['pelamar'])
	{
		header("Location: pelamar/");
	}

}
?>

<?php 

	include"koneksi.php";
	if (@$_POST['login']) {
		
		$username = mysqli_real_escape_string($connect, $_POST['username']);
		$password =	mysqli_real_escape_string($connect, $_POST['password']);
		$level    = mysqli_real_escape_string($connect, $_POST['level']);

		if ($level == 'admin') {
			$sql1 	= mysqli_query($connect, "SELECT * FROM admin where username='$username' AND password='$password'");
			$data1	= mysqli_fetch_array($sql1);
			$id1 	= $data1[0];
			$cek1	= mysqli_num_rows($sql1);
			if ($cek1 > 0) {
				$_SESSION['admin'] = $id1;
				header("location: admin/index.php");
			} else{
				echo "<script>alert('login admin gagal, silahkan ulang kembali')</script>";
			}


		} else if($level == 'pelamar'){

			$sql2 	= mysqli_query($connect, "SELECT * FROM pelamar where username='$username' AND password='$password'");
			$data2	= mysqli_fetch_array($sql2);
			$id2 	= $data2[0];
			$cek2	= mysqli_num_rows($sql2);
			if ($cek2 > 0) {
				$_SESSION['pelamar'] = $id2;
				header("location: pelamar/index.php");
			} else{
				echo "<script>alert('login admin gagal, silahkan ulang kembali')</script>";
			}

		}

	}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recruitment OCELLUS</title>

	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap4/css/login.css">
	<link rel="stylesheet" href="bootstrap4/css/custom.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

</head>
<body style="background-image: url(bootstrap4/img/bg.png");">




<?php 
	include "navbarb4.php";
 ?>




	<div class="container">
		<div class="login-container">
	            <div id="output"></div>
	            <div class="avatar">
	            	<img src="bootstrap4/img/admin.png" alt="">
	            </div>
	            <div class="form-box">
	                <form action="" method="POST">
	                    <input name="username" type="text" placeholder="Email">
	                    <input name="password" type="Password" placeholder="password">
	                    <br><br>
							<div class="form-group">
								<select name="level" class="form-control" required>
								<option value="">Pilih Hak Akses</option>
								<option value="admin">HRD</option>
								<option value="pelamar">Pelamar</option>
							 	</select>
							</div>


	                    <input class="btn btn-primary btn-block login" id="login" name="login" type="submit" value="Log In" />
	                </form>
	            </div>
		<a href="daftar_pelamar.php">Registrasi</a>

	        </div>
	</div>


<?php 
	include "footerb4.php";
 ?>

	<script src="bootstrap4/js/login.js"></script>
	<script src="bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>