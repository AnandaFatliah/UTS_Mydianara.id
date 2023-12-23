<?php
 session_start();
 ob_start();

 if(isset($_GET['redirect'])) {
    // Jika ada, arahkan ke halaman yang ditentukan
    $redirect = $_GET['redirect'];
    header("Location: $redirect");
    exit();
 }
 include "lib/config.php";
 header("Location: main.html");
 exit();
 if(empty($_SESSION['username']) or empty($_SESSION['password'])){
 echo "<script>alert('Anda harus login terlebih dahulu')</script>";
 echo "<meta http-equiv='refresh' content='0; url=login.php'>";
 } else{
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