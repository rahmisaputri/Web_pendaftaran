
<body>
    <div class="sekolah">
        <p style="padding-bottom:10px;font-weight:bold">Asal Sekolah</p>
        <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
        <div class="daftar"><label style="margin-right:121px;">Provinsi</label>
            : <input name="prov" type="text" id="prov" placeholder="provinsi"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:109px;">Kab./Kota</label>
            : <input name="kab" type="text" id="kab" placeholder="kabupaten/kota"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:84px;">Jenis Sekolah</label>
            : <input name="jenis_sekolah" type="text" id="jenis_sekolah" placeholder="jenis sekolah"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:124px;">Jurusan</label>
            : <input name="jurusan" type="text" id="jurusan" placeholder="jurusan"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:77px;">Nama Sekolah</label>
            :<input name="nama_sekolah" type="text" id="nama_sekolah" placeholder="nama sekolah"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:49px;">No. Ujian Nasional</label>
            :<input name="no_un" type="text" id="no_un" placeholder="no. ujian nasional"></br></br>
        </div>
        <div class="daftar"><label style="margin-right:112px;">No. Ijazah</label>
            :<input name="no_ijazah" type="text" id="no_ijazah" placeholder="no. ijazah"></br></br>
        </div>
        <div class="daftar">
        <label style="margin-right:112px;">Foto 3x4</label>    
            : <input name="past_foto" type="file" id="past_foto"></br></br>
        </div>
        <input class="tombol" name="simpan" type="submit" id="simpan" value="Selanjutnya">
    </div>
</form>
<?php
        if (isset($_POST["simpan"])) {
            if(!empty($_POST["prov"]) and !empty($_POST["kab"]) and !empty($_POST["jenis_sekolah"]) and !empty($_POST["jurusan"]) and !empty($_POST["nama_sekolah"]) and !empty($_POST["no_un"]) and !empty($_POST["no_ijazah"])){
                $nmpast_foto = $_FILES["past_foto"]["name"];
                $lokpast_foto = $_FILES["past_foto"]["tmp_name"];
                if(!empty($lokpast_foto)){
                    move_uploaded_file($lokpast_foto, "../past_foto/$nmpast_foto");
                }    
                $sqlf = mysqli_query($kon,"insert into sekolah (idsekolah, idsiswa, prov, kab, jenis_sekolah, jurusan, nama_sekolah, no_un, no_ijazah, past_foto) values ('$rs[idsekolah]','$rsis[idsiswa]', '$_POST[prov]','$_POST[kab]', '$_POST[jenis_sekolah]', '$_POST[jurusan]', '$_POST[nama_sekolah]', '$_POST[no_un]', '$_POST[no_ijazah]', '$nmpast_foto')");
        
                if($sqlf){
                    echo "Data Berhasil Disimpan";
                } else {
                    echo "Gagal Menyimpan";
                }
                echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=biodata'>";
            } else {
                echo "Isi Data dengan Lengkap";
            }
        }
        ?>
</body>
</html>