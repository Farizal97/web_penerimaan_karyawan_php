<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body style="background: transparent; margin-top: 20px;">


 <!-- judul -->
   <section class="atas" id="atas">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <h2 class="text-center">Upload File</h2>
           <hr>
           <p><marquee><b>Tulisan yang bertanda bintang (*) wajib diupload!!</b></marquee></p>
         </div>
       </div>
     </div>
   </section>
   <!-- akhir judul -->
   
   
    <div class="container">
          <form action="" method="post" enctype="multipart/form-data">
              <table border="0" align="center">
                <tr height="50">
                  <td width="160">Masukan Dokumen Penunjang(pdf) *</td> 
                  <td>
                      <input type="file" class="form-control-file" name="dokumen" id="exampleFormControlFile1">
                  </td>  
                   <td><button type="sumbit" name="btn-upload_dokumen" class="btn btn-primary">Upload</button></td>  
                </tr>
              </table>
          </form>
    
         <?php include"up_dokumen.php"; ?>
    
         <form action="" method="post" enctype="multipart/form-data">
             <table border="0" align="center">
              <tr height="50">
                <td width="160">Masukan Pas Photo</td>
                <td>        
                  <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1">
                </td>
                <td><button type="sumbit" name="btn-upload_foto" class="btn btn-primary">Upload</button></td>
              </tr>
            </table>
          </form>
    
         <?php include"up_foto.php"; ?>
    
         <form action="" method="post" enctype="multipart/form-data">
             <table border="0" align="center">
              <tr height="50">
                <td width="160">Masukan Sertifikat (pdf)</td>
                <td>        
                  <input type="file" class="form-control-file" name="file_sertifikat" id="exampleFormControlFile1">
                </td>
                <td><button type="sumbit" name="btn-upload_file_sertifikat" class="btn btn-primary">Upload</button></td>
              </tr>
            </table>
          </form>
    
         <?php include"up_sertifikat.php"; ?>
    


      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>