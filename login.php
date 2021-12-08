<?php
	session_start();

	include 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query  = "SELECT * FROM usersekolah WHERE username='$username' and password='$password'";
	$result = mysqli_query($connect, $query);
	$row    = mysqli_fetch_assoc($result);

	if($row['level'] == 1){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("Location: http://localhost/dasarweb/praktik_php/OnyNovianti/homeAdmin.php");
		die();
	}else if($row['level'] == 2){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("Location: http://localhost/dasarweb/praktik_php/OnyNovianti/homeSiswa.php");
		die();
	}else{
?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Error!</title>
			<link rel="stylesheet" type="text/css" href="styleHalamanLogin.css">
			<link rel="icon" type="image/x-icon" href="favicon.ico">
		</head>
		<body>
			<div class="containerLogin">
				<div class="logo" style="text-align: center;">
					<img src="img/sma.png" width="100" height="100">
					<p>Anda gagal login karena username atau password yang Anda masukkan tidak sesuai. Silahkan login kembali dengan alamat ini <a href="halamanLogin.php">Halaman Login</a> atau tunggu redirect selama 5 detik.<br><br>

					Terimakasih :)</p>
				</div>
			</div>
		</body>
		</html>
<?php
	header( "refresh:5;url=halamanlogin.php" );
	echo mysqli_error($connect);
	}
?>