<?php

$error=''; 

include "koneksi.php";
if(isset($_POST['submit']))
{				
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level		= $_POST['level'];
					
	$query = mysqli_query($connect, "SELECT * FROM admin.username, admin.password, admin.level, pelamar.username , pelamar.password, pelamar.level WHERE 
		username='$username' AND password='$password'");
	if(mysqli_num_rows($query) == 0)
	{
		$error = "Username or Password is invalid";
	}
	else
	{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['level'] = $row['level'];
		
		if($row['level'] == "admin" && $level=="1")
		{
			
			header("Location: sidebar.php");
		}
		else if($row['level'] =="hrd" && $level=="2")
		{
			header("Location: hal-hrd.php");
		}
		else if($row['level'] == "pelamar" && $level=="3")
		{
			
			header("Location: hal-pelamar.php");
		}
		else
		{
			$error = "Failed Login";
		}
	}
}

			
?>