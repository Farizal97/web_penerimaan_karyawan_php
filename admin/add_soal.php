<?php
session_start();
//cek level user
if(@$_SESSION['admin']){
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

	<h1 align="center">Tambah Soal</h1>
	<hr>
	<?php 

	if (isset($_POST['add_soal'])) {
		// Load file koneksi.php
		include "koneksi.php";

		$id_admin  	= $_SESSION['admin'];
		$cari_data 	= mysqli_query($connect, "SELECT nip FROM admin WHERE id_admin='$id_admin'");
		$data 		= mysqli_fetch_array($cari_data);
		$nip 		= $data['nip'];


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

	
	
			// Proses simpan ke Database
			$query = mysqli_query($connect,"INSERT INTO tbl_soal VALUES(
			'',
			'$soal', 
			'$jenis_soal', 
			'$a', 
			'$b', 
			'$c', 
			'$d',
			'$knc_jawaban', 
			'$tanggal',
			'$aktif',
			'$nip'
			)");

		if ($query) {
			echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
	                <strong>Sucess!</strong> Soal Berhasil Ditambahkan.
	                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	                  <span aria-hidden='true'>&times;</span>
	                </button>
	              </div>";
		}

		else{
			// Jika foto gagal diupload, Lakukan :
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
	              <strong>Ups..!</strong> Gagal Menambahkan Soal.
	              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	                <span aria-hidden='true'>&times;</span>
	              </button>
	            </div>";
		}
	}

 ?>
	<br>

	<form action="" enctype="multipart/form-data" method="post">

	<input type="hidden" name="id_soal">


  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Tulis Soal</label>
		</div>
		<div class="col-md-9">
			<textarea name="soal" id="editor" required>
		    </textarea>
		    <script>
		        ClassicEditor
		            .create( document.querySelector( '#editor' ) )
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
		    <select class="form-control" name="jenis_soal" required>
		      <option>-Pilih Soal--</option>
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
			<input type="text" class="form-control" name="a" placeholder="Masukan Pilihan A" required>
		</div>
	</div>
  </div>  

  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Pilihan B</label>
		</div>
		<div class="col-md-9">
			<input type="text" class="form-control" name="b" placeholder="Masukan Pilihan B" required>
		</div>
	</div>
  </div>  

  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Pilihan C</label>
		</div>
		<div class="col-md-9">
			<input type="text" class="form-control" name="c"  placeholder="Masukan Pilihan C" required>
		</div>
	</div>
  </div>  

  <div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<label class="col-form-label" >Pilihan D</label>
		</div>
		<div class="col-md-9">
			<input type="text" class="form-control" name="d"  placeholder="Masukan Pilihan D" required>
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
		      <option selected="selected" value="" >---Pilih Jawaban Benar---</option>
		      <option value="a">A</option>
		      <option value="b">B</option>
		      <option value="c">C</option>
		      <option value="d">D</option>
		
		    </select>
		</div>
	</div>
  </div>    

  

  <input type="hidden" name="aktif" value="Y">

  <div class="form-group">
	<button class="btn btn-primary btn-block" type="submit" name="add_soal">Tambah Soal</button>
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


