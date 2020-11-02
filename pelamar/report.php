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
  <body style="margin-top: 20px;background: transparent;">

    <div class="container">
      

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selesai</strong> Anda Sudah Mengerjakan Ujian.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <?php 

      include 'koneksi.php';
      $id_pelamar=$_GET['id_pelamar'];
      $carihasil = mysqli_query($connect,"SELECT * FROM tbl_nilai where id_pelamar='$id_pelamar'");
      $datahasil = mysqli_fetch_array($carihasil); 
     ?>

     <table border="0">
       <tr>
         <td>ID PELAMAR</td>
         <td width="20">:</td>
         <td><?php echo $datahasil['id_pelamar']; ?></td>
       </tr>

       <tr height="20"><td></td></tr>

       <tr>
         <td>Jawaban Benar</td>
         <td>:</td>
         <td><?php echo $datahasil['jawaban_benar']; ?></td>
       </tr>

       <tr height="20"><td></td></tr>

       <tr>
         <td>Jawaban Salah</td>
         <td>:</td>
         <td><?php echo $datahasil['jawaban_salah']; ?></td>
       </tr>

       <tr height="20"><td></td></tr>

       <tr>
         <td>Jawaban Kosong</td>
         <td>:</td>
         <td><?php echo $datahasil['jawaban_kosong']; ?></td>
       </tr>

       <tr height="20"><td></td></tr>

       <tr>
         <td>Nilai Akhir</td>
         <td>:</td>
         <td><?php echo $datahasil['score']; ?></td>
       </tr>

       <tr height="20"><td></td></tr>

       <tr>
         <td>Keterangan</td>
         <td>:</td>
         <td><?php echo $datahasil['keterangan']; ?></td>
       </tr>




     </table>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>