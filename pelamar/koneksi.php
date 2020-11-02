<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "tugas_web"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

if($connect){
    
}else{
    echo "koneksi gagal";
}
?>
