<?php 

	//include PHPmailer Autoload.php
	require'phpmailer/PHPMailerAutoload.php';

	//create an instance of PHPmailer
	$mail = new PHPmailer();

	//set a host
	$mail->Host = "smtp.gmail.com";

	//enable SMTP
	//$mail->isSMTP();

	//set authentication to true
	$mail->SMPTAuth = true;

	//set login details for Gmail Account
	$mail->Username = "recruitment.ocellus@gmail.com";
	$mail->Password = "ocellus123";

	//set type of protection
	$mail->SMTPSecure = "ssl"; //or we can use TLS

	//set a port
	$mail->Port = 465; //or 587 if TLS

	//set subject
	$mail->Subject = "Penerimaan Lowongan PT Ocellus Indonesia";


	//set HTML to true
	$mail->isHTML(isHTML:true)

	//set body
	$mail->Body = "Selamat anda diterima";

	//set who is sending an email
	$mail->setForm(address: 'recruitment.ocellus@gmail.com', name: 'PT Ocellus' );

	//set where we are sending email(recipients)
	$mail->addAddress(address: 'gtsgalang27@gmail.com');

	//send an email
	if ($mail->send()) 
		echo "email berhasil dikirim";
	else
		echo "email gagal dikirim";
	


 ?>