<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>


	 <!-- Bootstrap -->
    <link href="../bootstrap3/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .atas hr {
        width: 500px;
        border-top: 3px solid #999;
      }
    </style>
</head>
<body>
	
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

	<!-- atas -->
    <section class="atas" id="atas">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Ubah Data Pendaftaran</h2>
            <hr>
          </div>
        </div>
      </div> 
    </section>
    <!-- akhir atas -->

    <!-- ubah formulir -->
    <section class="formulir" id="formulir">
    	<div class="container">
    		<div class="row">
    			<form  class="form-horizontal" method="post" action="proses_ubah.php?id_pelamar=<?php echo $id_pelamar; ?>" enctype="multipart/form-data">


    			<div class="from-group">
                   <div class="col-sm-12">
                     <h3 class="text-left">Data Pribadi</h3>
                     <hr>
                   </div>
                 </div>

                 <div class="form-group">
                      <label  name="nama" class="col-sm-2 control-label">Nama Lengkap </label>
                    <div class="col-sm-7 col-sm-offsite-3">
                      <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?> ">
                    </div>
                 </div>

                 <div class="form-group">
                      <label  name="jekel" class="col-sm-2 control-label">Jenis Kelamin </label>
                    <div class="col-sm-4 col-sm-offsite-6">
                      <select class="form-control" name="jekel" value="<?php echo $data['jekel']; ?> ">
                            <option>-- Pilih Jenis Kelamin --</option>
                            <option>Laki - Laki</option>
                            <option>Perempuan</option>
                          </select>
                    </div>
                 </div>

                  <div class="form-group">
                        <label  name="tempat_lhr" class="col-sm-2 control-label">Tempat Lahir </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tempat_lhr" value="<?php echo $data['tempat_lhr']; ?> ">
                    </div> 
                        <label  name="tgl_lhr" class="col-sm-2 control-label">Tanggal Lahir </label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="tgl_lhr" value="<?php echo $data['tgl_lhr']; ?> ">
                    </div>                  
                 </div>


                 <div class="form-group">
                        <label name="alamat" class="col-sm-2 control-label">Alamat </label>
                     <div class="col-sm-4">
                        <textarea name="alamat" class="form-control" rows="4"><?php echo $data['alamat']; ?></textarea> 
                    </div>
                         <label  name="kodepos" class="col-sm-2 control-label">Kode Pos </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="kodepos" value="<?php echo $data['kodepos']; ?> ">
                    </div>
                </div>


                 <div class="form-group">
                        <label  name="kota" class="col-sm-2 control-label">Kota </label>
                    <div class="col-sm-4 col-sm-offsite-6">
                        <input type="text" class="form-control" name="kota" value="<?php echo $data['kota']; ?> ">
                    </div>                    
                 </div>

                 <div class="form-group">
                        <label  name="no_tlp" class="col-sm-2 control-label">No. Telepon </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="no_tlp" value="<?php echo $data['no_tlp']; ?>">
                    </div> 
                        <label  name="no_hp" class="col-sm-2 control-label">No. Handphone </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="no_hp" value="<?php echo $data['no_hp']; ?>">
                    </div>                         
                 </div>
                  

                  <div class="form-group">
                        <label  name="ktp" class="col-sm-2 control-label">No. KTP </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="ktp" value="<?php echo $data['ktp']; ?>">
                    </div> 
                        <label  name="negara" class="col-sm-2 control-label">Kewarganegaraan </label>
                    <div class="col-sm-4">
                        <select class="form-control" name="negara" value="<?php echo $data['negara']; ?>">
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
                      <label name="agama" class="col-sm-2 control-label">Agama </label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="agama" value="<?php echo $data['agama']; ?>">
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
                       <input type="text" class="form-control" name="hobi" value="<?php echo $data['hobi']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                        <label name="alamat_ortu" class="col-sm-2 control-label">Alamat Orang Tua </label>
                     <div class="col-sm-4">
                        <textarea name="alamat_ortu" class="form-control" rows="4"><?php echo $data['alamat_ortu']; ?></textarea> 
                    </div>
                         <label  name="kodepos_ortu" class="col-sm-2 control-label">Kode Pos </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="kodepos_ortu" value="<?php echo $data['kodepos_ortu']; ?>">
                    </div>
                </div>

                <div class="form-group">
                        <label  name="kota_ortu" class="col-sm-2 control-label">Kota</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                        <input type="text" class="form-control" name="kota_ortu" value="<?php echo $data['kota_ortu']; ?>">
                    </div>                    
                 </div>


                 <div class="form-group">
                      <label name="status" class="col-sm-2 control-label">Status </label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="status" value="<?php echo $data['status']; ?>">
                            <option>-- Pilih Status Anda --</option>
                            <option>Sudah Menikah</option>
                            <option>Belum Menikah</option>
                          </select>
                    </div>  
                 </div>

                 <div class="form-group">
                        <label  name="jml_anak" class="col-sm-2 control-label">Jumlah Anak </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="jml_anak" value="<?php echo $data['jml_anak']; ?> ">
                    </div>                     
                 </div>


                  <div class="form-group">
                    <h4 class="text-center">Anggota Keluarga yang dapat dihubungi dalam keadaan darurat </h4>
                  </div>
                      

                 <div class="form-group">
                        <label  name="nm_kel" class="col-sm-2 control-label">Nama Keluarga  </label>
                    <div class="col-sm-7 col-sm-offsite-3">
                        <input type="text" class="form-control" name="nm_kel" value="<?php echo $data['nm_kel']; ?>"> 
                    </div>                     
                 </div>


                 <div class="form-group">
                      <label name="hubungan" class="col-sm-2 control-label">Hubungan dengan anda </label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="hubungan" value="<?php echo $data['hubungan']; ?>">
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
                        <label name="alamat_kel" class="col-sm-2 control-label">Alamat Keluarga</label>
                     <div class="col-sm-6">
                        <textarea name="alamat_kel" class="form-control" rows="4"><?php echo $data['alamat_kel']; ?></textarea> 
                    </div>
                </div>

                <div class="form-group">
                      <label name="no_kel" class="col-sm-2 control-label">No. Telepon  </label>
                    <div class="col-sm-5 col-sm-offsite-5">
                       <input type="text" class="form-control" name="no_kel" value="<?php echo $data['no_kel']; ?>"> 
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
                      <label name="pendidikan" class="col-sm-2 control-label">Pendidikan </label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="pendidikan" value="<?php echo $data['pendidikan']; ?>">
                            <option>-- Pilih Pendidikan --</option>
                            <option>SMK/SMA</option>
                            <option>D3</option>
                            <option>S1</option>
                            <option>S2</option>
                          </select>
                    </div>  
                 </div>

                 <div class="form-group">
                      <label name="nm_sekolah" class="col-sm-2 control-label">Sekolah/Universitas  </label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="nm_sekolah" value="<?php echo $data['nm_sekolah']; ?>"> 
                    </div>
                 </div>


                 <div class="form-group">
                      <label name="jurusan" class="col-sm-2 control-label">Jurusan  </label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="jurusan" value="<?php echo $data['jurusan']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tgl_mulai" class="col-sm-2 control-label">Mulai Tanggal</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <input type="date" class="form-control" name="tgl_mulai" value="<?php echo $data['tgl_mulai']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tgl_selesai" class="col-sm-2 control-label">Selesai Tanggal  </label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <input type="date" class="form-control" name="tgl_selesai" value="<?php echo $data['tgl_selesai']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="nilai" class="col-sm-2 control-label">Nilai/IPK  </label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="nilai" value="<?php echo $data['nilai']; ?>"> 
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
                       <input type="text" class="form-control" name="organisasi" value="<?php echo $data['organisasi']; ?>"> 
                    </div>
                 </div>

                  <div class="form-group">
                      <label name="jabatan" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="jabatan" value="<?php echo $data['jabatan']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="periode_org" class="col-sm-2 control-label">Periode</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="periode_org" value="<?php echo $data['periode_org']; ?>"> 
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
                       <input type="text" class="form-control" name="nm_kursus" value="<?php echo $data['nm_kursus']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tahun" class="col-sm-2 control-label">Tahun</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <input type="text" class="form-control" name="tahun" value="<?php echo $data['tahun']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="penyelenggara" class="col-sm-2 control-label">Penyelenggara</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="penyelenggara" value="<?php echo $data['penyelenggara']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="peringkat" class="col-sm-2 control-label">Peringkat</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="peringkat" value="<?php echo $data['peringkat']; ?>"> 
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
                       <input type="text" class="form-control" name="bahasa" value="<?php echo $data['bahasa']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="dengar" class="col-sm-2 control-label">Mendengar</label>
                    <div class="col-sm-4 col-sm-offsite-6">
                       <select class="form-control" name="dengar" value="<?php echo $data['dengar']; ?>">
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
                       <select class="form-control" name="baca" value="<?php echo $data['baca']; ?>">
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
                       <select class="form-control" name="bicara" value="<?php echo $data['bicara']; ?>">
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
                       <select class="form-control"  name="tulis" value="<?php echo $data['tulis']; ?>">
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
                       <input type="text" class="form-control" name="nm_pt" value="<?php echo $data['nm_pt']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tgl_awal" class="col-sm-2 control-label">Mulai Kerja</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="date" class="form-control" name="tgl_awal" value="<?php echo $data['tgl_awal']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="tgl_akhir" class="col-sm-2 control-label">Akhir Kerja</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="date" class="form-control" name="tgl_akhir" value="<?php echo $data['tgl_akhir']; ?>"> 
                    </div>
                 </div>

                  <div class="form-group">
                        <label name="almt_pt" class="col-sm-2 control-label">Alamat Perusahaan</label>
                     <div class="col-sm-6">
                        <textarea name="almt_pt" class="form-control" rows="4"><?php echo $data['almt_pt']; ?></textarea> 
                    </div>
                  </div>


                 <div class="form-group">
                      <label name="tlp_pt" class="col-sm-2 control-label">No. Telepon</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="tlp_pt" value="<?php echo $data['tlp_pt']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="jabat_awal" class="col-sm-2 control-label">Jabatan Awal</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="jabat_awal" value="<?php echo $data['jabat_awal']; ?>"> 
                    </div>
                 </div>

                  <div class="form-group">
                      <label name="jabat_akhir" class="col-sm-2 control-label">Jabatan Akhir</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="jabat_akhir" value="<?php echo $data['jabat_akhir']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                      <label name="nm_atasan" class="col-sm-2 control-label">Nama Atasan</label>
                    <div class="col-sm-7 col-sm-offsite-3">
                       <input type="text" class="form-control" name="nm_atasan" value="<?php echo $data['nm_atasan']; ?>"> 
                    </div>
                 </div>

                 <div class="form-group">
                        <label name="alasan" class="col-sm-2 control-label">Alasan Berhenti Bekerja</label>
                     <div class="col-sm-6">
                        <textarea name="alasan" class="form-control" rows="4"><?php echo $data['alasan']; ?></textarea> 
                    </div>
                 </div>

                  <div class="form-group">
                      <label name="gaji" class="col-sm-2 control-label">Gaji</label>
                    <div class="col-sm-5 col-sm-offsite-5">
                       <input type="text" class="form-control" name="gaji" value="<?php echo $data['gaji']; ?>"> 
                    </div>
                 </div>

                  <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="index.php"><button type="button" class="btn btn-primary">Batal</button></a>
                      </div>
                  </div>



    				
    			</form>
    		</div>
    	</div>
    </section>
    <!-- akhir ubah formulir -->

	
</body>
</html>
