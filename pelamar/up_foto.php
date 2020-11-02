<?php
include_once 'koneksi.php';
if(isset($_POST['btn-upload_foto']))
{    
         $id_pelamar =$_GET['id_pelamar']; 

	$file      = rand(10000000,2000000000)."-".$_FILES['foto']['name'];
	$file_loc  = $_FILES['foto']['tmp_name'];
	$file_size = $_FILES['foto']['size'];
	$file_type = $_FILES['foto']['type'];
	$folder    ="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1000000024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="UPDATE pelamar SET foto='$final_file' where id_pelamar='$id_pelamar'";
		$simpan_foto = mysqli_query($connect, $sql);
		 if ($simpan_foto) {
		 	echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Sucess!</strong> Upload Foto Berhasil.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
		 }else
		 echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>Warning!</strong> Upload Foto Tidak Berhasil.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>";


	}else{
		echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>Warning!</strong> Upload Foto Tidak Berhasil.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>";
	}
}
?>
