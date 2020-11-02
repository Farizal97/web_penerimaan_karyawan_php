
<?php
session_start();
//cek level user
if(@$_SESSION['admin']){
		  include "koneksi.php";	


	$search = mysqli_query($connect, "SELECT nip FROM admin");
	$hasil =  mysqli_fetch_array($search);


?>
<?php 

	  $carikode = mysqli_query($connect, "SELECT id_lowongan from lowongan") or die (mysqli_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  $jumlah_data = mysqli_num_rows($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($jumlah_data[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $jumlah_data + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $kode_otomatis = "LWG".str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "LWG0001";
  }
 ?>


 <?php 
 	if (isset($_POST['add_lwg'])) {
 		// Load file koneksi.php
		include "koneksi.php";

		// Ambil Data yang Dikirim dari Form

		$id_lowongan		 = $_POST['id_lowongan'];
		$posisi_pekerjaan    = $_POST['posisi_pekerjaan'];
		$lokasi_seleksi      = $_POST['lokasi_seleksi'];
		$tgl_mulai           = $_POST['tgl_mulai'];
		$tgl_selesai         = $_POST['tgl_selesai'];
		$deskripsi_pekerjaan = $_POST['deskripsi_pekerjaan'];
		$jurusan_akademik    = $_POST['jurusan_akademik'];
		$lokasi_pekerjaan    = $_POST['lokasi_pekerjaan'];
		$nip                 = $_POST['nip'];
		$view                = $_POST['view'];



			// Proses simpan ke Database
			$query = "INSERT INTO lowongan(
			id_lowongan,
			posisi_pekerjaan, 
			lokasi_seleksi, 
			tgl_mulai, 
			tgl_selesai, 
			deskripsi_pekerjaan, 
			jurusan_akademik, 
			lokasi_pekerjaan, 
			nip,
			view) 
			VALUES(
			'$id_lowongan',
			'$posisi_pekerjaan', 
			'$lokasi_seleksi', 
			'$tgl_mulai', 
			'$tgl_selesai',
			'$deskripsi_pekerjaan',
			'$jurusan_akademik',
			'$lokasi_pekerjaan', 
			'$nip',
			'$view')";

			

			if(mysqli_query($connect,$query)){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: view_lwg.php"); // Redirect ke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database";
			}
			echo "<br><a href='admin.php'>Kembali Ke Form</a>";
 	}
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
<body style="background-color: transparent; margin-top: 10px;">

	<div class="container">
		<h1 align="center">Tambah Data Karir</h1>
		<hr>


	


		<form action="" method="post">

			<div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >ID Lowongan</label>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" name="id_lowongan" readonly="true" value="<?php echo $kode_otomatis ?>">
				</div>
			</div>
		  </div>


			<div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Posisi Pekerjaan</label>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" name="posisi_pekerjaan"  placeholder="Posisi Pekerjaan">
				</div>
			</div>
		  </div> 

		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Lokasi Seleksi</label>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" name="lokasi_seleksi"  placeholder="Lokasi Seleksi">
				</div>
			</div>
		  </div> 

		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Tanggal Mulai</label>
				</div>
				<div class="col-md-9">
					<input type="date" class="form-control" name="tgl_mulai">
				</div>
			</div>
		  </div> 

		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Tanggal Selesai</label>
				</div>
				<div class="col-md-9">
					<input type="date" class="form-control" name="tgl_selesai">
				</div>
			</div>
		  </div> 

		   <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label">Deskripsi Pekerjaan</label>
				</div>
				<div class="col-md-9">
					<textarea name="deskripsi_pekerjaan" id="editor_lowongan"></textarea>
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
					<input type="text" class="form-control" name="jurusan_akademik" placeholder="Jurusan Akademik">
				</div>
			</div>
		  </div> 

		  <div class="form-group">
			<div class="row">
				<div class="col-md-3">
					<label class="col-form-label" >Lokasi Pekerjaan</label>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" name="lokasi_pekerjaan" placeholder="Lokasi Pekerjaan">
				</div>
			</div>
		  </div> 


		  <div class="form-group">
			<div class="row">
			
				<div class="col-md-9">
					<input type="hidden" class="form-control" name="nip" value="<?php echo $hasil['nip']; ?>" placeholder="">
				</div>
			</div>
		  </div> 

		  			<input type="hidden" name="view" value="aktif">

			<div class="form-group">
				<button class="btn btn-primary btn-block" type="submit" name="add_lwg">Tambah Karir</button>
		  	</div>  

		</form>
	</div>

</body>
</html>


<?php
}else {
	include "illegal.php";
}
?>


