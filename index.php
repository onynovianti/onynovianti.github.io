<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SMA Nusantara</title>
	<script src="jquery-3.6.0.js"></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body>
	<!-- NAVBAR -->
	<?php
		$dis = false;
		include "_bagian/navbar.php";
	?>
	<!-- CONTAINER -->
	<div class="containerLogin">
		<div class="row">
			<div class="col-md-12"><img src="img/uniform.jpg" alt="example" class="img-fluid"></div>
		</div><hr>
		<div class="row">
			<div class="col-md-9" id="keterangan">
				<h1><center>Selamat Datang</h1></center><br>
				<p><center>&nbsp;Sekolah adalah lembaga untuk para siswa pengajaran siswa/murid di bawah pengawasan guru. <br> &nbsp;Bergabunglah bersama kami, dengan lebih dari 60 tenaga pengajar, ter-akreditasi A, kami siap mengantar siswa-siswi kami meraih prestasinya!<br><br>
				<button type="button" class="btn btn-block btn-outline-info btn-lg" onclick="location.href='http://localhost/dasarweb/praktik_php/OnyNovianti/formRegistrasi.php'">Daftar Sekarang!</button><br><br>
				<b>SMA Nusantara.. Cerdas, Aktif, Berprestasi!</b>
				</p></center>
			</div>
			<div class="col-md-3" id="foto"><img class="rounded-circle img-fluid" src="img/formal.jpg"></div><hr style="margin-top: 1%;">
		</div>
	</div>

	<!-- NAVBAR -->
	<?php
		include "_bagian/footer.php";
	?>
</body>
</html>