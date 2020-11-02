<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Web Recruitment</title>

    <!-- Bootstrap -->
    <link href="../bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: transparent;">
    <!-- atas -->
    
    <div class="container">
      <section class="atas" id="atas">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Formulir Pendaftaran</h2>
            <hr>

                    <a href="view_plmr.php" class="btn btn-primary"> Lihat Data </a> <br><br><br>

            <p><marquee><em>Silahkan isi form ini dengan data yang benar!!  Tulisan yang bertanda bintang (*) wajib diisi!!</em></marquee></p>
          </div>
        </div>
      </div> 
    </section>
    <!-- akhir atas -->

    <!-- formulir -->
    <section class="formulir" id="formulir">
      <div class="container">
        <div class="row">
            <form action="proses_simpan.php" method="post" class="form-horizontal">
                <div class="form-group">
                      <label class="col-sm-2 control-label">Posisi Pekerjaan</label>
                   <div class="col-sm-10">
                      <p class="form-control-static">posisi_pekerjaan</p>
                   </div>
                 </div>

                 <div class="form-group">
                      <label class="col-sm-2 control-label">Lokasi Seleksi</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">lokasi_seleksi</p>
                    </div>
                 </div>

                 <div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">nurulwidhayanti05@gmail.om</p>
                    </div>
                 </div>

                 <div class="from-group">
                   <div class="col-sm-12">
                     <h3 class="text-left">Data Pribadi</h3>
                     <hr>
                   </div>
                 </div>

                  <div class="form-group">
                      <label  name="nama" class="col-sm-2 control-label">Nama Lengkap *</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>
                 </div>


                 <div class="form-group">
                      <label  name="jekel" class="col-sm-2 control-label">Jenis Kelamin *</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                      <select class="form-control" name="jekel">
                            <option>-- Pilih Jenis Kelamin --</option>
                            <option>Laki - Laki</option>
                            <option>Perempuan</option>
                          </select>
                    </div>
                 </div>


                 <div class="form-group">
                        <label  name="tempat_lhr" class="col-sm-2 control-label">Tempat Lahir *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tempat_lhr" placeholder="Tempat Lahir">
                    </div> 
                        <label  name="tgl_lhr" class="col-sm-2 control-label">Tanggal Lahir *</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="tgl_lhr">
                    </div>                  
                 </div>


                 <div class="form-group">
                        <label name="alamat" class="col-sm-2 control-label">Alamat *</label>
                     <div class="col-sm-4">
                        <textarea name="alamat" class="form-control" rows="4"></textarea> 
                    </div>
                         <label  name="kodepos" class="col-sm-2 control-label">Kode Pos *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="kodepos" placeholder="Kode Pos">
                    </div>
                </div>


                 <div class="form-group">
                        <label  name="kota" class="col-sm-2 control-label">Kota *</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                        <input type="text" class="form-control" name="kota" placeholder="Kota">
                    </div>                    
                 </div>

                 <div class="form-group">
                        <label  name="no_tlp" class="col-sm-2 control-label">No. Telepon *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="no_tlp" placeholder="nomor telepon">
                    </div> 
                        <label  name="no_hp" class="col-sm-2 control-label">No. Handphone *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="no_hp" placeholder="nomor handphone">
                    </div>                         
                 </div>
                  

                  <div class="form-group">
                        <label  name="ktp" class="col-sm-2 control-label">No. KTP *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="ktp" placeholder="nomor kartu tanda penduduk">
                    </div> 
                        <label  name="negara" class="col-sm-2 control-label">Kewarganegaraan *</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="negara">
                            <option>-- Pilih negara --</option>
                            <option>Malaysia</option>
                            <option>Indonesia</option>
                            <option>Singapura</option>
                            <option>Thailand</option>
                            <option>Australia</option>
                          </select>
                    </div>                         
                 </div>

                 <div class="form-group">
                      <label name="agama" class="col-sm-2 control-label">Agama *</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="agama">
                            <option>-- Pilih Agama --</option>
                            <option>Islam</option>
                            <option>Kristen (Protestan)</option>
                            <option>Kristen (Katolik)</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                          </select>
                    </div>  
                 </div>

                 <div class="form-group">
                      <label name="hobi" class="col-sm-2 control-label">Hobi </label>
                    <div class="col-sm-5 col-sm-offsite-5">
                       <input type="text" class="form-control" name="hobi" placeholder="hobi anda"> 
                    </div>
                 </div>

                 <div class="form-group">
                        <label name="alamat_ortu" class="col-sm-2 control-label">Alamat Orang Tua *</label>
                     <div class="col-sm-4">
                        <textarea name="alamat_ortu" class="form-control" rows="4"></textarea> 
                    </div>
                         <label  name="kodepos_ortu" class="col-sm-2 control-label">Kode Pos *</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="kodepos_ortu" placeholder="Kode Pos">
                    </div>
                </div>

                <div class="form-group">
                        <label  name="kota_ortu" class="col-sm-2 control-label">Kota *</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                        <input type="text" class="form-control" name="kota_ortu" placeholder="Kota">
                    </div>                    
                 </div>


                 <div class="form-group">
                      <label name="status" class="col-sm-2 control-label">Status *</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="status">
                            <option>-- Pilih Status Anda --</option>
                            <option>Sudah Menikah</option>
                            <option>Belum Menikah</option>
                          </select>
                    </div>  
                 </div>

                 <div class="form-group">
                        <label  name="jml_anak" class="col-sm-2 control-label">Jumlah Anak </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="jml_anak" placeholder="jumlah anak">(wajib diisi jika status anda sudah menikah)
                    </div>                     
                 </div>


                  <div class="form-group">
                    <h4 class="text-center">Anggota Keluarga yang dapat dihubungi dalam keadaan darurat </h4>
                  </div>
                      

                 <div class="form-group">
                        <label  name="nm_kel" class="col-sm-2 control-label">Nama Keluarga * </label>
                    <div class="col-sm-7 col-sm-offsite-3">
                        <input type="text" class="form-control" name="nm_kel" placeholder="nama keluarga"> 
                    </div>                     
                 </div>


                 <div class="form-group">
                      <label name="hubungan" class="col-sm-2 control-label">Hubungan dengan anda *</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="hubungan">
                            <option>-- Pilih --</option>
                            <option>Kakak Kandung</option>
                            <option>Adik Kandung</option>
                            <option>Sepupu</option>
                            <option>Bibi</option>
                            <option>Paman</option>
                          </select>
                    </div>  
                 </div>


                  <div class="form-group">
                        <label name="alamat_kel" class="col-sm-2 control-label">Alamat Keluarga *</label>
                     <div class="col-sm-6">
                        <textarea name="alamat_kel" class="form-control" rows="4"></textarea> 
                    </div>
                </div>

                <div class="form-group">
                      <label name="no_kel" class="col-sm-2 control-label">No. Telepon * </label>
                    <div class="col-sm-5 col-sm-offsite-5">
                       <input type="text" class="form-control" name="no_kel" placeholder="nomor telepon keluarga"> 
                    </div>
                 </div>


                 <div class="from-group">
                   <div class="col-sm-12">
                     <h3 class="text-left">Latar Belakang Pendidikan</h3>
                     <hr>
                   </div>
                 </div>


                 <div class="from-group">
                   <div class="col-sm-12">
                     <h4 class="text-center">Mulai dari Sekolah Menengah Atas</h4>
                   </div>
                 </div>


                  <div class="form-group">
                      <label name="pendidikan" class="col-sm-2 control-label">Pendidikan *</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="pendidikan">
                            <option>-- Pilih Pendidikan --</option>
                            <option>SMK/SMA</option>
                            <option>D3</option>
                            <option>S1</option>
                            <option>S2</option>
                          </select>
                    </div>  
                 </div>

                 <div class="form-group">
                      <label name="nm_sekolah" class="col-sm-2 control-label">Sekolah/Universitas * </label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="nm_sekolah" placeholder="nama sekolah/ universitas"> 
                    </div>
                 </div>


                 <div class="form-group">
                      <label name="jurusan" class="col-sm-2 control-label">Jurusan * </label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="jurusan" placeholder="jurusan"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tgl_mulai" class="col-sm-2 control-label">Mulai Tanggal * </label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <input type="date" class="form-control" name="tgl_mulai"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tgl_selesai" class="col-sm-2 control-label">Selesai Tanggal * </label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <input type="date" class="form-control" name="tgl_selesai"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="nilai" class="col-sm-2 control-label">Nilai/IPK * </label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="nilai" placeholder="nilai"> 
                    </div>
                 </div>

               <div class="from-group">
                   <div class="col-sm-12">
                     <h3 class="text-left">Pengalaman Organisasi</h3>
                     <hr>
                   </div>
                 </div>


                 <div class="from-group">
                   <div class="col-sm-12">
                     <h4 class="text-center">Silahkan isi jika anda memiliki pengalaman organisasi</h4>
                   </div>
                 </div>

                 <div class="form-group">
                      <label name="organisasi" class="col-sm-2 control-label">Organisasi</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="organisasi" placeholder="nama organisasi"> 
                    </div>
                 </div>

                  <div class="form-group">
                      <label name="jabatan" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="jabatan" placeholder="jabatan anda"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="periode_org" class="col-sm-2 control-label">Periode</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="periode_org" placeholder="tahun awal - tahun akhir"> 
                    </div>
                 </div>

                 <div class="from-group">
                   <div class="col-sm-12">
                     <h3 class="text-left">Pengalaman Training & Kursus</h3>
                     <hr>
                   </div>
                 </div>


                 <div class="from-group">
                   <div class="col-sm-12">
                     <h4 class="text-center">Silahkan isi jika anda memiliki pengalaman training & kursus</h4>
                   </div>
                 </div>

                  <div class="form-group">
                      <label name="nm_kursus" class="col-sm-2 control-label">Nama Training & Kursus</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="nm_kursus" placeholder="nama training & kursus"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tahun" class="col-sm-2 control-label">Tahun</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <input type="text" class="form-control" name="tahun" placeholder="tahun mengikuti kursus"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="penyelenggara" class="col-sm-2 control-label">Penyelenggara</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="penyelenggara" placeholder="nama penyelenggara"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="peringkat" class="col-sm-2 control-label">Peringkat</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="peringkat" placeholder="peringkat anda"> 
                    </div>
                 </div>





                  <div class="from-group">
                   <div class="col-sm-12">
                     <h3 class="text-left">Bahasa</h3>
                     <hr>
                   </div>
                 </div>


                 <div class="from-group">
                   <div class="col-sm-12">
                     <h4 class="text-center">Jika anda mempunyai kemampuan berbahasa inggris merupakan nilai tambahan</h4>
                   </div>
                 </div>

                 <div class="form-group">
                      <label name="bahasa" class="col-sm-2 control-label">Jenis Bahasa</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="bahasa" placeholder="kemampuan bahasa anda"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="dengar" class="col-sm-2 control-label">Mendengar</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="dengar">
                            <option>-- Pilih --</option>
                            <option>Baik Sekali</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Kurang</option>
                          </select>
                    </div>  
                 </div>

                 <div class="form-group">
                      <label name="baca" class="col-sm-2 control-label">Membaca</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="baca">
                            <option>-- Pilih --</option>
                            <option>Baik Sekali</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Kurang</option>
                          </select>
                    </div>  
                 </div>

                 <div class="form-group">
                      <label name="bicara" class="col-sm-2 control-label">Berbicara</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="bicara">
                            <option>-- Pilih --</option>
                            <option>Baik Sekali</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Kurang</option>
                          </select>
                    </div>  
                 </div>

                 <div class="form-group">
                      <label name="tulis" class="col-sm-2 control-label">Menulis</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="tulis">
                            <option>-- Pilih --</option>
                            <option>Baik Sekali</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Kurang</option>
                          </select>
                    </div>  
                 </div>




                  <div class="from-group">
                   <div class="col-sm-12">
                     <h3 class="text-left">Pengalaman Kerja</h3>
                     <hr>
                   </div>
                 </div>


                 <div class="from-group">
                   <div class="col-sm-12">
                     <h4 class="text-center">Silahkan isi jika anda mempunyai pengalaman kerja, mulai dari pengalaman kerja yang terakhir</h4>
                   </div>
                 </div>

                  <div class="form-group">
                      <label name="nm_pt" class="col-sm-2 control-label">Nama Perusahaan</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="nm_pt" placeholder="nama perusahaan"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tgl_awal" class="col-sm-2 control-label">Mulai Kerja</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="date" class="form-control" name="tgl_awal"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tgl_akhir" class="col-sm-2 control-label">Akhir Kerja</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="date" class="form-control" name="tgl_akhir"> 
                    </div>
                 </div>

                  <div class="form-group">
                        <label name="almt_pt" class="col-sm-2 control-label">Alamat Perusahaan</label>
                     <div class="col-sm-6">
                        <textarea name="almt_pt" class="form-control" rows="4"></textarea> 
                    </div>
                  </div>


                 <div class="form-group">
                      <label name="tlp_pt" class="col-sm-2 control-label">No. Telepon</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="tlp_pt" placeholder="nomor telepon perusahaan"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="jabat_awal" class="col-sm-2 control-label">Jabatan Awal</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="jabat_awal" placeholder="jabatan awal"> 
                    </div>
                 </div>

                  <div class="form-group">
                      <label name="jabat_akhir" class="col-sm-2 control-label">Jabatan Akhir</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="jabat_akhir" placeholder="jabatan akhir"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="nm_atasan" class="col-sm-2 control-label">Nama Atasan</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="nm_atasan" placeholder="nama atasan diperusahaan tersebut"> 
                    </div>
                 </div>

                 <div class="form-group">
                        <label name="alasan" class="col-sm-2 control-label">Alasan Berhenti Bekerja</label>
                     <div class="col-sm-6">
                        <textarea name="alasan" class="form-control" rows="4"></textarea> 
                    </div>
                 </div>

                  <div class="form-group">
                      <label name="gaji" class="col-sm-2 control-label">Gaji</label>
                    <div class="col-sm-5 col-sm-offsite-5">
                       <input type="text" class="form-control" name="gaji" placeholder="gaji terakhir anda"> 
                    </div>
                 </div>

                  <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                           <input type="submit" class="btn btn-primary" value="simpan">
                            <button type="reset" class="btn btn-primary">Batal</button>
                      </div>
                  </div>

           </form>
          
        </div>
      </div>
    </section>
    </div>

    <!-- akhir formulir -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>