<?php
session_start();
ob_start();
include "lib/config.php";

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
            <link rel="stylesheet" href="style2.css">
            <link rel="icon" href="Resource/Mydianara.id.png" type="image/png" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-azqD27eM1e+Rf5Xz1Ml5l5tB0pNmkVpFExY5+TDIi6Uw6lxF/01vHbSm74gSmSx5UOE+MwlcvjGcoQ41Bf8qow==" crossorigin="anonymous" />
        </head>
        <body>
            <header>
                Aplikasi Manajemen Pegawai Mydianara
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
