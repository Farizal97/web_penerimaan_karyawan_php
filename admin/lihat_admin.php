<?php 

	include"koneksi.php";

	$id_admin = $_GET['id_admin'];


	$query = "SELECT * FROM admin where id_admin=$id_admin";
	$sql = mysqli_query($connect, $query);
	while ($data = mysqli_fetch_array($sql)) {
		


echo "
	
<!doctype html>
<html lang='en'>
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' integrity='sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb' crossorigin='anonymous'>
  </head>
  <body style='background:transparent;' >
		
  <div class='container'>
	<hr>	
	<div class='row'>
				<div class='col-sm-6 col-sm-offsite-2'>
					<a href='' class='rounded'>
						<img src='ocellus.JPG'>
					</a>
				</div>
				<div class='col-sm-6'>
					<h2 class='text-center'>PT OCELLUS INDONESIA</h2>
					<p class='text-center'>Jl.Pluit Karang Ayu Barat No.22 Pluit Jakarta Utara 10510</p>
				</div>
			</div>
			<hr>
			<br>

			<h3 class='text-center'>Data Pribadi</h3><hr>

			 <table border='0'>
			      <tr>
			        <td width='180'> Nama Lengkap </td>
			         <td width='30'> : </td>
			        <td>".$data['nama']."</td>
			      </tr>

					<tr><td height='20'></td></tr>

			      <tr>
			        <td> Jenis Kelamin </td>
			         <td> : </td>
			        <td>".$data['jekel']."</td>
			      </tr>

			      	<tr><td height='20'></td></tr>

			      <tr>
			        <td> Tempat Lahir </td>
			         <td> : </td>
			        <td>".$data['tempat_lhr']."</td>
			      </tr>

			      	<tr><td height='20'></td></tr>

			      <tr>
			        <td> Tanggal Lahir </td>
			         <td> : </td>
			        <td>".$data['tgl_lhr']."</td>
			      </tr>
					
					<tr><td height='20'></td></tr>

			      <tr>
			        <td> Agama </td>
			         <td> : </td>
			        <td>".$data['agama']."</td>
			      </tr>
					
					<tr><td height='20'></td></tr>

			      <tr>
			        <td> Alamat </td>
			         <td> : </td>
			        <td>".$data['alamat']."</td>
			      </tr>
				
					<tr><td height='20'></td></tr>

			      <tr>
			        <td> No Telepon </td>
			         <td> : </td>
			        <td>".$data['no_tlp']."</td>
			      </tr>

					<tr><td height='20'></td></tr>

			      <tr>
			        <td> NIP </td>
			         <td> : </td>
			        <td>".$data['nip']."</td>
			      </tr>
					
					<tr><td height='20'></td></tr>

			      <tr>
			        <td> Jabatan </td>
			         <td> : </td>
			        <td>".$data['jabatan']."</td>
			      </tr>


			    </table> 
			    <hr>
			    <br>






	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js' integrity='sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh' crossorigin='anonymous'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js' integrity='sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ' crossorigin='anonymous'></script>
  </body>
</html>

";


	}

 ?>