<?php
	session_start();
	if(!isset($_SESSION['username'])){
		include 'tidakLangsung.php';
		header( "refresh:5;url=halamanlogin.php" );
	}else{
		$dis = true;
?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Home - <?php echo $_SESSION['username']?></title>
			<link rel="icon" type="image/x-icon" href="favicon.ico">
			<link rel="stylesheet" type="text/css" href="styleHomeSiswa.css">
			<script src="jquery-3.6.0.js"></script>
			<!-- Latest compiled and minified CSS -->
			<!-- Latest compiled and minified JavaScript -->
			<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
			<script type="text/javascript" src='js/bootstrap.min.js'></script>
			<link rel="stylesheet" href="css/bootstrap.min.css" />
		</head>

		<body>
			<?php
				include '_bagian/navbar.php';
			?>
			<div class="container">
				<div class="jumbotron">
				  <div class="container">
				    <h1 class="display-4">Selamat Datang Admin: <?php echo $_SESSION['username']?></h1>
				    <p class="lead">Anda dapat melihat, mengedit, dan menghapus data siswa di bawah ini.</p><hr><br>
				  </div>
				</div>
				<table class="table table-bordered table-striped table-hover">
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Nama Orang Tua</th>
						<th>Alamat</th>
						<th>Kota/Kabupaten</th>
						<th>Asal Sekolah</th>
						<th>Agama</th>
						<th>Status</th>
						<th>Aksi</th>
					<?php
						include "koneksi.php";

						$query="SELECT * FROM siswa";
						$result = mysqli_query($connect, $query);

						if(mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_array($result)){
					?>
					<tr>
						<td><?php echo $row["no"] ?></td>
						<td><?php echo $row["nama"] ?></td>
						<td><?php echo ($row['jenisKelamin'] == "L") ?  "Laki-laki" : "Perempuan" ;  ?></td>
						<td><?php echo $row["tempat"] ?></td>
						<td><?php echo $row["tanggal"] ?></td>
						<td><?php echo $row["namaOrtu"] ?></td>
						<td><?php echo $row["alamat"] ?></td>
						<td><?php echo $row["kota"] ?></td>
						<td><?php echo $row["asalSekolah"]?></td>
						<td><?php echo $row["agama"] ?></td>
						<td><?php echo ($row['status'] == 1) ?  "Aktif" : "Tidak Aktif" ;  ?></td>
						<td>
							<button type="button" class="btn btn-success" onclick="location.href='http://localhost/dasarweb/praktik_php/OnyNovianti/halamanLogin.php?id=<?php echo $row['no'];?>'">Edit</button>
							<button type="button" class="btn btn-danger" onclick="location.href='http://localhost/dasarweb/praktik_php/OnyNovianti/halamanLogin.php?id=<?php echo $row['no'];?>'">Hapus</button>
						</td>
					</tr>
					<?php
							}
						}
						else{
							echo "0 result";
						}
					?>
				</table>
				<p> Untuk logout, silahkan klik link berikut ini: <a href="logout.php">Logout</a></p>
			</div>
		</body>
		</html>
<?php
	}
?>