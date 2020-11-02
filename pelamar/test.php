<!doctype html>
<html lang='en'>
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='../bootstrap4/css/bootstrap.min.css'>
  </head>
  <body style='background:transparent;'>

    <div class='container' style='margin-top: 5%;'>
      <div class='row'>
        <div class='col-md-6 offset-md-3'>
                <h1>Hasil Ujian</h1>

          <form action='' method='POST'>

            <table border='0'>

              <tr>
                <td width='220'>Nama</td>
                <td width='10'>:</td>
                <td>$nama</td>
              </tr>

              <tr height='10'></tr>

              <tr>
                <td width='220'>Jenis Soal</td>
                <td width='10'>:</td>
                <td>Psikotes</td>
              </tr>

              <tr height='10'></tr>

              <tr>
                <td>Jawaban Benar</td>
                <td width='10'>:</td>
                <td>$benar</td>
              </tr>

              <tr height='10'></tr>

              <tr>
                <td>Jawaban Salah</td>
                <td width='10'>:</td>
                <td>$salah</td>
              </tr>

              <tr height='10'></tr>

              <tr>
                <td>Jawaban Kosong</td>
                <td width='10'>:</td>
                <td>$kosong</td>
              </tr>

              <tr height='10'></tr>

              <tr>
                <td>Total Score</td>
                <td width='10'>:</td>
                <td>$score</td>
              </tr>

              <tr height='10'></tr>

              <tr>
                <td>Status Ujian</td>
                <td width='10'>:</td>
                <td>$keterangan</td>
              </tr>
            </table><br>



              <input type='hidden' name='benar' value='$benar' readonly>
              <input type='hidden' name='salah' value='$salah' readonly>
              <input type='hidden' name='kosong' value='$kosong' readonly>
              <input type='hidden' name='score' value='$score' readonly>
              <input type='submit' class='btn btn-primary' value='Selesai' name='simpan' >


          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js' integrity='sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh' crossorigin='anonymous'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js' integrity='sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ' crossorigin='anonymous'></script>
  </body>
</html>