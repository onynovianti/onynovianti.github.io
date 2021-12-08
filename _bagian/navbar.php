	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	    <div class="container-fluid">
	        <a class="navbar-brand" href="#">
	            <img src="img/sma.png" width="50" height="50">
	        </a>
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	                <li class="nav-item">
	                    <a class="nav-link active" aria-current="page" href="http://localhost/dasarweb/praktik_php/OnyNovianti/">Home</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="http://localhost/dasarweb/praktik_php/OnyNovianti/tidakada.php">Berita</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="http://localhost/dasarweb/praktik_php/OnyNovianti/tidakada.php">Adiwiyata</a>
	                </li>
	                <li class="nav-item dropdown">
	                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About Us </a>
	                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	                        <li>
	                            <a class="dropdown-item" href="http://localhost/dasarweb/praktik_php/OnyNovianti/tidakada.php">Profil Sekolah</a>
	                        </li>
	                        <li>
	                            <a class="dropdown-item" href="http://localhost/dasarweb/praktik_php/OnyNovianti/tidakada.php">Galeri</a>
	                        </li>
	                        <li>
	                            <hr class="dropdown-divider">
	                        </li>
	                        <li>
	                            <a class="dropdown-item" href="http://localhost/dasarweb/praktik_php/OnyNovianti/tidakada.php">Frequently Ask Question</a>
	                        </li>
	                    </ul>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="http://localhost/dasarweb/praktik_php/OnyNovianti/tidakada.php">Hubungi Kami</a>
	                </li>
	            </ul>
	            <form class="d-flex">
	                <button class="btn btn-outline-success" type="submit" onclick="location.href='http://localhost/dasarweb/praktik_php/OnyNovianti/halamanLogin.php'" <?php echo ($dis == true) ?  "disabled" : "" ;  ?>>Login</button>
	            </form>
	        </div>
	    </div>
	</nav>