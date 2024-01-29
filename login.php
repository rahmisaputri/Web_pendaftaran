<?php
include 'koneksi.php';
?>
<section class="container">
        <form name="form1" method="post" action="">
            <h2 style="text-align:center;color:#FFA500;">Form Login Siswa</h2>
            <p style="text-align:center;color:#444;">Silahkan Login</p>
            <div class="user">
          <label>Username</label></br>
          <input type="text" id="username" name="username" placeholder="enter username" required />
      </div></br>
            <div class="pass" style="margin-top:10px;">
                <label>Password</label></br>
                <input style="border-bottom: 1px solid black;" name="password" type="text" id="password" placeholder="Password"></br>
            </div>
            <div class="button">
                <input name="login" type="submit" id="login" value="Login">
                </div>
            </form>

        <?php
        $useradm=$_POST['username'];
        $passadm=$_POST['password'];
        if ($_POST["login"]) {
            $sqlsis = mysqli_query($kon, "select * from siswa where username='$_POST[username]' and password='$_POST[password]'");
            $rsis = mysqli_fetch_array($sqlsis);
            $row = mysqli_num_rows($sqlsis);
            if ($row > 0) {
                session_start();
                $_SESSION["useradm"] = $rsis["username"];
                $_SESSION["passadm"] = $rsis["password"];
                echo "<div align='center'> Login Berhasil</div>";
            } else {
                echo "<div align='center'> Login Gagal</div>";
            }
            echo "<META HTTP-EQUIV='Refresh' content='1; URL=?p=sekolah'>";
        }
        ?>
    </section>