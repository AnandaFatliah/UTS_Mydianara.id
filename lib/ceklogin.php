<?php
 session_start();
 include "config.php";
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $data = mysqli_fetch_array($query);
    $nBaris = mysqli_num_rows($query);
    if($nBaris > 0){
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header('location: ../index.php');
    }else{
    echo "<script>alert('Login Gagal, Silahkan Coba Lagi')</script>";
    echo "<meta http-equiv='refresh' content='1; url=login.php'>";
 }
?>