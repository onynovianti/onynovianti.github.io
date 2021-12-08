<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	$database = "praktikumdb";
	$no = $_POST['no'];
	$nama = $_POST['nama'];
	$jenisKelamin = $_POST['jenisKelamin'];
	$tempat = $_POST['tempat'];
	$tanggal = $_POST['tanggal'];
	$namaOrtu = $_POST['namaOrtu'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];
	$asalSekolah = $_POST['asalSekolah'];
	$agama = $_POST['agama'];

	$connect = mysqli_connect($namaHost,$username, $password, $database);
	$password = $_POST['password'];
	$sql = "INSERT INTO siswa VALUES ('$no','$nama','$jenisKelamin','$tempat','$tanggal','$namaOrtu','$alamat','$kota', '$asalSekolah','$agama','1')";
	$sql1 = "INSERT INTO usersekolah(username, password,level) VALUES ('$no',MD5('$password'),'2')";

	mysqli_query($connect, $sql);
	mysqli_query($connect, $sql1);

	header("Location: http://localhost/dasarweb/praktik_php/OnyNovianti/halamanLogin.php");
	die();
	// echo mysqli_error($connect);
?>