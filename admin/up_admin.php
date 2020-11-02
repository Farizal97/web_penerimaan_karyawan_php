<!doctype html>
<html lang="en">
  <head>
    <title>Web Recruitment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body style="background: transparent;margin-top: 20px;">

    <?php
    // Load file koneksi.php
    include "koneksi.php";
    
    // Ambil data id_admin yang dikirim oleh index.php melalui URL
    $id_admin = $_GET['id_admin'];
    
    // Query untuk menampilkan data admin berdasarkan ID Admin yang dikirim
    $query = "SELECT * FROM admin WHERE id_admin='".$id_admin."'";
    $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    ?>

      <!-- judul -->
   <section class="atas" id="atas">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
          <br>
           <h2 class="text-center">Ubah Data HRD</h2>
           <hr>
         </div>
       </div>
     </div>
   </section>
   <!-- akhir judul -->

    <div class="container">
         <form action="pro_up_admin.php?id_admin=<?php echo $id_admin; ?>" method="post">
            <div class="form-group row">
              <label  class="col-sm-2 col-form-label">Username </label>
              <div class="col-sm-7 col-sm-offsite-3">
               <input type="email" readonly class="form-control-plaintext" name="username" value="<?php echo $data['username']; ?>">
              </div>
            </div>

             <div class="from-group">
                 <div class="col-sm-12">
                     <h4 class="text-center">Data Pribadi</h4>
                  </div>
            </div>
            <br>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> Nama Lengkap </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama"  required="true" value="<?php echo $data['nama']; ?>">
              </div>
            </div>


            <div class="form-group row">
               <label  class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                 <select class="form-control" name="jekel" required="true">
                    <option value="<?php echo $data['jekel']; ?>" selected ><?php echo $data['jekel']; ?></option>
                    <option value="Laki-Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
              </div> 
            </div>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> Tempat Lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="tempat_lhr"  required="true" value="<?php echo $data['tempat_lhr']; ?>">
              </div>
            </div>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_lhr" required="true" value="<?php echo $data['tgl_lhr']; ?>">
              </div>
            </div>

             <div class="form-group row">
               <label  class="col-sm-2 col-form-label">Agama</label>
              <div class="col-sm-10">
                 <select class="form-control" name="agama" required="true">
                    <option value="<?php echo $data['agama']; ?>" selected ><?php echo $data['agama']; ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen(Katolik">Kristen (Katolik)</option>
                    <option value="Kristen (Protestan)">Kristen (Protestan)</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
              </div> 
            </div>

              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Alamat </label>
              <div class="col-sm-10">
                <textarea class="form-control" name="alamat" required="true" rows="3"><?php echo $data['alamat']; ?></textarea>
              </div>
            </div>


            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> No Telepon</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="no_tlp" required="true" value="<?php echo $data['no_tlp']; ?>">
              </div>
            </div>

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> NIP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="nip"  required="true" value="<?php echo $data['nip']; ?>">
              </div>
            </div>


            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"> Jabatan </label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="jabatan" required="true" value="<?php echo $data['jabatan']; ?>">
              </div>
            </div>

            <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Update Profile</button>
                </div>              
            </div>

          </form>

  </div>


     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>