<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Pegawai</h2>
<form action="?hal=pegawai_update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">

    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" id="foto" name="foto">
            <img src="images/<?= $data['foto'] ?>" width="100">
        </div>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama" value="<?= $data['nama_pegawai'] ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <div class="input">
            <input type="radio" id="jk" name="jk" value="L" <?= ($data['jenis_kelamin'] == "L") ? "checked" : "" ?>> Laki-laki
            <input type="radio" id="jk" name="jk" value="P" <?= ($data['jenis_kelamin'] == "P") ? "checked" : "" ?>> Perempuan
        </div>
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input">
            <input type="date" id="tanggal" name="tanggal" value="<?= $data['tgl_lahir'] ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select id="jabatan" name="jabatan">
                <option value="">--Pilih Jabatan--</option>
                <?php
                $queryjabatan = mysqli_query($conn, "SELECT * FROM jabatan");
                while ($j = mysqli_fetch_array($queryjabatan)) {
                    echo "<option value='$j[id_jabatan]' " . (($j['id_jabatan'] == $data['id_jabatan']) ? "selected" : "") . ">$j[nama_jabatan]</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea style="width: 100%" rows="5" id="keterangan" name="keterangan"><?= $data['keterangan'] ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset" onclick="history.back()">
    </div>
</form>
