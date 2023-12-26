<?php
if (!defined('INDEX')) die("");
?>

<div style="text-align: center; margin-bottom: 20px;">
    <h1 style="color: #776B5D; font-size: 30px; margin-bottom: 10px;">Selamat Datang di Aplikasi Manajemen Pegawai Mydianara</h1>
    <h3 style="color: #555; font-size: 18px;">Anda login sebagai Administrator</h3>
</div>

<div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap;">
    <div style="flex: 1; margin-right: 20px; max-width: 400px;">
        <div style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h2 style="color: #776B5D; margin-bottom: 15px;">Jumlah Pegawai</h2>
            <?php
            $queryPegawai = mysqli_query($conn, "SELECT COUNT(*) AS total_pegawai FROM pegawai");
            $dataPegawai = mysqli_fetch_assoc($queryPegawai);
            ?>
            <p style="font-size: 24px; font-weight: bold; margin-bottom: 0;"><?= $dataPegawai['total_pegawai'] ?></p>
        </div>
    </div>

    <div style="flex: 1; max-width: 400px;">
        <div style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h2 style="color: #776B5D; margin-bottom: 15px;">Jumlah Jabatan</h2>
            <?php
            $queryJabatan = mysqli_query($conn, "SELECT COUNT(*) AS total_jabatan FROM jabatan");
            $dataJabatan = mysqli_fetch_assoc($queryJabatan);
            ?>
            <p style="font-size: 24px; font-weight: bold; margin-bottom: 0;"><?= $dataJabatan['total_jabatan'] ?></p>
        </div>
    </div>
</div>

