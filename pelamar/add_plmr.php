<?php 
  
  session_start();
  //cek level user
  if(@$_SESSION['pelamar']){
    $id_pelamar = $_SESSION['pelamar'];
  include"koneksi.php";

  $query = mysqli_query($connect,"SELECT * FROM pelamar where id_pelamar='$id_pelamar'");
  $data = mysqli_fetch_array($query);

  $posisi_pekerjaan =$_GET['posisi_pekerjaan'];
  $lokasi_seleksi =$_GET['lokasi_seleksi'];

  if (isset($_POST['add_plmr'])) {
    include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$posisi_pekerjaan = $_POST['posisi_pekerjaan'];
$lokasi_seleksi   = $_POST['lokasi_seleksi'];
$username         = $_POST['username'];
$password         = $_POST['password'];
$nama             = $_POST['nama'];
$jekel            = $_POST['jekel'];
$tempat_lhr       = $_POST['tempat_lhr'];
$tgl_lhr          = $_POST['tgl_lhr'];
$alamat           = $_POST['alamat'];
$kodepos          = $_POST['kodepos'];
$kota             = $_POST['kota'];
$no_tlp           = $_POST['no_tlp'];
$no_hp            = $_POST['no_hp'];
$ktp              = $_POST['ktp'];
$negara           = $_POST['negara'];
$agama            = $_POST['agama'];
$hobi             = $_POST['hobi'];
$alamat_ortu      = $_POST['alamat_ortu'];
$kodepos_ortu     = $_POST['kodepos_ortu'];
$kota_ortu        = $_POST['kota_ortu'];
$status           = $_POST['status'];
$jml_anak         = $_POST['jml_anak'];
$nm_kel           = $_POST['nm_kel'];
$hubungan         = $_POST['hubungan'];
$alamat_kel       = $_POST['alamat_kel'];
$no_kel           = $_POST['no_kel'];
$pendidikan       = $_POST['pendidikan'];
$nm_sekolah       = $_POST['nm_sekolah'];
$jurusan          = $_POST['jurusan'];
$tgl_mulai        = $_POST['tgl_mulai'];
$tgl_selesai      = $_POST['tgl_selesai'];
$nilai            = $_POST['nilai'];
$organisasi       = $_POST['organisasi'];
$jabatan          = $_POST['jabatan'];
$periode_org      = $_POST['periode_org'];
$nm_kursus        = $_POST['nm_kursus'];
$tahun            = $_POST['tahun'];
$penyelenggara    = $_POST['penyelenggara'];
$peringkat        = $_POST['peringkat'];
$bahasa           = $_POST['bahasa'];
$dengar           = $_POST['dengar'];
$baca             = $_POST['baca'];
$bicara           = $_POST['bicara'];
$tulis            = $_POST['tulis'];
$nm_pt            = $_POST['nm_pt'];
$tgl_awal         = $_POST['tgl_awal'];
$tgl_akhir        = $_POST['tgl_akhir'];
$almt_pt          = $_POST['almt_pt'];
$tlp_pt           = $_POST['tlp_pt'];
$jabat_awal       = $_POST['jabat_awal'];
$jabat_akhir      = $_POST['jabat_akhir'];
$nm_atasan        = $_POST['nm_atasan'];
$alasan           = $_POST['alasan'];
$gaji             = $_POST['gaji'];


// id_pelamar, posisi_pekerjaan, lokasi_seleksi, username, password

  // Proses simpan ke Database
  $query = "UPDATE pelamar
  SET
  posisi_pekerjaan = '".$posisi_pekerjaan."',
  lokasi_seleksi   = '".$lokasi_seleksi."',
  nama             ='".$nama."', 
  jekel            ='".$jekel."',
  tempat_lhr       ='".$tempat_lhr."', 
  tgl_lhr          ='".$tgl_lhr."', 
  alamat           ='".$alamat."', 
  kodepos          ='".$kodepos."', 
  kota             ='".$kota."', 
  no_tlp           ='".$no_tlp."', 
  no_hp            ='".$no_hp."', 
  ktp              ='".$ktp."',
  negara           ='".$negara."', 
  agama            ='".$agama."', 
  hobi             ='".$hobi."',  
  alamat_ortu      ='".$alamat_ortu."',
  kodepos_ortu     ='".$kodepos_ortu."', 
  kota_ortu        ='".$kota_ortu."', 
  status           ='".$status."', 
  jml_anak         ='".$jml_anak."', 
  nm_kel           ='".$nm_kel."', 
  hubungan         ='".$hubungan."', 
  alamat_kel       ='".$alamat_kel."',
  no_kel           ='".$no_kel."',  
  pendidikan       ='".$pendidikan."',  
  nm_sekolah       ='".$nm_sekolah."', 
  jurusan          ='".$jurusan."', 
  tgl_mulai        ='".$tgl_mulai."', 
  tgl_selesai      ='".$tgl_selesai."', 
  nilai            ='".$nilai."', 
  organisasi       ='".$organisasi."', 
  jabatan          ='".$jabatan."', 
  periode_org      ='".$periode_org."', 
  nm_kursus        ='".$nm_kursus."', 
  tahun            ='".$tahun."', 
  penyelenggara    ='".$penyelenggara."', 
  peringkat        ='".$peringkat."', 
  bahasa           ='".$bahasa."', 
  dengar           ='".$dengar."', 
  baca             ='".$baca."', 
  bicara           ='".$bicara."', 
  tulis            ='".$tulis."', 
  nm_pt            ='".$nm_pt."', 
  tgl_awal         ='".$tgl_awal."', 
  tgl_akhir        ='".$tgl_akhir."', 
  almt_pt          ='".$almt_pt."', 
  tlp_pt           ='".$tlp_pt."', 
  jabat_awal       ='".$jabat_awal."', 
  jabat_akhir      ='".$jabat_akhir."',
  nm_atasan        ='".$nm_atasan."', 
  alasan           ='".$alasan."', 
  gaji             ='".$gaji."'
  
  where
  id_pelamar       = $id_pelamar";
  
  ;



  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: add_berkas.php?id_pelamar=$id_pelamar"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
  }

 ?>

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
  <body style="background: transparent; margin-top: 20px;">
   
   <!-- judul -->
   <section class="atas" id="atas">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <h2 class="text-center">Formulir Pendaftaran</h2>
           <hr>
           <p><marquee>Silahkan isi form ini dengan data yang benar!!  Tulisan yang bertanda bintang (*) wajib diisi!!</marquee></p>
         </div>
       </div>
     </div>
   </section>
   <!-- akhir judul -->

  <!-- formulir -->
   <div class="container">
     <form action="" method="post">
       <div class="form-group row">
              <label name="posisi_pekerjaan" class="col-sm-2 col-form-label">Posisi Pekerjaan *</label>
           <div class="col-sm-7 col-sm-offsite-3">
              <input type="text" class="form-control" readonly="true" name="posisi_pekerjaan" value="<?php echo $posisi_pekerjaan; ?>" >
          </div>
       </div>

       <div class="form-group row">
              <label name="lokasi_seleksi" class="col-sm-2 col-form-label">Lokasi Seleksi</label>
           <div class="col-sm-7 col-sm-offsite-3">
              <input type="text" class="form-control" readonly="true" name="lokasi_seleksi" value="<?php echo $lokasi_seleksi; ?>" placeholder="lokasi seleksi">

          </div>
       </div>

       <div class="form-group row">
              <label name="username" class="col-sm-2 col-form-label">Username</label>
           <div class="col-sm-7 col-sm-offsite-3">
              <input type="text" readonly="true" class="form-control" name="username" value="<?php echo $data['username']; ?>">
          </div>
       </div>
       <br>


       <div class="form-group row">
           <div class="col-sm-12">
              <h4 class="text-left">Data Pribadi</h4>
              <hr>
          </div>
       </div>

       <div class="form-group row">
           <label name="nama" class="col-sm-2 col-form-label">Nama Lengkap *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control"  required="true" name="nama" placeholder="nama lengkap anda">
        </div>
      </div>

      <div class="form-group row">
         <label name="jekel" class="col-sm-2 col-form-label">Jenis Kelamin *</label>
        <div class="col-sm-4 col-sm-offsite-6">
           <select class="form-control"  required="true" name="jekel">
              <option>-- Pilih --</option>
              <option>Laki - Laki</option>
              <option>Perempuan</option>
              <option>Lainnya</option>
          </select>
        </div> 
      </div>

       <div class="form-group row">
           <label name="tempat_lhr" class="col-sm-2 col-form-label">Tempat Lahir *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" required="true" name="tempat_lhr" placeholder="tempat lahir anda">
        </div>
              <label name="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir *</label>
         <div class="col-sm-4">
              <input type="date" class="form-control" required="true" name="tgl_lhr" placeholder="tanggal lahir anda">
        </div>
      </div>

      <div class="form-group row">
          <label name="alamat" class="col-sm-2 col-form-label">Alamat *</label>
          <div class="col-sm-4">
            <textarea class="form-control" required="true" name="alamat" rows="3"></textarea>
          </div>

           <label name="kodepos" class="col-sm-2 col-form-label">Kode Pos *</label>
         <div class="col-sm-4">
              <input type="text" class="form-control" required="true" name="kodepos" placeholder="kode pos">
        </div>
      </div>

      <div class="form-group row">
           <label name="kota" class="col-sm-2 col-form-label">Kota *</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" required="true" name="kota" placeholder="kota">
        </div>
      </div>

      <div class="form-group row">
           <label name="no_tlp" class="col-sm-2 col-form-label">No Telepon *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" name="no_tlp" placeholder="nomor telepon">
        </div>

         <label name="no_hp" class="col-sm-2 col-form-label">No Handphone *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" required="true" name="no_hp" placeholder="nomor handphone">
        </div>
      </div>

       <div class="form-group row">
           <label name="ktp" class="col-sm-2 col-form-label">No KTP *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" required="true" name="ktp" placeholder="nomor kartu tanda penduduk">
        </div>

           <label name="negara" class="col-sm-2 col-form-label">Kewarganegaraan *</label>
        <div class="col-sm-4 col-sm-offsite-6">
           <select class="form-control" required="true" name="negara">
              <option>-- Pilih Negara--</option>
              <option>Singapura</option>
              <option>Indonesia</option>
              <option>Malaysia</option>
              <option>Australia</option>
              <option>Thailand</option>
           </select>
        </div> 
       </div>

       <div class="form-group row">
          <label name="agama" class="col-sm-2 col-form-label ">Agama *</label>
          <div class="col-sm-4 col-sm-offsite-6">
           <select class="form-control" required="true" name="agama">
              <option>-- Pilih Agama --</option>
              <option>Islam</option>
              <option>Kristen (Katolik)</option>
              <option>Kristen (Protestan)</option>
              <option>Hindu</option>
              <option>Budha</option>
           </select>
        </div> 
       </div>

        <div class="form-group row">
           <label name="hobi" class="col-sm-2 col-form-label">Hobi *</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" required="true" name="hobi" placeholder="hobi anda">
        </div>
      </div>

       <div class="form-group row">
          <label name="alamat_ortu" class="col-sm-2 col-form-label">Alamat Orang Tua *</label>
          <div class="col-sm-4">
            <textarea class="form-control" required="true" name="alamat_ortu" rows="3"></textarea>
          </div>

          <label name="kodepos_ortu" class="col-sm-2 col-form-label">Kode Pos *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control"  required="true" name="kodepos_ortu" placeholder="kodepos">
          </div>
      </div>

        <div class="form-group row">
           <label name="kota_ortu" class="col-sm-2 col-form-label">Kota *</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" required="true" name="kota_ortu" placeholder="kota">
        </div>
      </div>


      <div class="form-group row">
           <label name="status" class="col-sm-2 col-form-label">Status *</label>
         <div class="col-sm-4 col-sm-offsite-6">
            <select class="form-control" required="true" name="status">
              <option>-- Pilih Status --</option>
              <option>Sudah Menikah</option>
              <option>Belum Menikah</option>
           </select>
        </div>
      </div>
      <br>
  
      <div class="form-group row">
           <label name="jml_anak" class="col-sm-2 col-form-label">Jumlah Anak</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" name="jml_anak" placeholder="jumlah anak anda">(wajib diisi jika status anda sudah menikah)
        </div>
      </div>


      <div class="form-group row">
        <div class="col-sm-12">
          <p class="text-center"><b><em>Anggota keluarga yang dapat dihubungi dalam keadaan darurat</em></b></p>
        </div>      
      </div>

       <div class="form-group row">
           <label name="nm_kel" class="col-sm-2 col-form-label">Nama Keluarga *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" required="true" name="nm_kel" placeholder="nama keluarga">
        </div>
      </div>

      <div class="form-group row">
           <label name="hubungan" class="col-sm-2 col-form-label">Hubungan dengan anda *</label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" required="true" name="hubungan">
              <option>-- Pilih --</option>
               <option>Istri</option>
              <option>Kakak Kandung</option>
              <option>Adik Kandung</option>
              <option>Sepupu</option>
              <option>Bibi</option>
              <option>Paman</option>
           </select>
        </div>
      </div>

      <div class="form-group row">
          <label name="alamat_kel" class="col-sm-2 col-form-label">Alamat Keluarga *</label>
        <div class="col-sm-7 col-sm-3">
            <textarea class="form-control" required="true" name="alamat_kel" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group row">
           <label name="no_kel" class="col-sm-2 col-form-label">No. Telepon *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" required="true" name="no_kel" placeholder="nomor telepon keluarga">
        </div>
      </div>
      <br>


       <div class="form-group row">
           <div class="col-sm-12">
              <h4 class="text-left">Latar Belakang Pendidikan</h4>
              <hr>
          </div>
       </div>

       <div class="form-group row">
        <div class="col-sm-12">
          <p class="text-center"><b><em>Mulai dari Sekolah Menengah Atas</em></b></p>
        </div>      
      </div>

      <div class="form-group row">
           <label name="pendidikan" class="col-sm-2 col-form-label">Pendidikan *</label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" required="true" name="pendidikan">
              <option>-- Pilih Pendidikan --</option>
               <option>SMK/SMA</option>
              <option>D3</option>
              <option>S1</option>
              <option>S2</option>
           </select>
        </div>
      </div>

       <div class="form-group row">
           <label name="nm_sekolah" class="col-sm-2 col-form-label">Sekolah/Universitas *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" required="true" name="nm_sekolah" placeholder="nama sekolah atau universitas">
        </div>
      </div>

       <div class="form-group row">
           <label name="jurusan" class="col-sm-2 col-form-label">Jurusan *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" required="true" name="jurusan" placeholder="jurusan">
        </div>
      </div>

       <div class="form-group row">
           <label name="tgl_mulai" class="col-sm-2 col-form-label">Mulai Tanggal *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" required="true" name="tgl_mulai">
        </div>
      </div>

       <div class="form-group row">
           <label name="tgl_selesai" class="col-sm-2 col-form-label">Selesai Tanggal *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" required="true" name="tgl_selesai">
        </div>
      </div>

       <div class="form-group row">
           <label name="nilai" class="col-sm-2 col-form-label">Nilai/IPK *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" required="true" name="nilai" placeholder="nilai">
        </div>
      </div>
      <br>


       <div class="form-group row">
           <div class="col-sm-12">
              <h4 class="text-left">Pengalaman Organisasi</h4>
              <hr>
          </div>
       </div>

       <div class="form-group row">
        <div class="col-sm-12">
          <p class="text-center"><b><em>Silahkan isi jika anda memiliki pengalaman organisasi</em></b></p>
        </div>      
      </div>

      <div class="form-group row">
           <label name="organisasi" class="col-sm-2 col-form-label">Organisasi </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="organisasi" placeholder="nama organisasi">
        </div>
      </div>

      <div class="form-group row">
           <label name="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="jabatan" placeholder="jabatan anda">
        </div>
      </div>

      <div class="form-group row">
           <label name="periode_org" class="col-sm-2 col-form-label">Periode </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="periode_org" placeholder="tahun awal  - tahun akhir">
        </div>
      </div>
      <br>

       <div class="form-group row">
           <div class="col-sm-12">
              <h4 class="text-left">Pengalaman Training & Kursus</h4>
              <hr>
          </div>
       </div>

       <div class="form-group row">
        <div class="col-sm-12">
          <p class="text-center"><b><em>Silahkan isi jika anda memiliki pengalaman training & kursus </em></b></p>
        </div>      
      </div>

       <div class="form-group row">
           <label name="nm_kursus" class="col-sm-2 col-form-label">Nama Training & Kursus </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="nm_kursus" placeholder="nama training & kursus">
        </div>
      </div>

       <div class="form-group row">
           <label name="tahun" class="col-sm-2 col-form-label">Tahun </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="tahun" placeholder="tahun mengikuti kursus">
        </div>
      </div>

       <div class="form-group row">
           <label name="penyelenggara" class="col-sm-2 col-form-label">Penyelenggara </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="penyelenggara" placeholder="nama penyelenggara">
        </div>
      </div>

       <div class="form-group row">
           <label name="peringkat" class="col-sm-2 col-form-label">Peringkat </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="peringkat" placeholder="peringkat anda">
        </div>
      </div>
      <br>



       <div class="form-group row">
           <div class="col-sm-12">
              <h4 class="text-left">Bahasa</h4>
              <hr>
          </div>
       </div>

       <div class="form-group row">
        <div class="col-sm-12">
          <p class="text-center"><b><em>Jika anda memiliki kemampuan berbahasa inggris merupakan nilai tambahan </em></b></p>
        </div>      
      </div>


       <div class="form-group row">
           <label name="bahasa" class="col-sm-2 col-form-label">Jenis Bahasa </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="bahasa" placeholder="kemampuan bahasa anda">
        </div>
      </div>

        <div class="form-group row">
           <label name="dengar" class="col-sm-2 col-form-label">Mendengar </label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="dengar">
                 <option>-- Pilih --</option>
                     <option>Baik Sekali</option>
                     <option>Baik</option>
                     <option>Cukup</option>
                     <option>Kurang</option>
           </select>
        </div>
      </div>

      <div class="form-group row">
           <label name="baca" class="col-sm-2 col-form-label">Membaca </label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="baca">
                 <option>-- Pilih --</option>
                     <option>Baik Sekali</option>
                     <option>Baik</option>
                     <option>Cukup</option>
                     <option>Kurang</option>
           </select>
        </div>
      </div>

      <div class="form-group row">
           <label name="bicara" class="col-sm-2 col-form-label">Berbicara </label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="bicara">
                 <option>-- Pilih --</option>
                     <option>Baik Sekali</option>
                     <option>Baik</option>
                     <option>Cukup</option>
                     <option>Kurang</option>
           </select>
        </div>
      </div>

      
      <div class="form-group row">
           <label name="tulis" class="col-sm-2 col-form-label">Menulis </label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="tulis">
                 <option>-- Pilih --</option>
                     <option>Baik Sekali</option>
                     <option>Baik</option>
                     <option>Cukup</option>
                     <option>Kurang</option>
           </select>
        </div>
      </div>
      <br>

      <div class="form-group row">
           <div class="col-sm-12">
              <h4 class="text-left">Pengalaman Kerja</h4>
              <hr>
          </div>
       </div>

       <div class="form-group row">
        <div class="col-sm-12">
          <p class="text-center"><b><em>Silahkan isi jika anda mempunyai pengalaman kerja, mulai dari pengalaman kerja yang terakhir</em></b></p>
        </div>      
      </div>

      <div class="form-group row">
           <label name="nm_pt" class="col-sm-2 col-form-label">Nama Perusahaan </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="nm_pt" placeholder="nama perusahaan">
        </div>
      </div>

      <div class="form-group row">
           <label name="tgl_awal" class="col-sm-2 col-form-label">Mulai Kerja </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" name="tgl_awal" >
        </div>
      </div>

      <div class="form-group row">
           <label name="tgl_akhir" class="col-sm-2 col-form-label">Akhir Kerja </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" name="tgl_akhir" >
        </div>
      </div>

       <div class="form-group row">
          <label name="almt_pt" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
        <div class="col-sm-7 col-sm-3">
            <textarea class="form-control" name="almt_pt" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group row">
           <label name="tlp_pt" class="col-sm-2 col-form-label">No. Telepon</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="tlp_pt" placeholder="nomor telepon perusahaan">
        </div>
      </div>

      <div class="form-group row">
           <label name="jabat_awal" class="col-sm-2 col-form-label">Jabatan Awal</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="jabat_awal" placeholder="jabatan awal anda">
        </div>
      </div>

      <div class="form-group row">
           <label name="jabat_akhir" class="col-sm-2 col-form-label">Jabatan Akhir</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="jabat_akhir" placeholder="jabatan akhir anda">
        </div>
      </div>

      <div class="form-group row">
           <label name="nm_atasan" class="col-sm-2 col-form-label">Nama Atasan</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="nm_atasan" placeholder="nama atasan">
        </div>
      </div>

       <div class="form-group row">
          <label name="alasan" class="col-sm-2 col-form-label">Alasan Berhenti Bekerja</label>
        <div class="col-sm-7 col-sm-3">
            <textarea class="form-control" name="alasan" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group row">
           <label name="gaji" class="col-sm-2 col-form-label">Gaji</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="gaji" placeholder="gaji terakhir anda">
        </div>
      </div>
      

      <div class="form-group row">
       <div class="col-sm-2">
       </div>
          <div class="col-sm-10">
            <input type="submit" name="add_plmr" class="btn btn-primary" value="simpan">
            <button type="reset" class="btn btn-primary">Batal</button>
          </div>              
   </div>








     </form>
   </div>
   <!-- akhir formulir -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}else {
  include "illegal.php";
}
?>



