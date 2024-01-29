<?php
    session_start();
    include "koneksi.php";
$sqlsis = mysqli_query($kon, "select * from siswa where username='$_SESSION[useradm]' and password='$_SESSION[passadm]'");
    $rsis = mysqli_fetch_array($sqlsis);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Web Dengan PHP</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<div class="content">
		<header>
			<h1 class="judul">
				Universitas GunaDarma</h1>
			<h3 class="deskripsi">Selamat Datang Di Website Penerimaan Mahasiswa Baru</h3>
		</header>
<div class="menu">
		<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="<?php echo "?p=beranda"; ?>">Beranda</a></li>
    <li><a href="">Profil &dtrif;</a>
      <ul class="dropdown">
        <li><a href="<?php echo "?p=profil"; ?>">Profil</a></li>
        <li><a href="<?php echo "?p=fasilitas"; ?>">Fasilitas</a></li>
      </ul>
    </li>
    <li><a href="">Persyaratan &dtrif;</a>
	<ul class="dropdown">
        <li><a href="<?php echo "?p=persyaratan"; ?>">Persyaratan</a></li>
        <li><a href="<?php echo "?p=biaya"; ?>">Biaya Kuliah</a></li>
      </ul>
    </li>
	<li style="float:right;">
	<a href="">Login &dtrif;</a>
	<ul class="dropdown">
        <li><a href="<?php echo "?p=login"; ?>">Login</a></li>
        <li><a href="<?php echo "?p=logout"; ?>">Logout</a></li>
      </ul>
</li>
</ul>
</nav>
</div>

			<?php
				if ($_GET["p"] == "logout") {
					include "logout.php";
				} else if ($_GET["p"] == "profil") {
					include "profil.php";
				}else if ($_GET["p"] == "fasilitas") {
				include "fasilitas.php";
				}else if ($_GET["p"] == "biaya") {
				include "biaya.php";
				} else if ($_GET["p"] == "sekolah") {
				include "sekolah.php";
				} else if ($_GET["p"] == "biodata") {
				include "biodata.php";
			    } else if ($_GET["p"] == "nilai") {
				include "nilai.php";
				}else if ($_GET["p"] == "prodidetail") {
						include "prodidetail.php";
						} else if ($_GET["p"] == "register") {
					include "register.php";
					}  else if ($_GET["p"] == "persyaratan") {
						include "persyaratan.php";
						}else if ($_GET["p"] == "konfirmasi") {
						include "konfirmasi.php";
						} else if ($_GET["p"] == "daftar") {
						include "daftar.php";
						} else if ($_GET["p"] == "login") {
							include "login.php";
							}else {
				include "beranda.php";
				}
			?>
	</div>
	<div class="footer">
		<footer>
			<center><p>Copyright Rahmi Madiah Saputri | <script>document.write(new Date().getFullYear());</script> </p></center>
		</footer>
	</div>
</body>
</html>
<?php
