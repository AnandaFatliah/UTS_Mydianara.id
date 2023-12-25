<?php
if (!defined('INDEX')) die("");
?>

<style>
    .circle-img {
        border-radius: 50%;
        overflow: hidden;
        width: 100px; /* Sesuaikan ukuran sesuai kebutuhan */
        height: 100px; /* Sesuaikan ukuran sesuai kebutuhan */
    }

    .circle-img img {
        width: 100%;
        height: auto;
    }
</style>

<h2 class="judul">Data Pegawai</h2>
<a class="tombol" href="?hal=pegawai_tambah">Tambah</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Jabatan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($conn, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan = jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
        $no = 0;

        while ($data = mysqli_fetch_array($query)) {
            $no++;
        ?>
            <tr>
                <td><?= $no ?></td>
                <td>
                    <div class="circle-img">
                        <img src="images/<?= $data['foto'] ?>" width="100">
                    </div>
                </td>
                <td><?= $data['nama_pegawai'] ?></td>
                <td><?= $data['jenis_kelamin'] ?></td>
                <td><?= $data['tgl_lahir'] ?></td>
                <td><?= $data['nama_jabatan'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td>
                    <a class="tombol edit" href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>">Edit</a>
                    <a class="tombol hapus" href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>&foto=<?= $data['foto'] ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
