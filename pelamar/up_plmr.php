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
    
    // Ambil data id_pelamar yang dikirim oleh index.php melalui URL
    $id_pelamar = $_GET['id_pelamar'];
    
    // Query untuk menampilkan data pelamar berdasarkan ID Pelamar yang dikirim
    $query = "SELECT * FROM pelamar WHERE id_pelamar='".$id_pelamar."'";
    $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    ?>
   
   <!-- judul -->
   <section class="atas" id="atas">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <h2 class="text-center">Ubah Data Pendaftaran</h2>
           <hr>
           <p><marquee>Ubah Data Anda Dengan Benar!!</marquee></p>
         </div>
       </div>
     </div>
   </section>
   <!-- akhir judul -->

  <!-- formulir -->
   <div class="container">
     <form action="pro_up_plmr.php?id_pelamar=<?php echo $id_pelamar; ?>" method="post">

       <div class="form-group row">
              <label name="posisi_pekerjaan" class="col-sm-2 col-form-label">Posisi Pekerjaan</label>
           <div class="col-sm-10">
              <input type="text" class="form-control"  readonly="true" name="posisi_pekerjaan" value="<?php echo $data['posisi_pekerjaan']; ?> ">
          </div>
       </div>

       <div class="form-group row">
              <label name="lokasi_seleksi" class="col-sm-2 col-form-label">Lokasi Seleksi</label>
           <div class="col-sm-10">
              <input type="text" class="form-control"  readonly="true" name="lokasi_seleksi" value="<?php echo $data['lokasi_seleksi']; ?> ">             
          </div>
       </div>

       <div class="form-group row">
              <label name="username" class="col-sm-2 col-form-label">Username</label>
           <div class="col-sm-10">
              <input type="text" readonly class="form-control"  readonly="true" name="username" value="<?php echo $data['username']; ?>">
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
         <div class="col-sm-8 col-sm-offsite-2">
           <input type="text" class="form-control" name="nama" required="true" value="<?php echo $data['nama']; ?> ">
        </div>
      </div>

      <div class="form-group row">
         <label name="jekel" class="col-sm-2 col-form-label">Jenis Kelamin *</label>
        <div class="col-sm-4 col-sm-offsite-6">
           <select class="form-control" name="jekel" required="true">
              <option selected value="<?php echo $data['jekel']; ?> "><?php echo $data['jekel']; ?></option>
              <option value="Laki-Laki">Laki - Laki</option>
              <option value="Perempuan">Perempuan</option>
          </select>
        </div> 
      </div>

       <div class="form-group row">
           <label name="tempat_lhr" class="col-sm-2 col-form-label">Tempat Lahir *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" name="tempat_lhr" required="true" value="<?php echo $data['tempat_lhr']; ?> ">
        </div>
              <label name="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir *</label>
         <div class="col-sm-4">
              <input type="date" class="form-control" name="tgl_lhr" required="true" value="<?php echo $data['tgl_lhr']; ?> ">
        </div>
      </div>

      <div class="form-group row">
          <label name="alamat" class="col-sm-2 col-form-label">Alamat *</label>
          <div class="col-sm-4">
            <textarea class="form-control" name="alamat" rows="3" required="true"><?php echo $data['alamat']; ?></textarea>
          </div>

           <label name="kodepos" class="col-sm-2 col-form-label">Kode Pos *</label>
         <div class="col-sm-4">
              <input type="text" class="form-control" name="kodepos" required="true" value="<?php echo $data['kodepos']; ?> ">
        </div>
      </div>

      <div class="form-group row">
           <label name="kota" class="col-sm-2 col-form-label">Kota *</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" name="kota" required="true" value="<?php echo $data['kota']; ?>">
        </div>
      </div>

      <div class="form-group row">
           <label name="no_tlp" class="col-sm-2 col-form-label">No Telepon *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" name="no_tlp" value="<?php echo $data['no_tlp']; ?>">
        </div>

         <label name="no_hp" class="col-sm-2 col-form-label">No Handphone *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" name="no_hp" required="true" value="<?php echo $data['no_hp']; ?>">
        </div>
      </div>

       <div class="form-group row">
           <label name="ktp" class="col-sm-2 col-form-label">No KTP *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" name="ktp" required="true" value="<?php echo $data['ktp']; ?>">
        </div>

           <label name="negara" class="col-sm-2 col-form-label">Kewarganegaraan *</label>
        <div class="col-sm-4 col-sm-offsite-6">
           <select class="form-control" name="negara" required="true">
              <option selected value="<?php echo $data['negara']; ?>"><?php echo $data['negara']; ?></option>
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
           <select class="form-control" name="agama" required="true">
              <option selected value="<?php echo $data['agama']; ?>"><?php echo $data['agama']; ?></option>
              <option value="Islam">Islam</option>
              <option value="Kristen(Katolik)">Kristen (Katolik)</option>
              <option value="Kristen(Protestan)">Kristen (Protestan)</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
           </select>
        </div> 
       </div>

        <div class="form-group row">
           <label name="hobi" class="col-sm-2 col-form-label">Hobi *</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" name="hobi" required="true" value="<?php echo $data['hobi']; ?>">
        </div>
      </div>

       <div class="form-group row">
          <label name="alamat_ortu" class="col-sm-2 col-form-label">Alamat Orang Tua *</label>
          <div class="col-sm-4">
            <textarea class="form-control" name="alamat_ortu" rows="3" required="true"><?php echo $data['alamat_ortu']; ?></textarea>
          </div>

          <label name="kodepos_ortu" class="col-sm-2 col-form-label">Kode Pos *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="kodepos_ortu" required="true" value="<?php echo $data['kodepos_ortu']; ?>">
          </div>
      </div>

        <div class="form-group row">
           <label name="kota_ortu" class="col-sm-2 col-form-label">Kota *</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" name="kota_ortu" required="true" value="<?php echo $data['kota_ortu']; ?>">
        </div>
      </div>


      <div class="form-group row">
           <label name="status" class="col-sm-2 col-form-label">Status *</label>
         <div class="col-sm-4 col-sm-offsite-6">
            <select class="form-control" name="status" required="true">
              <option selected value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
              <option value="Sudah Menikah">Sudah Menikah</option>
              <option value="Belum Menikah">Belum Menikah</option>
           </select>
        </div>
      </div>
      <br>
  
      <div class="form-group row">
           <label name="jml_anak" class="col-sm-2 col-form-label">Jumlah Anak</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" name="jml_anak" value="<?php echo $data['jml_anak']; ?>">(wajib diisi jika status anda sudah menikah)
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
           <input type="text" class="form-control" name="nm_kel" required="true" value="<?php echo $data['nm_kel']; ?>">
        </div>
      </div>

      <div class="form-group row">
           <label name="hubungan" class="col-sm-2 col-form-label">Hubungan dengan anda *</label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="hubungan" required="true">
              <option selected value="<?php echo $data['hubungan']; ?>" ><?php echo $data['hubungan']; ?></option>
              <option value="Istri" >Istri</option>
              <option value="Kakak Kandung" >Kakak Kandung</option>
              <option value="Adik Kandung" >Adik Kandung</option>
              <option value="Sepupu" >Sepupu</option>
              <option value="Bibi">Bibi</option>
              <option value="Paman">Paman</option>
           </select>
        </div>
      </div>

      <div class="form-group row">
          <label name="alamat_kel" class="col-sm-2 col-form-label">Alamat Keluarga *</label>
        <div class="col-sm-7 col-sm-3">
            <textarea class="form-control" name="alamat_kel" rows="3" required="true"><?php echo $data['alamat_kel']; ?></textarea>
        </div>
      </div>

      <div class="form-group row">
           <label name="no_kel" class="col-sm-2 col-form-label">No. Telepon *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="no_kel" required="true" value="<?php echo $data['no_kel']; ?>">
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
            <select class="form-control" name="pendidikan" required="true">
              <option selected value="<?php echo $data['pendidikan']; ?>"><?php echo $data['pendidikan']; ?></option>
              <option value="SMK/SMA">SMK/SMA</option>
              <option value="D3">D3</option>
              <option value="S1">S1</option>
              <option value="S2">S2</option>
           </select>
        </div>
      </div>

       <div class="form-group row">
           <label name="nm_sekolah" class="col-sm-2 col-form-label">Sekolah/Universitas *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="nm_sekolah" required="true" value="<?php echo $data['nm_sekolah']; ?>">
        </div>
      </div>

       <div class="form-group row">
           <label name="jurusan" class="col-sm-2 col-form-label">Jurusan *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="jurusan" required="true" value="<?php echo $data['jurusan']; ?>">
        </div>
      </div>

       <div class="form-group row">
           <label name="tgl_mulai" class="col-sm-2 col-form-label">Mulai Tanggal *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" name="tgl_mulai" required="true" value="<?php echo $data['tgl_mulai']; ?>">
        </div>
      </div>

       <div class="form-group row">
           <label name="tgl_selesai" class="col-sm-2 col-form-label">Selesai Tanggal *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" name="tgl_selesai" required="true" value="<?php echo $data['tgl_selesai']; ?>">
        </div>
      </div>

       <div class="form-group row">
           <label name="nilai" class="col-sm-2 col-form-label">Nilai/IPK *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="nilai" required="true" value="<?php echo $data['nilai']; ?>">
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
           <input type="text" class="form-control" name="organisasi" value="<?php echo $data['organisasi']; ?>">
        </div>
      </div>

      <div class="form-group row">
           <label name="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="jabatan" value="<?php echo $data['jabatan']; ?>">
        </div>
      </div>

      <div class="form-group row">
           <label name="periode_org" class="col-sm-2 col-form-label">Periode </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="periode_org" value="<?php echo $data['periode_org']; ?>">
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
           <input type="text" class="form-control" name="nm_kursus" value="<?php echo $data['nm_kursus']; ?>">
        </div>
      </div>

       <div class="form-group row">
           <label name="tahun" class="col-sm-2 col-form-label">Tahun </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="tahun" value="<?php echo $data['tahun']; ?>">
        </div>
      </div>

       <div class="form-group row">
           <label name="penyelenggara" class="col-sm-2 col-form-label">Penyelenggara </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="penyelenggara" value="<?php echo $data['penyelenggara']; ?>">
        </div>
      </div>

       <div class="form-group row">
           <label name="peringkat" class="col-sm-2 col-form-label">Peringkat </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="peringkat" value="<?php echo $data['peringkat']; ?>">
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
           <input type="text" class="form-control" name="bahasa" value="<?php echo $data['bahasa']; ?>">
        </div>
      </div>

        <div class="form-group row">
           <label name="dengar" class="col-sm-2 col-form-label">Mendengar </label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="dengar">
                     <option selected value="<?php echo $data['dengar']; ?>"><?php echo $data['dengar']; ?></option>
                     <option value="Baik Sekali">Baik Sekali</option>
                     <option value="Baik">Baik</option>
                     <option value="Cukup">Cukup</option>
                     <option value="Kurang">Kurang</option>
           </select>
        </div>
      </div>

      <div class="form-group row">
           <label name="baca" class="col-sm-2 col-form-label">Membaca </label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="baca"  >
                     <option selected value="<?php echo $data['baca']; ?>"><?php echo $data['baca']; ?></option>
                     <option value="Baik Sekali">Baik Sekali</option>
                     <option value="Baik">Baik</option>
                     <option value="Cukup">Cukup</option>
                     <option value="Kurang">Kurang</option>
           </select>
        </div>
      </div>

      <div class="form-group row">
           <label name="bicara" class="col-sm-2 col-form-label">Berbicara </label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="bicara">
                     <option selected value="<?php echo $data['bicara']; ?>"><?php echo $data['bicara']; ?></option>
                     <option value="Baik Sekali">Baik Sekali</option>
                     <option value="Baik">Baik</option>
                     <option value="Cukup">Cukup</option>
                     <option value="Kurang">Kurang</option>
           </select>
        </div>
      </div>

      
      <div class="form-group row">
           <label name="tulis" class="col-sm-2 col-form-label">Menulis </label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="tulis">
                     <option selected value="<?php echo $data['tulis']; ?>"><?php echo $data['tulis']; ?></option>
                     <option value="Baik Sekali">Baik Sekali</option>
                     <option value="Baik">Baik</option>
                     <option value="Cukup">Cukup</option>
                     <option value="Kurang">Kurang</option>
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
           <input type="text" class="form-control" name="nm_pt" value="<?php echo $data['nm_pt']; ?>">
        </div>
      </div>

      <div class="form-group row">
           <label name="tgl_awal" class="col-sm-2 col-form-label">Mulai Kerja </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" name="tgl_awal"  value="<?php echo $data['tgl_awal']; ?>">
        </div>
      </div>

      <div class="form-group row">
           <label name="tgl_akhir" class="col-sm-2 col-form-label">Akhir Kerja </label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" name="tgl_akhir" value="<?php echo $data['tgl_akhir']; ?>">
        </div>
      </div>

       <div class="form-group row">
          <label name="almt_pt" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
        <div class="col-sm-7 col-sm-3">
            <textarea class="form-control" name="almt_pt" rows="3"><?php echo $data['almt_pt']; ?></textarea>
        </div>
      </div>

      <div class="form-group row">
           <label name="tlp_pt" class="col-sm-2 col-form-label">No. Telepon</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="tlp_pt" value="<?php echo $data['tlp_pt']; ?>">
        </div>
      </div>

      <div class="form-group row">
           <label name="jabat_awal" class="col-sm-2 col-form-label">Jabatan Awal</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="jabat_awal" value="<?php echo $data['jabat_awal']; ?>">
        </div>
      </div>

      <div class="form-group row">
           <label name="jabat_akhir" class="col-sm-2 col-form-label">Jabatan Akhir</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="jabat_akhir" value="<?php echo $data['jabat_akhir']; ?>">
        </div>
      </div>

      <div class="form-group row">
           <label name="nm_atasan" class="col-sm-2 col-form-label">Nama Atasan</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="nm_atasan" value="<?php echo $data['nm_atasan']; ?>">
        </div>
      </div>

       <div class="form-group row">
          <label name="alasan" class="col-sm-2 col-form-label">Alasan Berhenti Bekerja</label>
        <div class="col-sm-7 col-sm-3">
            <textarea class="form-control" name="alasan" rows="3"><?php echo $data['alasan']; ?></textarea>
        </div>
      </div>

      <div class="form-group row">
           <label name="gaji" class="col-sm-2 col-form-label">Gaji</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="gaji" value="<?php echo $data['gaji']; ?>">
        </div>
      </div>

      <div class="form-group row">
       <div class="col-sm-2">
       </div>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary ">Ubah</button>
            <a class="btn btn-danger" href="index.php" role="button">Batal</a>
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