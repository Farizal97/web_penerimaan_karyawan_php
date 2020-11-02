<?php
session_start();
//cek level user
if(@$_SESSION['admin']){
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap4/css/custom.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- datatables -->
    <link rel="stylesheet" href="bootstrap4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="bootstrap4/css/dataTables.bootstrap4.min.css">





<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.0/css/responsive.bootstrap4.min.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.0/js/responsive.bootstrap4.min.js"></script> -->

  </head>

<div class="container">

  <body style="background-color: transparent;">
         <h1 align="center">Lihat Data</h1>
        <hr>
       
    
         <!--tabel-->
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="table table-responsive table-hover" cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Posisi Pekerjaan</th>
                                <th scope="col">Lokasi Seleksi</th>
                                <th scope="col">Mulai Tanggal</th>
                                <th scope="col">Berakhir Tanggal</th>
                                <th scope="col">Lokasi Pekerjaan</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">View</th>
                                <th scope="col" width="80px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            // Load file koneksi.php
                            include "koneksi.php";
                            
                            $query = "SELECT * FROM lowongan"; // Query untuk menampilkan semua data lowongan
                            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                            

                            $no = 1 ;
                            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql

                            ?>

                                <tr scope="row">
                                    <td><?php echo $no; ?> </td>
                                    <td><?php echo $data ['posisi_pekerjaan']; ?></td>
                                    <td><?php echo $data ['lokasi_seleksi']; ?></td>
                                    <td><?php echo $data ['tgl_mulai']; ?></td>
                                    <td><?php echo $data ['tgl_selesai']; ?></td>
                                    <td><?php echo $data ['lokasi_pekerjaan']; ?></td>
                                    <td><?php echo $data ['nip']; ?></td>
                                    <td><?php echo $data ['view']; ?></td>
                                    <td>
                                      <?php 
                                        echo "<a href='up_lwg.php?id_lowongan=".$data['id_lowongan']."'>Ubah | 
                                              <a href='del_lwg.php?id_lowongan=".$data['id_lowongan']."'>Hapus</a>";
                                       ?>
                                    </td>

                                    
                                </tr>
                                <?php
                               $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


                     
        </table>
</div>




<!-- jquery package -->
    
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    <script src="bootstrap4/js/dataTables.bootstrap4.min.js"></script>
    <script src="bootstrap4/js/dataTables.bootstrap4.js"></script>


<!--     <script src="bootstrap4/datatables/jquery.dataTables.min.js"></script>
    <script src="bootstrap4/datatables/jquery-1.12.4.js"></script>
    <script src="bootstrap4/datatables/dataTables.bootstrap4.min.js"></script>
 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/js/dataTables.bootstrap4.min.js"></script>

    <script> type="text/javascript"
      $(document).ready(function() {
        $('#example').DataTable();
      });
</script>

  </body>
</html>

<?php
}else {
    include "illegal.php";
}
?>



