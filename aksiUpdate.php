<?php
	include 'koneksi.php';

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

	$query = "UPDATE siswa SET nama='$nama',jenisKelamin='$jenisKelamin',tempat='$tempat',tanggal='$tanggal',namaOrtu='$namaOrtu',alamat='$alamat',kota='$kota', asalSekolah='$asalSekolah',agama='$agama' WHERE no='$no'";
	$result = mysqli_query($connect, $query);

	header("Location: http://localhost/dasarweb/praktik_php/OnyNovianti/homeSiswa.php");
	die();
?>