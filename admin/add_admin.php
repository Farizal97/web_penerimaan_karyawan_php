<?php 
    if (isset($_POST['simpan'])) {
      
      include "koneksi.php";

      $username      =$_POST['username'];
      $password      =$_POST['password'];
      $password_conf =$_POST['password_conf'];
      $nama          =$_POST['nama'];
      $jekel         =$_POST['jekel'];
      $tempat_lhr    =$_POST['tempat_lhr'];
      $tgl_lhr       =$_POST['tgl_lhr'];
      $agama         =$_POST['agama'];
      $alamat        =$_POST['alamat'];
      $no_tlp        =$_POST['no_tlp'];
      $nip           =$_POST['nip'];
      $jabatan       =$_POST['jabatan'];

      if ($password === $password_conf) {
        $query = mysqli_query($connect ,"INSERT INTO admin VALUES ('','$username','$password','$nama','$jekel',' $tempat_lhr',' $tgl_lhr ',' $agama ','$alamat','$no_tlp','$nip','$jabatan')") or die("gagal : ".mysqli_error());
      } else{
        echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>Warning!</strong> Gagal Membuat Akun. Konfirmasi Password Tidak sama.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
      ";


      }


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

    }
 ?>


<!doctype html>
<html lang="en">
  <head>
    <title>Register HRD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body style="background: transparent;">
    
     <!-- judul -->
   <section class="atas" id="atas">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
          <br>
           <h2 class="text-center">Register HRD</h2>
           <hr>
           <p class="text-center"><b>HRD yang sudah terdaftar diharapkan dapat mendaftarkan HRD yang baru</b></p>
         </div>
       </div>
     </div>
   </section>
   <!-- akhir judul -->

    <div class="container">
         <form action="" method="post">
            <div class="form-group row">
              <label  class="col-sm-2 col-form-label">Username *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="email" class="form-control" required="true" name="username" placeholder="Email">
              </div>
            </div>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label">Password *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="password" class="form-control" required="true" name="password" placeholder="Password">
              </div>
            </div>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> Konfirmasi Password *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="password" class="form-control" required="true" name="password_conf" placeholder=" Konfirmasi Password">
              </div>
            </div>
            <hr>
            <br>

             <div class="from-group">
                 <div class="col-sm-12">
                     <h4 class="text-center">Data Pribadi</h4>
                  </div>
            </div>
            <br>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> Nama Lengkap *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" required="true" name="nama" placeholder="Nama Lengkap">
              </div>
            </div>


            <div class="form-group row">
               <label  class="col-sm-2 col-form-label">Jenis Kelamin *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                 <select class="form-control" required="true" name="jekel">
                    <option>-- Pilih --</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
              </div> 
            </div>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> Tempat Lahir *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" required="true" name="tempat_lhr" placeholder="Tempat Lahir">
              </div>
            </div>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> Tanggal Lahir *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="date" class="form-control" required="true" name="tgl_lhr">
              </div>
            </div>

             <div class="form-group row">
               <label  class="col-sm-2 col-form-label">Agama *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                 <select class="form-control" required="true" name="agama">
                    <option>-- Pilih --</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen (Katolik">Kristen (Katolik)</option>
                    <option value="Kristen (Protestan)">Kristen (Protestan)</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
              </div> 
            </div>

              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Alamat *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <textarea class="form-control" required="true" name="alamat" rows="3"></textarea>
              </div>
            </div>


            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> No Telepon*</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" required="true" name="no_tlp" placeholder="Nomor telepon">
              </div>
            </div>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> NIP*</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" required="true" name="nip" placeholder="Nomor Induk Pegawai">
              </div>
            </div>


            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> Jabatan *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" required="true" name="jabatan" placeholder="Jabatan">
              </div>
            </div>

            <div class="form-group row">
               <div class="col-sm-2">
              </div>
                <div class="col-sm-10">
                  <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                  <input type="reset" class="btn btn-danger" value="Hapus">
                </div>              
            </div>

          </form>
          <hr>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>