
<?php 

	include"koneksi.php";

	$id_pelamar = $_GET['id_pelamar'];


	$query = "SELECT * FROM pelamar where id_pelamar=$id_pelamar";
	$sql = mysqli_query($connect, $query);
	while ($data = mysqli_fetch_array($sql)) {
		


echo "
	
<!doctype html>
<html lang='en'>
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' integrity='sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb' crossorigin='anonymous'>
  </head>
  <body style='background:transparent;'>
    
  <div class='container'>
  <br>  
  <div class='row'>
    <div class='col-sm-6 col-sm-offsite-2'>
      <a href='' class='rounded'>
        <img src='ocellus.JPG'>
      </a>
    </div>
    <div class='col-sm-6'>
      <h2 class='text-center'>PT OCELLUS INDONESIA</h2>
      <p class='text-center'>Jl.Pluit Karang Ayu Barat No.22 Pluit Jakarta Utara 10510</p>
    </div>
  </div>
  <hr>
  <br>

    
   <div class='row'>
  <div class='col-md-6'>
     <h3>Data Diri</h3><hr>

    <table>
      <tr>
        <td width='220'> Nama Lengkap </td>
         <td width='30'> : </td>
        <td>".$data['nama']."</td>
      </tr>

      <tr>
        <td> Jenis Kelamin </td>
         <td> : </td>
        <td>".$data['jekel']."</td>
      </tr>

      <tr>
        <td> Tempat Lahir </td>
         <td> : </td>
        <td>".$data['tempat_lhr']."</td>
      </tr>

      <tr>
        <td> Tanggal Lahir </td>
         <td> : </td>
        <td>".$data['tgl_lhr']."</td>
      </tr>

      <tr>
        <td> Alamat </td>
         <td> : </td>
        <td>".$data['alamat']."</td>
      </tr>

      <tr>
        <td> Kode Pos </td>
         <td> : </td>
        <td>".$data['kodepos']."</td>
      </tr>

      <tr>
        <td> Kota </td>
         <td> : </td>
        <td>".$data['kota']."</td>
      </tr>

      <tr>
        <td> No. Telepon </td>
         <td> : </td>
        <td>".$data['no_tlp']."</td>
      </tr>

      <tr>
        <td> No. Handphone </td>
         <td> : </td>
        <td>".$data['no_hp']."</td>
      </tr>

      <tr>
        <td> No.KTP </td>
         <td> : </td>
        <td>".$data['ktp']."</td>
      </tr>

      <tr>
        <td> Kewarganegaraan </td>
         <td> : </td>
        <td>".$data['negara']."</td>
      </tr>

      <tr>
        <td> Agama </td>
         <td> : </td>
        <td>".$data['agama']."</td>
      </tr>

      <tr>
        <td> Hobi </td>
         <td> : </td>
        <td>".$data['hobi']."</td>
      </tr>

      <tr>
        <td> Alamat Orang Tua </td>
         <td> : </td>
        <td>".$data['alamat_ortu']."</td>
      </tr>

      <tr>
        <td> Kode Pos </td>
         <td> : </td>
        <td>".$data['kodepos_ortu']."</td>
      </tr>

      <tr>
        <td> Kota </td>
         <td> : </td>
        <td>".$data['kota_ortu']."</td>
      </tr>

      <tr>
        <td> Status </td>
         <td> : </td>
        <td>".$data['status']."</td>
      </tr>

      <tr>
        <td> Jumlah Anak </td>
         <td> : </td>
        <td>".$data['jml_anak']."</td>
      </tr>

      <tr height='60'>
        <td colspan='3'><strong>Anggota Keluarga yang dapat dihubungi dalam keadaan darurat</strong></td>
      </tr>

      <tr>
        <td> Nama Keluarga </td>
         <td> : </td>
        <td>".$data['nm_kel']."</td>
      </tr>

      <tr>
        <td> Hubungan Keluarga</td>
         <td> : </td>
        <td>".$data['hubungan']."</td>
      </tr>

      <tr>
        <td> Alamat Keluarga</td>
         <td> : </td>
        <td>".$data['alamat_kel']."</td>
      </tr>

      <tr>
        <td> No. Telepon </td>
         <td> : </td>
        <td>".$data['no_kel']."</td>
      </tr>
    </table>
  <br><br>



  <h3>Latar Belakang Pendidikan</h3>
  <hr>
    <table>
      <tr>
        <td width='220'> Pendidikan </td>
         <td width='30'> : </td>
        <td>".$data['pendidikan']."</td>
      </tr>

      <tr>
        <td> Nama Sekolah/Universitas </td>
         <td> : </td>
        <td>".$data['nm_sekolah']."</td>
      </tr>

       <tr>
        <td> Jurusan </td>
         <td> : </td>
        <td>".$data['jurusan']."</td>
      </tr>

      <tr>
        <td> Mulai Tanggal </td>
         <td> : </td>
        <td>".$data['tgl_mulai']."</td>
      </tr>

      <tr>
        <td> Selesai Tanggal </td>
         <td> : </td>
        <td>".$data['tgl_selesai']."</td>
      </tr>

      <tr>
        <td> Nilai/IPK </td>
         <td> : </td>
        <td>".$data['nilai']."</td>
      </tr>
     </table>

      <br><br>

  <h3>Pengalaman Organisasi</h3>
  <hr>

  <table>
    <tr>
          <td width='220'> Organisasi </td>
          <td width='30'> : </td>
          <td>".$data['organisasi']."</td>
        </tr> 

        <tr>
          <td> Jabatan </td>
          <td> : </td>
          <td>".$data['jabatan']."</td>
        </tr>

        <tr>
          <td> Periode </td>
          <td> : </td>
          <td>".$data['periode_org']."</td>
        </tr>   
  </table>
  <br><br>

  <h3>Pengalaman Training & Kursus</h3>
  <hr>

  <table>
    <tr>
          <td width='220'> Nama Training & Kursus </td>
          <td width='30'> : </td>
          <td>".$data['nm_kursus']."</td>
        </tr>

        <tr>
          <td> Tahun </td>
          <td> : </td>
          <td>".$data['tahun']."</td>
        </tr> 

        <tr>
          <td> Penyelenggara </td>
          <td> : </td>
          <td>".$data['penyelenggara']."</td>
        </tr>

        <tr>
          <td> Peringkat </td>
          <td> : </td>
          <td>".$data['peringkat']."</td>
        </tr>   

  </table>
  <br><br>
  
  <h3>Bahasa</h3>
    <hr>

    <table>
        <tr>
          <td width='220'> Jenis Bahasa </td>
          <td width='30'> : </td>
          <td>".$data['bahasa']."</td>
        </tr>

        <tr>
          <td> Mendengar </td>
           <td> : </td>
          <td>".$data['dengar']."</td>
        </tr>

        <tr>
          <td> Membaca </td>
           <td> : </td>
          <td>".$data['baca']."</td>
        </tr>

        <tr>
          <td> Berbicara</td>
           <td> : </td>
          <td>".$data['bicara']."</td>
        </tr>

        <tr>
          <td> Menulis </td>
           <td> : </td>
          <td>".$data['tulis']."</td>
        </tr> 
      </table>
    <br><br>

    <h3>Pengalaman Kerja</h3>
    <hr>

    <table>
      <tr>
          <td width='220'> Nama perusahaan </td>
           <td width='30'> : </td>
          <td>".$data['nm_pt']."</td>
        </tr> 

        <tr>
          <td> Mulai Kerja </td>
           <td> : </td>
          <td>".$data['tgl_awal']."</td>
        </tr> 

        <tr>
          <td> Akhir Kerja</td>
           <td> : </td>
          <td>".$data['tgl_akhir']."</td>
        </tr> 

        <tr>
          <td> Alamat perusahaan </td>
           <td> : </td>
          <td>".$data['almt_pt']."</td>
        </tr> 

        <tr>
          <td> No. Telepon</td>
           <td> : </td>
          <td>".$data['tlp_pt']."</td>
        </tr> 

         <tr>
          <td> Jabatan Awal </td>
           <td> : </td>
          <td>".$data['jabat_awal']."</td>
        </tr> 

         <tr>
          <td> Jabatan Akhir</td>
           <td> : </td>
          <td>".$data['jabat_akhir']."</td>
        </tr> 

         <tr>
          <td> Nama Atasan </td>
           <td> : </td>
          <td>".$data['nm_atasan']."</td>
        </tr> 

         <tr>
          <td> Alasan Berhenti Bekerja</td>
           <td> : </td>
          <td>".$data['alasan']."</td>
        </tr> 

         <tr>
          <td> Gaji </td>
           <td> : </td>
          <td>".$data['gaji']."</td>
        </tr> 
    
    </table> 
    <hr>
    <br>
  </div>
  <div class='col-md-6'>
  <div class='container text-center'>
  <img src='../pelamar/uploads/".$data['foto']."' width='300' height='300'><br>
  <br>
  <a href='../pelamar/uploads/".$data['dokumen']."' class='btn btn-primary' target='_blank' >Download Dokumen</a><br> <br>
   <a href='../pelamar/uploads/".$data['file_sertifikat']."' class='btn btn-primary' target='_blank' >Download Sertifikat</a>
<a class='btn btn-primary' href='email.php?username=".$data['username']."'>Kirim Email</a>

</div> 
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

";


	}

 ?>