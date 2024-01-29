<div class ="card">
    <div class="kepalacard">Konfirmasi Pembayaran</div>
    <div class="isicard" style="text-align:center">
    <form method="get" action="" enctype="multipart/form-data">
        <div class="dh12">
            <input type="hidden" name="p" value="<?php echo "$_GET[p]"; ?>">
            <input type="hidden" name="idsekolah" value="<?php echo "$_GET[idsekolah]"; ?>">
            <input type="text" name="nodaftar" placeholder="Masukkan No Order(Tanpa #)" value="<?php echo "$_GET[nodaftar]"; ?>">
            <br><input type="submit" value="Cari No. Order">
</div>

<?php
$kon = mysqli_connect($host, $user, $pass, $db);
$sql = "SELECT * FROM sekolah INNER JOIN biodata  ON sekolah.idsekolah = biodata.idsekolah INNER JOIN nilai ON biodata.idbiodata = nilai.idbiodata";
$result = mysqli_query($kon, $sql);
?>

<?php
        if(mysqli_num_rows($result))
        {
            while($row = mysqli_fetch_array($result))
            {
        ?>

    <label>Provinsi :</label>
    <input name="nama" type="text" value="<?php echo "$row[prov]"; ?>"></br>
    <label>Kab/Kota :</label>
    <input name="nama" type="text" value="<?php echo "$row[kab]"; ?>"></br>
    <label>Asal Sekolah :</label>
    <input name="nama" type="text" value="<?php echo "$row[asal_sekolah]"; ?>"></br>
    <label>Jurusan :</label>
    <input name="nama" type="text" value="<?php echo "$row[jurusan]"; ?>"></br>
    <label>No Ijazah :</label>
    <input name="nama" type="text" value="<?php echo "$row[no_ijazah]"; ?>"></br>
    <label>No UN :</label>
    <input name="nama" type="text" value="<?php echo "$row[no_un]"; ?>"></br>

    <h2>Data Pribadi</h2>
    <label>Nama Lengkap :</label>
    <input name="nama" type="text" value="<?php echo "$row[nama_lengkap]"; ?>"></br>
    <label>Tempat/Tgl Lahir :</label>
    <input name="nama" type="text" value="<?php echo "$row[tmp_lahir];$rb[tgl_lahir]"; ?>"></br>
    <label>Jenis Kelamin :</label>
    <input name="nama" type="text" value="<?php echo "$row[jk]"; ?>"></br>
    <label>Agama :</label>
    <input name="nama" type="text" value="<?php echo "$row[agama]"; ?>"></br>
    <label>Provinsi Asal :</label>
    <input name="nama" type="text" value="<?php echo "$row[prov_asal]"; ?>"></br>
    <label>Kab/Kota Asal :</label>
    <input name="nama" type="text" value="<?php echo "$row[kab_asal]"; ?>"></br>
    <label>Alamat Lengkap :</label>
    <input name="nama" type="text" value="<?php echo "$row[almt_lengkap]"; ?>"></br>
    <label>Nama Ayah :</label>
    <input name="nama" type="text" value="<?php echo "$row[nama_ayah]"; ?>"></br>
    <label>Nama Ibu :</label>
    <input name="nama" type="text" value="<?php echo "$row[nama_ibu]"; ?>"></br>
    <label>endidikan Ayah :</label>
    <input name="nama" type="text" value="<?php echo "$row[pend_ayah]"; ?>"></br>
    <label>Pendidikan Ibu :</label>
    <input name="nama" type="text" value="<?php echo "$row[pend_ibu]"; ?>"></br>
    <label>Pekerjaan Ayah :</label>
    <input name="nama" type="text" value="<?php echo "$row[kerja_ayah]"; ?>"></br>
    <label>Pekerjaan Ibu :</label>
    <input name="nama" type="text" value="<?php echo "$row[kerja_ibu]"; ?>"></br>
    <label>Penghasilan Orang Tua/Wali :</label>
    <input name="nama" type="text" value="<?php echo "$rrow[hasil_wali]"; ?>"></br>
    <label>Jumlah Tanggungan :</label>
    <input name="nama" type="text" value="<?php echo "$row[jml_tanggungan]"; ?>"></br>

    <h2>Data Nilai</h2>
    <label>Nilai Rata-rata Bahasa Indonesia :</label>
    <input name="nama" type="text" value="<?php echo "$row[bindo]"; ?>"></br>
    <label>Nilai Rata-rata Bahasa Matematika :</label>
    <input name="nama" type="text" value="<?php echo "$row[mtk]"; ?>"></br>
    <label>Nilai Rata-rata Bahasa Inggris :</label>
    <input name="nama" type="text" value="<?php echo "$row[bing]"; ?>"></br>

   <?php
            }
        }
    ?>

</div>
    <input class="tombol" name="konfirmasi" type="submit" id="konfirmasi" value="Selanjutnya">
</form>