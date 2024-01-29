
<style>
    .footer{
	width: 100%;
	margin: 10px auto;
}
footer{
	background-color: #FFA500;
	padding: 4px 6px;
	border-radius: 5px;
	border: 1px solid #f0f0f0;
	margin-bottom: 10px;
	font-size: 14px;
}
</style><?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Administrator Universitas</title>
</head>

<body>

    <?php
    if (!empty($_SESSION["useradm"]) && !empty($_SESSION["passadm"])) {
        $sqla = mysqli_query($kon, "select * from admin where username='$_SESSION[useradm]' and password='$_SESSION[passadm]'");
        $ra = mysqli_fetch_array($sqla);
    ?>

        <div class="grid">
            <div class="dh12">
                <div class="container1">
                      <a href="<?php echo "?p=beranda"; ?>" style="">Admin Universitas</a>
                </div>
            </div>
        </div>


        <div class="grid">
            <div class="dh12">
                <div class="container2">
                    <?php
               if ($_GET["p"] == "logout") {
               		include "logout.php";
               } else if ($_GET["p"] == "fasilitas") {
               		include "fasilitas.php";
               } else if ($_GET["p"] == "fasilitasadd") {
               		include "fasilitasadd.php";
               } else if ($_GET["p"] == "fasilitasedit") {
                    include "fasilitasedit.php";
               } else if ($_GET["p"] == "fasilitasdel") {
                    include "fasilitasdel.php";
			   } else if ($_GET["p"] == "biaya") {
                include "biaya.php";
                } else if ($_GET["p"] == "biayaadd") {
                        include "biayaadd.php";
                } else if ($_GET["p"] == "biayaedit") {
                    include "biayaedit.php";
                }else if ($_GET["p"] == "prodi") {
                    include "prodi.php";
                } else if ($_GET["p"] == "prodiadd") {
                 include "prodiadd.php";
                 }else if ($_GET["p"] == "prodiedit") {
                include "prodiedit.php";
                }else if ($_GET["p"] == "pendaftar") {
                    include "pendaftar.php";
                }else {
                    include "beranda.php";
               }
            ?>
         </div>
         </div>
         </div>
         <div>

         </div>
<i>catatan : Untuk kembali beranda klik Admin Universitas</i>
<div class="footer">
		<footer>
			<center><p>Copyright Rahmi Madiah Saputri | <script>document.write(new Date().getFullYear());</script> </p></center>
		</footer>
	</div>

    <?php
    } else {
        include "login.php";
    }
    ?>

</body>
</html>