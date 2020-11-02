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
  <body>
   
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
     <form action="proses_simpan.php" method="post">
       <div class="form-group row">
              <label name="posisi_pekerjaan" class="col-sm-2 col-form-label">Posisi Pekerjaan *</label>
           <div class="col-sm-7 col-sm-offsite-3">
              <input type="text" class="form-control" name="posisi_pekerjaan" placeholder="posisi pekerjaan">
          </div>
       </div>

       <div class="form-group row">
              <label name="lokasi_seleksi" class="col-sm-2 col-form-label">Lokasi Seleksi</label>
           <div class="col-sm-7 col-sm-offsite-3">
              <input type="text" class="form-control" name="lokasi_seleksi" placeholder="lokasi seleksi">
          </div>
       </div>

       <div class="form-group row">
              <label name="username" class="col-sm-2 col-form-label">Username</label>
           <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" name="username" value="username">
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
           <input type="text" class="form-control" name="nama" placeholder="nama lengkap anda">
        </div>
      </div>

      <div class="form-group row">
         <label name="jekel" class="col-sm-2 col-form-label">Jenis Kelamin *</label>
        <div class="col-sm-4 col-sm-offsite-6">
           <select class="form-control" name="jekel">
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
           <input type="text" class="form-control" name="tempat_lhr" placeholder="tempat lahir anda">
        </div>
              <label name="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir *</label>
         <div class="col-sm-4">
              <input type="date" class="form-control" name="tgl_lhr" placeholder="tanggal lahir anda">
        </div>
      </div>

      <div class="form-group row">
          <label name="alamat" class="col-sm-2 col-form-label">Alamat *</label>
          <div class="col-sm-4">
            <textarea class="form-control" name="alamat" rows="3"></textarea>
          </div>

           <label name="kodepos" class="col-sm-2 col-form-label">Kode Pos *</label>
         <div class="col-sm-4">
              <input type="text" class="form-control" name="kodepos" placeholder="kode pos">
        </div>
      </div>

      <div class="form-group row">
           <label name="kota" class="col-sm-2 col-form-label">Kota *</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" name="kota" placeholder="kota">
        </div>
      </div>

      <div class="form-group row">
           <label name="no_tlp" class="col-sm-2 col-form-label">No Telepon *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" name="no_tlp" placeholder="nomor telepon">
        </div>

         <label name="no_hp" class="col-sm-2 col-form-label">No Handphone *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" name="no_hp" placeholder="nomor handphone">
        </div>
      </div>

       <div class="form-group row">
           <label name="ktp" class="col-sm-2 col-form-label">No KTP *</label>
         <div class="col-sm-4">
           <input type="text" class="form-control" name="ktp" placeholder="nomor kartu tanda penduduk">
        </div>

           <label name="negara" class="col-sm-2 col-form-label">Kewarganegaraan *</label>
        <div class="col-sm-4 col-sm-offsite-6">
           <select class="form-control" name="negara">
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
           <select class="form-control" name="agama">
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
           <input type="text" class="form-control" name="hobi" placeholder="hobi anda">
        </div>
      </div>

       <div class="form-group row">
          <label name="alamat_ortu" class="col-sm-2 col-form-label">Alamat Orang Tua *</label>
          <div class="col-sm-4">
            <textarea class="form-control" name="alamat_ortu" rows="3"></textarea>
          </div>

          <label name="kodepos_ortu" class="col-sm-2 col-form-label">Kode Pos *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="kodepos_ortu" placeholder="kodepos">
          </div>
      </div>

        <div class="form-group row">
           <label name="kota_ortu" class="col-sm-2 col-form-label">Kota *</label>
         <div class="col-sm-4 col-sm-offsite-6">
           <input type="text" class="form-control" name="kota_ortu" placeholder="kota">
        </div>
      </div>


      <div class="form-group row">
           <label name="status" class="col-sm-2 col-form-label">Status *</label>
         <div class="col-sm-4 col-sm-offsite-6">
            <select class="form-control" name="status">
              <option>-- Pilih Status --</option>
              <optio>Sudah Menikah</option>
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
           <input type="text" class="form-control" name="nm_kel" placeholder="nama keluarga">
        </div>
      </div>

      <div class="form-group row">
           <label name="hubungan" class="col-sm-2 col-form-label">Hubungan dengan anda *</label>
         <div class="col-sm-7 col-sm-offsite-3">
            <select class="form-control" name="hubungan">
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
            <textarea class="form-control" name="alamat_kel" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group row">
           <label name="no_kel" class="col-sm-2 col-form-label">No. Telepon *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="no_kel" placeholder="nomor telepon keluarga">
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
            <select class="form-control" name="pendidikan">
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
           <input type="text" class="form-control" name="nm_sekolah" placeholder="nama sekolah atau universitas">
        </div>
      </div>

       <div class="form-group row">
           <label name="jurusan" class="col-sm-2 col-form-label">Jurusan *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="jurusan" placeholder="jurusan">
        </div>
      </div>

       <div class="form-group row">
           <label name="tgl_mulai" class="col-sm-2 col-form-label">Mulai Tanggal *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" name="tgl_mulai">
        </div>
      </div>

       <div class="form-group row">
           <label name="tgl_selesai" class="col-sm-2 col-form-label">Selesai Tanggal *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="date" class="form-control" name="tgl_selesai">
        </div>
      </div>

       <div class="form-group row">
           <label name="nilai" class="col-sm-2 col-form-label">Nilai/IPK *</label>
         <div class="col-sm-7 col-sm-offsite-3">
           <input type="text" class="form-control" name="nilai" placeholder="nilai">
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
      			<button type="submit" class="btn btn-primary ">Simpan</button>
      			<button type="reset" class="btn btn-primary">Batal</button>
      			<a class="btn btn-primary" href="index.php" role="button">Kembali</a>
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