<?php
 if (!defined('INDEX')) die("");
 $query = mysqli_query($conn, "DELETE FROM jabatan WHERE
id_jabatan='$_GET[id]'");

 if($query){
 echo "<script>alert('Data berhasil dihapus')</script>";
 echo "<meta http-equiv='refresh' content='0; url=?hal=jabatan'>";
 } else{
 echo "<script>alert('Tidak dapat menghapus data')</script>";
 echo mysqli_connect_error();
 }
?>