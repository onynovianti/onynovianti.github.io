<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Siswa Baru</title>
	<link rel="stylesheet" type="text/css" href="styleFormRegistrasi.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<script src="jquery-3.6.0.js"></script>
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
	<div class="container">
		<div class="header">
			<img src="img/sma.png" width="100" height="100">
			<h2> FORMULIR PENDAFTARAN CALON SISWA BARU SMA </h2><hr>
		</div>
		<div style="text-align: center;">
			<a href="halamanLogin.php">Sudah mendaftar? Login disini</a>
		</div>
		<form method="POST" action="aksiFormRegistrasi.php" onsubmit="return validateForm()">
			<label class="labelKet">No. UN SMP/MTs/Sederajat </label>
			<input type="number" name="no" placeholder="Masukkan No. UN SMP/MTs/Sederajat Anda">

			<label class="labelKet">Nama Lengkap</label>
			<input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda">

			<label class="labelKet">Jenis Kelamin</label>
			<input type="radio" name="jenisKelamin" value="L">
			<label for="L" class="labelRadio">Laki-laki</label><br>
			<input type="radio" name="jenisKelamin" value="P" style="margin-left:263px;">
			<label for="P" class="labelRadio">Perempuan</label><br>
			<input type="hidden" name="gender" value="">


			<label class="labelKet">Tempat Lahir</label>
			<input type="text" name="tempat" placeholder="Masukkan Tempat Lahir Anda">

			<label class="labelKet">Tanggal Lahir</label>
			<input type="date" name="tanggal">

			<label class="labelKet">Nama OrangTua/Wali</label>
			<input type="text" name="namaOrtu" placeholder="Masukkan Nama OrangTua/Wali Anda">

			<p class="pArea">
				<label for="area" class="labelKet">Alamat</label>
				<textarea id="area" name="alamat" placeholder="Masukkan Alamat Anda sesuai KK / KTP / Surat Ket. Domisili min. 6 bln Ortu/Wali murid calon siswa"></textarea>
			</p>

			<label class="labelKet">Kota/Kabupaten </label>
			<input type="text" name="kota" placeholder="Masukkan Kota/Kabupaten Anda">

			<label class="labelKet">Asal Sekolah </label>
			<input type="text" name="asalSekolah" placeholder="Masukkan Asal Sekolah Anda">

			<label class="labelKet">Agama </label>
			<input type="text" name="agama" placeholder="Masukkan Agama Anda">

			<label class="labelKet">Password </label>
			<input type="password" name="password" placeholder="Masukkan Password Anda">

			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
</body>
</html>