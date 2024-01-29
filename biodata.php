
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asal Sekolah</title>
</head>
<body>

    <div class="biodata">
        <p style="padding-bottom:10px;font-weight:bold">Biodata Lengkap</p>
        <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
        <div class="daftar"><label style="margin-right:121px;">Nama Lengkap</label>
            : <input name="nama_lengkap" type="text" id="nama_lengkap" placeholder="nama lengkap"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:70px;">Tempat/Tanggal Lahir</label>
            : <input style="width:520px;" name="tmp_lahir" type="text" id="tmp_lahir" placeholder="tempat lahir">
            <input style="width:400px;" name="tgl_lahir" type="date" id="tgl_lahir"></br></br></br>
        </div>
<label style="margin-right:124px;">Jenis Kelamin</label>
            : <input name="jk" type="radio" value="L" />
            Laki-Laki 
            <input name="jk" type="radio" value="P" />
            Perempuan<br><br>

        <div class="daftar"><label style="margin-right:183px;">Agama</label>
        : <input name="agama" type="text" id="agama" placeholder="agama"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:140px;">Provinsi Asal</label>
            : <input name="prov_asal" type="text" id="prov_asal" placeholder="provinsi asal"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:120px;">Kabupaten Asal</label>
            :<input name="kab_asal" type="text" id="kab_asal" placeholder="kabupaten asal"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:115px;">Alamat Lengkap</label>
            :<input name="almt_lengkap" type="text" id="almt_lengkap" placeholder="alamat lengkap"></br></br>
        </div>
        <div class="daftar">
        <p style="font-weight:bold">Biodata Orang Tua/Wali</p></br>
        <label style="margin-right:152px;">Nama Ayah</label>
            :<input name="nama_ayah" type="text" id="nama_ayah" placeholder="nama ayah"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:164px;">Nama Ibu</label>
            : <input name="nama_ibu" type="text" id="nama_ibu" placeholder="nama ibu"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:111px;">Pendidikan Ayah</label>
            :<input name="pend_ayah" type="text" id="pend_ayah" placeholder="pendidikan ayah"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:124px;">Pendidikan Ibu</label>
            :<input name="pend_ibu" type="text" id="pend_ibu" placeholder="pendidikan ibu"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:120px;">Pekerjaan Ayah</label>
            :<input name="kerja_ayah" type="text" id="kerja_ayah" placeholder="pekerjaan ayah"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:134px;">Pekerjaan Ibu</label>
            : <input name="kerja_ibu" type="text" id="kerja_ibu" placeholder="pekerjaan ibu"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:24px;">Penghasilan Orang Tua/Wali</label>
            :<input name="hasil-wali" type="text" id="hasil_wali" placeholder="penghasilan orang tua/wali"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:87px;">Jumlah Tanggungan</label>
            :<input name="jml_tanggungan" type="text" id="jml_tanggungan" placeholder="jumlah tanggungan"></br></br>
        </div>
       <input class="tombol" name="kembali" type="submit" id="kembali" value="Kembali">
        <input class="tombol" name="simpan" type="submit" id="simpan" value="Selanjutnya">
    </div>
</form>
<?php
        if (isset($_POST["simpan"])) {
                                    $sqlb = mysqli_query($kon,"insert into biodata (idbiodata, idsiswa,  nama_lengkap, tmp_lahir, tgl_lahir, jk, agama, prov_asal, kab_asal, almt_lengkap, nama_ayah, nama_ibu, pend_ayah, pend_ibu, kerja_ayah, kerja_ibu, hasil_wali, jml_tanggungan) values ('$rb[idbiodata]','$rsis[idsiswa]', '$_POST[nama_lengkap]','$_POST[tmp_lahir]', '$_POST[tgl_lahir]', '$_POST[jk]', '$_POST[agama]', '$_POST[prov_asal]', '$_POST[kab_asal]', '$_POST[almt_lengkap]','$_POST[nama_ayah]', '$_POST[nama_ibu]', '$_POST[pend_ayah]', '$_POST[pend_ibu]', '$_POST[kerja_ayah]', '$_POST[kerja_ibu]', '$_POST[hasil_wali]', '$_POST[jml_tanggungan]')");
        
                if($sqlb){
                    echo "Data Berhasil Disimpan";
                } else {
                    echo "Gagal Menyimpan";
                }
                echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=nilai'>";
        }
        if (isset($_POST["kembali"])) {
            echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=sekolah'>";
        }

        ?>
</body>
</html>