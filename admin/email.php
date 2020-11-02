<?php 
  
  include"koneksi.php";

  $username =$_GET['username'];


  if (isset($_POST['kirimemail'])) {


  $isi_email =$_POST['editor1'];
  $username  =$_POST['username'];
   
  $to = $username;
  $subject = "Test email tanpa PHPMailer";
  $message = $isi_email;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: <recruitment.ocellus@gmail.com>' . "\r\n";
  mail($to,$subject,$message,$headers);


if (mail($to,$subject,$message,$headers)) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Sucess!</strong> Email Terkirim.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
    }else{
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>Warning!</strong> Email Tidak Terkirim.
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
    <title>Email</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
  </head>
  <body style="background: transparent;">



    <!-- judul -->
      <section class="atas" id="atas">
         <div class="container">
           <div class="row">
             <div class="col-sm-12">
              <br>
               <h2 class="text-center">Send Interview Email</h2>
               <hr>
             </div>
           </div>
         </div>
   </section>
    <!-- akhir judul -->

    <!-- isi -->
    <div class="container">

      <form action="" method="post">

          <div class="form-group">
            <label for="exampleInputEmail1">Penerima</label>
            <input type="email" class="form-control" name="username" value="<?php echo "$username"; ?>" aria-describedby="emailHelp" placeholder="Email Pelamar">
          </div>
          <br>

          <div class="form-group row">
              <div class="col-sm-12">
                 <textarea name="editor1">
                   <p>Dear Kandidat/Pelamar</p>

                  <p>&nbsp;</p>

                  <p>Diharapkan datang ke PT OCELLUS INDONESIA untuk melakukan tes interview/wawancara, tanggal dan waktu kami beritahukan dibawah ini :</p>

                  <p>&nbsp;</p>

                  <p><strong>Tanggal : 20 Desember 2017</strong></p>

                  <p><strong>Waktu&nbsp; &nbsp; : 10:00 - 12:00</strong></p>

                  <p>&nbsp;</p>

                  <p>Kami berharap anda datang tepat waktu,</p>

                  <p>Terima Kasih</p>

                  <p>&nbsp;</p>

                  <p>Sincerely,</p>

                  <p>Admin HR PT Ocellus Indonesia</p>

                 </textarea>
                    <script>
                      CKEDITOR.replace( 'editor1' );
                    </script>
              </div>
          </div>
          <br>
          <br>

          <div class="form-group row">
               <div class="col-sm-5">
              </div>
                <div class="col-sm-7">
                   <input type="submit" class="btn btn-primary" name="kirimemail" value="Kirim">
                   <a class="btn btn-danger" href="index.php" target="_blank" role="button">Batal</a>
                </div>              
            </div>
             <hr>
            

          <div class="form-group">
            <div class="col-sm-12">
              <p>&copy; copyright 2017 | Ocellus Indonesia by. <a href="#">Mahasiswi AMIK BSI</a> </p>
            </div>
          </div>
             
        
      </form>
     

     
    </div>
    
    <!-- akhir isi -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>