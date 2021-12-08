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
		$(document).ready(function(){
			$("input[type=radio]").change(function(){
				if(this.value == "L"){
					$('input[name="gender"]').val('Laki-Laki')
				}else if(this.value == "P"){
					$('input[name="gender"]').val('Perempuan')
				}
			});
		});
<script>