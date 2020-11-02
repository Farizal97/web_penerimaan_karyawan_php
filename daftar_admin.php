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
  <body>
    
     <!-- judul -->
   <section class="atas" id="atas">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
          <br>
           <h2 class="text-center">Register Admin HR</h2>
           <hr>
           <p class="text-center"><b>Admin HR yang sudah terdaftar diharapkan dapat mendaftarkan Admin HR yang baru</b></p>
         </div>
       </div>
     </div>
   </section>
   <!-- akhir judul -->

    <div class="container">
         <form>
            <div class="form-group row">
              <label name="username" class="col-sm-2 col-form-label">Email *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="email" class="form-control" name="username" placeholder="Email">
              </div>
            </div>

            <div class="form-group row">
              <label name="password" class="col-sm-2 col-form-label">Password *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" name="password" placeholder="Password">
                <small name="password" class="text-muted">
                  Minimal 8 karakter.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <label name="password" class="col-sm-2 col-form-label"> Konfirmasi Password *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" name="password" placeholder=" Konfirmasi Password">
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
              <label name="nama" class="col-sm-2 col-form-label"> Nama Lengkap *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
              </div>
            </div>


            <div class="form-group row">
               <label name="jekel" class="col-sm-2 col-form-label">Jenis Kelamin *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                 <select class="form-control" name="jekel">
                    <option>-- Pilih --</option>
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                    <option>Lainnya</option>
                </select>
              </div> 
            </div>

              <div class="form-group row">
                <label name="alamat" class="col-sm-2 col-form-label">Alamat *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <textarea class="form-control" name="alamat" rows="3"></textarea>
              </div>
            </div>


            <div class="form-group row">
              <label name="no_tlp" class="col-sm-2 col-form-label"> No Telepon*</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" name="no_tlp" placeholder="Nomor telepon">
              </div>
            </div>

            <div class="form-group row">
              <label name="nip" class="col-sm-2 col-form-label"> NIP*</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" name="nip" placeholder="Nomor Induk Pegawai">
              </div>
            </div>


            <div class="form-group row">
              <label name="jabatan" class="col-sm-2 col-form-label"> Jabatan *</label>
              <div class="col-sm-7 col-sm-offsite-3">
                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
              </div>
            </div>

            <div class="form-group row">
               <div class="col-sm-2">
              </div>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary ">Simpan</button>
                  <button type="reset" class="btn btn-primary">Batal</button>
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