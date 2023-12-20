<?php
 if (!defined('INDEX')) die("");
 $query = mysqli_query($conn, "INSERT INTO jabatan SET nama_jabatan =
'$_POST[nama]'");
 if($query){
 echo "<script>alert('Data berhasil disimpan')</script>";
 echo "<meta http-equiv='refresh' content='0; url=?hal=jabatan'>";
 } else{
 echo "<script>alert('Tidak dapat menyimpan data')</script>";
 echo mysqli_connect_error();
 }
?>