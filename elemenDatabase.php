<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	$database = "praktikumdb";

	$connect = mysqli_connect($namaHost,$username, $password, $database);

	if($connect){
		echo "Koneksi dengan MySQL berhasil<br>";
	}else{
		echo "Koneksi dengan MySQL gagal".mysqli_connect_error();
	}

	$sql =   "CREATE TABLE siswa(
			  no INT PRIMARY KEY,
			  nama VARCHAR(30) NOT NULL,
			  jenisKelamin VARCHAR(30) NOT NULL,
			  tempat VARCHAR(30) NOT NULL,
			  tanggal DATE NOT NULL,
			  namaOrtu VARCHAR(30) NOT NULL,
			  alamat VARCHAR(50) NOT NULL,
			  kota VARCHAR(30) NOT NULL,
			  asalSekolah VARCHAR(30) NOT NULL,
			  agama VARCHAR(30) NOT NULL)";

	if(mysqli_query($connect, $sql)){
		echo "Tabel mahasiswa berhasil dibuat";
?>
	<a href="formRegistrasi.php">Jalankan Program!</a>
<?php
	}else{
		echo "Tabel mahasiswa gagal dibuat <br>".mysql_error($connect);
	}

	mysqli_close($connect);
?>