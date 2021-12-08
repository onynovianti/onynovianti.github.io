<?php
	session_start();
	if(!isset($_SESSION['username'])){
		include 'tidakLangsung.php';
		header( "refresh:5;url=halamanlogin.php" );
	}else{
?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Keluar</title>
			<link rel="stylesheet" type="text/css" href="styleHalamanLogin.css">
			<link rel="icon" type="image/x-icon" href="favicon.ico">
		</head>
		<body>
			<div class="containerLogin">
				<div class="logo" style="text-align: center;">
					<img src="img/sma.png" width="100" height="100">
					<h2>Anda berhasil keluar!<br><br></h2>

					Terimakasih :)
				</div>
			</div>
		</body>
		</html>
<?php
	header( "refresh:5;url=formRegistrasi.php" );
	}
?>