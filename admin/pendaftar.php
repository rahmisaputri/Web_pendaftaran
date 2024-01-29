<body>
<div class="content">
<h2>Data Pendaftar</h2>
		<div class="jarak">
					<div class="jarak">
<?php
$no=1;
$kon = mysqli_connect($host, $user, $pass, $db);
$sql = "SELECT * FROM siswa INNER JOIN daftar ON siswa.idsiswa = daftar.idsiswa INNER JOIN biodata ON siswa.idsiswa = biodata.idsiswa INNER JOIN sekolah ON siswa.idsiswa = sekolah.idsiswa INNER JOIN nilai ON siswa.idsiswa = nilai.idsiswa";
$result = mysqli_query($kon, $sql);
?>
<div class="card">
<?php
        if(mysqli_num_rows($result))
        {
            while($row = mysqli_fetch_array($result))
            {
        ?>

<table style="margin-top:20px;margin-bottom:20px;">
    <thead>
    <tr>
        <th style="background-color:#FFD700;padding-left:10px;padding-right:10px;">No</th>
        <th style="background-color:#FFD700;margin-left:10px;">Kode Pendaftaran</th>
        <th style="background-color:#FFD700;margin-left:10px;">Biodata</th>
        <th style="background-color:#FFD700;margin-left:10px;">Data Orang Tua</th>
        <th style="background-color:#FFD700;margin-left:10px;">Data Sekolah</th>
        <th style="background-color:#FFD700;margin-left:10px;">Nilai Pendaftar</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="padding-left:15px;"><?php echo $no++ ?>
        </td>
        <td style="width:12pc;padding-left:30px">
            Kode Pendaftar : </br>
            <?php echo "$row[nodaftar]"; ?></br>
            Tanggal Daftar :  </br>
            <?php echo "$row[tgldaftar]"; ?></br>
        </td>
        <td style="width:22pc;padding-left:30px">
            Nama Lengkap : <?php echo "$row[nama_lengkap]"; ?></br>
            Tempat/Tgl Lahir :<?php echo "$row[tmp_lahir];$rb[tgl_lahir]"; ?></br>
            Jenis Kelamin :<?php echo "$row[jk]"; ?></br>
            Alamat Lengkap :<?php echo "$row[almt_lengkap]"; ?></br>
        </td>
        <td style="width:17pc;padding-left:30px">
            Nama Ayah :<?php echo "$row[nama_ayah]"; ?></br>
            Nama Ibu :<?php echo "$row[nama_ibu]"; ?></br>
            Pekerjaan Ayah :<?php echo "$row[kerja_ayah]"; ?></br>
            Pekerjaan Ibu :<?php echo "$row[kerja_ibu]"; ?></br>
            Jumlah Tanggungan :<?php echo "$row[jml_tanggungan]"; ?></br>
        </td>
        <td style="width:13pc;padding-left:30px">
            Asal Sekolah :<?php echo "$row[nama_sekolah]"; ?></br>
            Jurusan :<?php echo "$row[jurusan]"; ?></br>
            No Ijazah :<?php echo "$row[no_ijazah]"; ?></br>
            No UN :<?php echo "$row[no_un]"; ?></br>
        </td>
        <td style="width:20pc;padding-left:30px">
            Nilai Bahasa Indonesia :<?php echo "$row[bindo]"; ?></br>
            Nilai Bahasa Matematika :<?php echo "$row[mtk]"; ?></br>
            Nilai Bahasa Inggris :<?php echo "$row[bing]"; ?></br>
        </td>
        </tr>
        </tbody>
</table>

   <?php
            }
        }
    ?>
				</div>
			</div>
		</div>
        </body>