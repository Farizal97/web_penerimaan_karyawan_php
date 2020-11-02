
<?php
  ob_start();

  	session_start();
	//cek level user
	if(@$_SESSION['admin']){

	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data id_soal yang dikirim oleh view_soal.php melalui URL
	$id_soal = $_GET['id_soal'];
	
	// Query untuk menampilkan data siswa berdasarkan id_soal yang dikirim
	$query = "SELECT * FROM tbl_soal WHERE id_soal='".$id_soal."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Document</title>

	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  	<link rel="stylesheet" href="bootstrap4/css/custom.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.1/classic/ckeditor.js"></script>

</head>
<body style="background-color: transparent;">

		



	<div class="container">

		<h1 align="center">Edit Data Soal</h1>
        <hr>

		<form method="post" action="" enctype="multipart/form-data">

		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Tulis Soal</label>
				</div>
				<div class="col-md-9">
					<textarea name="soal" id="editor_soal" required><?php echo $data['soal']; ?>
				    </textarea>
				    <script>
				        ClassicEditor
				            .create( document.querySelector( '#editor_soal' ) )
				            .catch( error => {
				                console.error( error );
				            } );
				    </script>
				</div>
			</div>
		  </div>

		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Jenis Soal</label>
				</div>
				<div class="col-md-9">
				    <select class="form-control" name="jenis_soal"  required>
				      <option selected value="<?php echo $data['jenis_soal']; ?>"><?php echo $data['jenis_soal']; ?></option>
				      <option>Psikotes</option>
				
				    </select>
				</div>
			</div>
		  </div>  

		<div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Pilihan A</label>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" name="a" value="<?php echo $data['a']; ?>" required>
				</div>
			</div>
		  </div>  

		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Pilihan B</label>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" name="b" value="<?php echo $data['b']; ?>" required>
				</div>
			</div>
		  </div>  

		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Pilihan C</label>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" name="c" value="<?php echo $data['c']; ?>" required>
				</div>
			</div>
		  </div>  

		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Pilihan D</label>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" name="d" value="<?php echo $data['d']; ?>" required>
				</div>
			</div>
		  </div>



		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label">Kunci Jawaban</label>
				</div>
				<div class="col-md-9">
				    <select class="form-control" name="knc_jawaban" required>
				      <option value="<?php echo $data['knc_jawaban']; ?>" selected ><?php echo $data['knc_jawaban']; ?></option>
				      <option value="a">A</option>
				      <option value="b">B</option>
				      <option value="c">C</option>
				      <option value="d">D</option>
				
				    </select>
				</div>
			</div>
		  </div>    


		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label">Tampilkan</label>
				</div>
				<div class="col-md-9">
				    <select class="form-control" name="aktif" required>
				      <option selected value="<?php echo $data['aktif']; ?>" ><?php echo $data['aktif']; ?></option>
				      <option value="Y">Tampilkan Soal ini</option>
				      <option value="N">Jangan Tampilkan Soal Ini</option>
			
				
				    </select>
				</div>
			</div>
		  </div>    


		  <div class="form-group">
			<button class="btn btn-primary btn-block" type="submit" name="up_soal">Update Soal</button>
		  </div>
	</form>
	</div>





	<script src="bootstrap4/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
<?php
if (isset($_POST['up_soal'])) {
		// Load file koneksi.php
		include "koneksi.php";


		$id_admin  	= $_SESSION['admin'];
		$cari_data 	= mysqli_query($connect, "SELECT nip FROM admin WHERE id_admin='$id_admin'");
		$data 		= mysqli_fetch_array($cari_data);
		$nip 		= $data['nip'];

		// Ambil data id_soal yang dikirim oleh form_ubah.php melalui URL
		$id_soal = $_GET['id_soal'];

		// Ambil Data yang Dikirim dari Form
			$soal        = $_POST['soal'];
			$jenis_soal  = $_POST['jenis_soal'];
			$a           = $_POST['a'];
			$b           = $_POST['b'];
			$c           = $_POST['c'];
			$d           = $_POST['d'];
			$knc_jawaban = $_POST['knc_jawaban'];
			$tanggal     = date("Y-m-d H:i:s");
			$aktif       = $_POST['aktif'];


		// Cek apakah user ingin mengubah fotonya atau tidak
		if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
			// Ambil data foto yang dipilih dari form
			$foto = $_FILES['foto']['name'];
			$tmp = $_FILES['foto']['tmp_name'];
			
			// Rename nama fotonya dengan menambahkan tanggal dan jam upload
			$fotobaru = date('dmYHis').$foto;
			
			// Set path folder tempat menyimpan fotonya
			$path = "images/".$fotobaru;

			// Proses upload
			if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
				// Query untuk menampilkan data siswa berdasarkan id_soal yang dikirim
				$query = "SELECT * FROM tbl_soal WHERE id_soal='".$id_soal."'";
				$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
				$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

				// Cek apakah file foto sebelumnya ada di folder images
				if(is_file("images/".$data['foto'])) // Jika foto ada
					unlink("images/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
				
				// Proses ubah data ke Database
				$query = "UPDATE tbl_soal SET 
				soal        ='".$soal."', 
				jenis_soal  ='".$jenis_soal."', 
				a           ='".$a."', 
				b           ='".$b."',
				c           ='".$c."',
				d           ='".$d."',
				knc_jawaban ='".$knc_jawaban."',
				tanggal		='".$tanggal."', 
				aktif       ='".$aktif."',
				nip			='".$nip."' 
				WHERE 
				id_soal     ='".$id_soal."'";
				$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

				if($sql){ // Cek jika proses simpan ke database sukses atau tidak
					// Jika Sukses, Lakukan :
					header("location: view_soal.php"); // Redirect ke halaman view_soal.php
				}else{
					// Jika Gagal, Lakukan :
					echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
					echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
				}
			}else{
				// Jika gambar gagal diupload, Lakukan :
				echo "Maaf, Gambar gagal untuk diupload.";
				echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
			}
		}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
			// Proses ubah data ke Database
			$query = "UPDATE tbl_soal SET 
			soal        ='".$soal."', 
			jenis_soal  ='".$jenis_soal."', 
			a           ='".$a."',
			b           ='".$b."',
			c           ='".$c."',
			d           ='".$d."', 
			knc_jawaban ='".$knc_jawaban."',
			tanggal     ='".$tanggal."',
			aktif     	='".$aktif."',
			nip			='".$nip."' 
			WHERE 
			id_soal     ='".$id_soal."'";
			$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: view_soal.php"); // Redirect ke halaman view_soal.php
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
				echo "<br><a href='up_soal.php'>Kembali Ke Form</a>";
			}
		}
	}
	}else {
	include "illegal.php";
}
	 ob_end_flush();

 ?>