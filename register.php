<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="container">
      <h2 style="text-align:center;color:#FFA500;">Registration Form</h2>
      <form action="" class="form" method="post" id="form1">
      <div class="input-box">
          <label>Username</label>
          <input type="text" id="username" name="username" placeholder="enter username" required />
      </div></br>
      <div class="pass" style="margin-top:10px;">
          <label>Password</label>
          <input style="border-bottom: 1px solid black; "type="password" id="password" name="password" placeholder="enter password" required />
        </div>
        <div class="button">
        <input name="register" type="submit" id="register" value="DAFTAR">
        </div>
        <div class="signup">
        Do you have an account? <a href="?p=login">Sign In</a>
    </div>
      </form>

      <?php
    if($_POST["register"]){
      if(!empty($_POST["username"]) and !empty($_POST["password"])){

        $sqlsis = mysqli_query($kon,"INSERT INTO siswa (username, password, tgl_regis) VALUES ('$_POST[username]', '$_POST[password]', NOW())");
        
     if($sqlsis){
      echo "Data Berhasil Disimpan";
  } else {
      echo "Gagal Menyimpan";
  }
  echo "<META HTTP-EQUIV='Refresh' content='1; URL=?p=login'>";
} else {
  echo "Isi Data dengan Lengkap";
}
}

?>

    </section>
  </body>
</html>