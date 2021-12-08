		<?php
			include "koneksi.php";

			$id = $_SESSION['username'];
			$query = "SELECT*FROM siswa WHERE no='$id'";
			$sql = "SELECT*FROM userSekolah WHERE username='$id'";
			$result = mysqli_query($connect, $query);
			$res = mysqli_query($connect, $sql);
		?>
		<form method="POST" action="aksiUpdate.php" onsubmit="return validateForm()">
			<?php
				while($row=mysqli_fetch_array($result)){
			?>

			<label class="labelKet">No. UN SMP/MTs/Sederajat </label>
			<input type="number" name="no" placeholder="Masukkan No. UN SMP/MTs/Sederajat Anda" value="<?php echo $row['no'];?>" disabled>

			<label class="labelKet">Nama Lengkap</label>
			<input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" value="<?php echo $row['nama'];?>">

			<label class="labelKet">Jenis Kelamin</label>
			<input type="radio" name="jenisKelamin" value="L">
			<label for="L" class="labelRadio">Laki-laki</label><br>
			<input type="radio" name="jenisKelamin" value="P" style="margin-left:263px;">
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