	<?php

	 ob_start();

  	session_start();
	//cek level user
	if(@$_SESSION['admin']){

	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data id_lowongan yang dikirim oleh index.php melalui URL
	$id_lowongan = $_GET['id_lowongan'];
	
	// Query untuk menampilkan data lowongan berdasarkan id_lowongan yang dikirim
	$query = "SELECT * FROM lowongan WHERE id_lowongan='".$id_lowongan."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  	<link rel="stylesheet" href="bootstrap4/css/custom.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.1/classic/ckeditor.js"></script>


</head>
<body style="background-color: transparent;">


<div class="container">
	<h1 align="center">Edit Data Karir</h1>
  <hr>
  <br>
	<form method="post" action="">

  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >ID Lowongan</label>
		</div>
		<div class="col-md-9">
			<input type="text" class="form-control" name="id_lowongan" disabled  value="<?php echo $id_lowongan ?>">
		</div>
	</div>
  </div>


  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Posisi Pekerjaan</label>
		</div>
		<div class="col-md-9">
			<input type="text" class="form-control" name="posisi_pekerjaan"  value="<?php echo $data['posisi_pekerjaan']; ?>">
		</div>
	</div>
  </div> 

  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Lokasi Seleksi</label>
		</div>
		<div class="col-md-9">
			<input type="text" class="form-control" name="lokasi_seleksi"  value="<?php echo $data['lokasi_seleksi']; ?>">
		</div>
	</div>
  </div> 

  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Tanggal Mulai</label>
		</div>
		<div class="col-md-9">
			<input type="date" class="form-control" name="tgl_mulai" value="<?php echo $data['tgl_mulai']; ?>">
		</div>
	</div>
  </div> 

  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Tanggal Selesai</label>
		</div>
		<div class="col-md-9">
			<input type="date" class="form-control" name="tgl_selesai"  value="<?php echo $data['tgl_selesai']; ?>">
		</div>
	</div>
  </div> 

   <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label">Deskripsi Pekerjaan</label>
		</div>
		<div class="col-md-9">
			<textarea name="deskripsi_pekerjaan" id="editor_lowongan"><?php echo $data['deskripsi_pekerjaan']; ?></textarea>
		    <script>
		        ClassicEditor
		            .create( document.querySelector( '#editor_lowongan' ) )
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
			<label class="col-form-label" >Jurusan Akademik</label>
		</div>
		<div class="col-md-9">
			<input type="text" class="form-control" name="jurusan_akademik" value="<?php echo $data['jurusan_akademik']; ?>">
		</div>
	</div>
  </div> 

  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Lokasi Pekerjaan</label>
		</div>
		<div class="col-md-9">
			<input type="text" class="form-control" name="lokasi_pekerjaan" value="<?php echo $data['lokasi_pekerjaan']; ?>">
		</div>
	</div>
  </div> 

  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Tampilkan</label>
		</div>
		<div class="col-md-9">
			<select class="form-control" name="view">
		      <option value="aktif">Aktif</option>
		      <option value="tidak aktif">Tidak Aktif</option>
		
		    </select>
		</div>
	</div>
  </div>


<div class="form-group">
	<button class="btn btn-primary btn-block" type="submit" name="up_lwg">Update Karir</button>
  </div>  

</form>
</div>



</body>
</html>


<?php 

	if (isset($_POST['up_lwg'])) {
		include "koneksi.php";

		$id_admin  	= $_SESSION['admin'];
		$cari_data 	= mysqli_query($connect, "SELECT nip FROM admin WHERE id_admin='$id_admin'");
		$data 		= mysqli_fetch_array($cari_data);
		$nip 		= $data['nip'];


		// Ambil data Lowongan yang dikirim oleh form_ubah.php melalui URL
		$id_lowongan = $_GET['id_lowongan'];

		// Ambil Data yang Dikirim dari Form
		$posisi_pekerjaan    = $_POST['posisi_pekerjaan'];
		$lokasi_seleksi      = $_POST['lokasi_seleksi'];
		$tgl_mulai           = $_POST['tgl_mulai'];
		$tgl_selesai         = $_POST['tgl_selesai'];
		$deskripsi_pekerjaan = $_POST['deskripsi_pekerjaan'];
		$jurusan_akademik    = $_POST['jurusan_akademik'];
		$lokasi_pekerjaan    = $_POST['lokasi_pekerjaan'];
		$view                 = $_POST['view'];




			
		 // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
			// Proses ubah data ke Database
			$query = "UPDATE lowongan SET 
				posisi_pekerjaan    ='$posisi_pekerjaan', 
				lokasi_seleksi      ='$lokasi_seleksi', 
				tgl_mulai           ='$tgl_mulai', 
				tgl_selesai         ='$tgl_selesai', 
				deskripsi_pekerjaan ='$deskripsi_pekerjaan', 
				jurusan_akademik    ='$jurusan_akademik', 
				lokasi_pekerjaan    ='$lokasi_pekerjaan', 
				nip                 ='$nip',
				view                ='$view' WHERE id_lowongan='$id_lowongan'";
				
			$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: view_lwg.php"); // Redirect ke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
				echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
			}
	}
}
 ?>