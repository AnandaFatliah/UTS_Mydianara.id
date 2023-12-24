<?php
session_start();
ob_start();
include "lib/config.php";



// masih error dari tombol login ke -> dashboard
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
    echo "<script>alert('Anda harus login terlebih dahulu')</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
} else {
    define('INDEX', true);
    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <title>Dashboard</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="style - copy.css">
        </head>
        <body>
            <header>
                Aplikasi Manajemen Pegawai
            </header>
            <div class="container">
                <aside>
                    <ul class="menu">
                        <li><a href="?hal=dashboard" class="aktif">Dashboard</a></li>
                        <li><a href="?hal=pegawai">Data Pegawai</a></li>
                        <li><a href="?hal=jabatan">Data Jabatan</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                    </ul>
                </aside>
                <section class="main">
                    <?php include "konten.php"; ?>
                </section>
            </div>
            <footer>
                Copyright &copy; 2023
            </footer>
        </body>
    </html>
    <?php
}
?>
