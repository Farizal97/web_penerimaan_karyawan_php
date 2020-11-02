<?php
session_start();
//cek level user
if(@$_SESSION['admin']){
  $id_admin = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Recruitment OCELLUS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap4/css/style1.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <script src="../bootstrap4/js/jquery.js"></script>
</head>
<body style="background-image: url(../bootstrap4/img/bg.png");">   
<!-- navigation -->


<?php 
  
  include"navbarb4.php";

 ?>

<div class="pembatas" style="margin-bottom: -30px;">
  
</div>

<?php 
  
  include"koneksi.php";

  $caridata = mysqli_query($connect, "SELECT username from admin where id_admin='$id_admin'");
  $data = mysqli_fetch_array($caridata);

 ?>


<!-- menu sidebar-->
      <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav" style="margin-left:0;">
                    <li class="sidebar">
                            <a href="#menu-toggle"  id="menu-toggle"> <i class="fa fa-bars " style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i>  &nbsp; <?php echo $data['username']; ?> </a>
                    </li>
                    <li>
                        <a target="iframe_a" style="color: white;"><i class="fa fa-home" aria-hidden="true"></i>
                            <span style="margin-left:10px;">Profile</span>  </a>
                        <ul style="color: white; list-style-type: none; margin-left: 10px;">
                          <li><a target="iframe_a" href="lihat_admin.php?id_admin=<?php echo"$id_admin"; ?>">Lihat Profile</a></li>
                          <li><a target="iframe_a" href="up_admin.php?id_admin=<?php echo"$id_admin"; ?>">Update Profile</a></li>
                           <li><a target="iframe_a" href="add_admin.php">Tambah HRD</a></li>
                          <li><a target="iframe_a" href="pass.php?id_admin=<?php echo"$id_admin"; ?>">Ganti Password</a></li>
                        </ul>
                    </li>

                    <li>
                        <a target="iframe_a" style="color: white;"><i class="fa fa-file-text-o" aria-hidden="true"></i><span style="margin-left:10px;">Master Ujian</span>  </a>
                        <ul style="color: white; list-style-type: none; margin-left: 10px;">
                          <li><a target="iframe_a" href="add_soal.php">Tambah Soal</a></li>
                          <li><a target="iframe_a" href="view_soal.php">Lihat Soal</a></li>
                        </ul>
                    </li>

                    <li>
                        <a target="iframe_a" style="color: white;"><i class="fa fa-users" aria-hidden="true"></i> <span style="margin-left:10px;">Master Pelamar</span>  </a>
                        <ul style="color: white; list-style-type: none; margin-left: 10px;">
                          <li><a target="iframe_a" href="view_plmr.php">List Pelamar</a></li>
                        </ul>
                    </li>

                    <li>
                        <a target="iframe_a" style="color: white;"><i class="fa fa-briefcase" aria-hidden="true"></i> <span style="margin-left:10px;">Master Karir</span>  </a>
                        <ul style="color: white; list-style-type: none; margin-left: 10px;">
                          <li><a target="iframe_a" href="add_lwg.php">Tambah Karir</a></li>
                          <li><a target="iframe_a" href="view_lwg.php">Lihat Karir</a></li>
                        </ul>
                    </li>
                   
                   
                </ul>
            </div>
<!-- end menu sidebar -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12 ">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="lihat_admin.php?id_admin=<?php echo $id_admin; ?>" class="embed-responsive-item" scrolling="yes" frameborder="0" name="iframe_a" height="800" width="100%"></iframe> 
                </div>
          </div>
        </div>
        </div>
        </div>            
        </div>

        <div class="text-center">
           <p>&copy; copyright 2017 | Ocellus Indonesia by. <a href="#">Mahasiswi AMIK BSI</a> </p>
        </div>


                 

                    
        
        <!-- /#page-content-wrapper -->

   
    <!-- /#wrapper -->

    
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>

    
  </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>

<?php
}else {
  include "illegal.php";
}
?>



