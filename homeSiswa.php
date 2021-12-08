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
			<script>
				function validateForm() {
				  var no = document.getElementsByName("no")[0].value;
				  var nama = document.getElementsByName("nama")[0].value;
				  var jenisKelamin = document.getElementsByName("gender")[0].value;
				  var tempat = document.getElementsByName("tempat")[0].value;
				  var tanggal = document.getElementsByName("tanggal")[0].value;
				  var namaOrtu = document.getElementsByName("namaOrtu")[0].value;
				  var alamat = document.getElementsByName("alamat")[0].value;
				  var kota = document.getElementsByName("kota")[0].value;
				  var asalSekolah = document.getElementsByName("asalSekolah")[0].value;
				  var agama = document.getElementsByName("agama")[0].value;
				  var password = document.getElementsByName("password")[0].value;

				  if (no == "") {
				      alert("No Harus Diisi");
				      return false;
				  }else if(nama == ""){
				  	  alert("Nama Harus Diisi");
				      return false;
				  }else 
				  if(jenisKelamin == ""){
				  	  alert("Jenis Kelamin Harus Diisi");
				      return false;
				  }else if(tempat == ""){
				  	  alert("Tempat Harus Diisi");
				      return false;
				  }else if(tanggal == ""){
				  	  alert("Tanggal Harus Diisi");
				      return false;
				  }else if(namaOrtu == ""){
				  	  alert("Nama OrangTua/Wali Harus Diisi");
				      return false;
				  }else if(alamat == ""){
				  	  alert("Alamat Harus Diisi");
				      return false;
				  }else if(kota == ""){
				  	  alert("Kota/Kabupaten Harus Diisi");
				      return false;
				  }else if(asalSekolah == ""){
				  	  alert("Asal Sekolah Harus Diisi");
				      return false;
				  }else if(agama == ""){
				  	  alert("Agama Harus Diisi");
				      return false;
				  }else if(password == ""){
				  	  alert("Password Harus Diisi");
				      return false;
				  }else{
				  	  return true;
				  }
				}
			</script>
			<script>
				$(document).ready(function(){
					$("input[type=radio]").change(function(){
						if(this.value == "L"){
							$('input[name="gender"]').val('Laki-Laki')
						}else if(this.value == "P"){
							$('input[name="gender"]').val('Perempuan')
						}
					});
				});
			</script>
		</head>

		<body>
			<?php
				include '_bagian/navbar.php';
			?>
			<div class="container">
				<div class="jumbotron">
				  <div class="container">
				    <h1 class="display-4">Selamat Datang Siswa: <?php echo $_SESSION['username']?></h1>
				    <p class="lead">Di bawah ini adalah data-data yang sudah Anda berikan pada sistem, Anda dapat mengeditnya, sesuai dengan fakta saat ini. Untuk info lebih lanjut hubungi <a href="mailto: ony@gmail.com">Admin Satu</a>.</p><hr><br>
				  </div>
				</div>
				
				<?php
					include "koneksi.php";

					$id = $_SESSION['username'];
					$query = "SELECT*FROM siswa WHERE no='$id'";
					$sql = "SELECT*FROM userSekolah WHERE username='$id'";
					$result = mysqli_query($connect, $query);
					$res = mysqli_query($connect, $sql);
				?>
				<form method="POST" action="aksiUpdate.php" onsubmit="return validateForm()" id="edit">
					<?php
						while($row=mysqli_fetch_array($result)){
					?>

					<label class="labelKet">No. UN SMP/MTs/Sederajat </label>
					<input type="number" name="no" placeholder="Masukkan No. UN SMP/MTs/Sederajat Anda" value="<?php echo $row['no'];?>">

					<label class="labelKet">Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" value="<?php echo $row['nama'];?>">

					<label class="labelKet">Jenis Kelamin</label>
					<input type="radio" name="jenisKelamin" value="L" <?php echo ($row['jenisKelamin'] == "L") ?  "checked" : "" ;  ?>>
					<label for="L" class="labelRadio">Laki-laki</label><br>
					<input type="radio" name="jenisKelamin" value="P" style="margin-left:231px;" <?php echo ($row['jenisKelamin'] == "P") ?  "checked" : "" ;  ?>>
					<label for="P" class="labelRadio">Perempuan</label><br>
					<input type="hidden" name="gender" value="">


					<label class="labelKet">Tempat Lahir</label>
					<input type="text" name="tempat" placeholder="Masukkan Tempat Lahir Anda" value="<?php echo $row['tempat'];?>">

					<label class="labelKet">Tanggal Lahir</label>
					<input type="date" name="tanggal" value="<?php echo $row['tanggal'];?>">

					<label class="labelKet">Nama OrangTua/Wali</label>
					<input type="text" name="namaOrtu" placeholder="Masukkan Nama OrangTua/Wali Anda" value="<?php echo $row['namaOrtu'];?>">

					<p class="pArea">
						<label for="area" class="labelKet">Alamat</label>
						<textarea id="area" name="alamat" placeholder="Masukkan Alamat Anda sesuai KK / KTP / Surat Ket. Domisili min. 6 bln Ortu/Wali murid calon siswa"><?php echo $row['alamat'];?></textarea>
					</p>

					<label class="labelKet">Kota/Kabupaten </label>
					<input type="text" name="kota" placeholder="Masukkan Kota/Kabupaten Anda" value="<?php echo $row['kota'];?>">

					<label class="labelKet">Asal Sekolah </label>
					<input type="text" name="asalSekolah" placeholder="Masukkan Asal Sekolah Anda" value="<?php echo $row['asalSekolah'];?>">

					<label class="labelKet">Agama </label>
					<input type="text" name="agama" placeholder="Masukkan Agama Anda" value="<?php echo $row['agama'];?>">

					<input type="submit" name="submit" value="Submit">
					<?php
						}
					?>
				</form>
				<p> Untuk logout, silahkan klik link berikut ini: <a href="logout.php">Logout</a></p>
			</div>
		</body>
		</html>
<?php
	}
?>