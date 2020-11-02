<!doctype html>
<html lang="en">
  <head>
    <title>Register Pelamar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body style="background-image: url(bootstrap4/img/bg.png");">

  <?php 
  include "navbarb4.php";
 ?>

<?php 

  include"koneksi.php";

  if (isset($_POST['register'])) {
    
    $username      =$_POST['username'];
    $password      =$_POST['password'];
    $password_conf =$_POST['password_conf'];

    if ($password==$password_conf) {
      
      $query = mysqli_query($connect, "INSERT into pelamar (username,password) VALUES ('$username','$password')");

      if ($query) {
        echo "
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Sucess!</strong> Pendaftaran Akun Berhasil.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
        ";
      }else{
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Warning!</strong> Data Gagal Tersimpan.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
      }


    }else{
      echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>Warning!</strong> Gagal Membuat Akun. Konfirmasi Password Tidak sama.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
      ";
    }

  }

 ?>


    <!-- judul -->
   <section class="atas" id="atas">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
          <br>
           <h2 class="text-center">Register Pelamar</h2>
           <hr>
           <p><marquee>Diharapkan Register terlebih dahulu sebelum melakukan login pada Website Recruitment ini!!</marquee></p>
         </div>
       </div>
     </div>
   </section>
   <!-- akhir judul -->

   <!-- form -->
   <div class="container">
         <form action="" method="post">
            <div class="form-group row">
              <label name="username" class="col-sm-2 col-form-label">Username *</label>
              <div class="col-sm-5 col-sm-offsite-5">
                <input type="email" required="true" class="form-control" name="username" placeholder="Email">
              </div>
            </div>

            <div class="form-group row">
              <label name="password" class="col-sm-2 col-form-label">Password *</label>
              <div class="col-sm-5 col-sm-offsite-5">
                <input type="password" required="true" class="form-control" name="password" placeholder="Password">
              </div>
            </div>

            <div class="form-group row">
              <label name="password" class="col-sm-2 col-form-label"> Konfirmasi Password *</label>
              <div class="col-sm-5 col-sm-offsite-5">
                <input type="password" required="true" class="form-control" name="password_conf" placeholder=" Konfirmasi Password">
              </div>
            </div>


              <div class="form-group row">
               <div class="col-sm-2">
              </div>
                <div class="col-sm-10">
                  <input type="submit" class="btn btn-primary" name="register" value="Simpan" \>
                  <a href="login2.php" class="btn btn-primary">Batal</a>
                </div>              
            </div>


          </form>


          <hr>
  </div>
   <!-- akhir form -->


   <?php 
  include "footerb4.php";
 ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

