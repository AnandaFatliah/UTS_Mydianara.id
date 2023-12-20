<?php
 if (!defined('INDEX')) die("");
 $query = mysqli_query($conn, "UPDATE jabatan SET
 nama_jabatan='$_POST[nama]' WHERE id_jabatan='$_POST[id]'");

 if($query){
 echo "<script>alert('Data berhasil diubah')</script>";
 echo "<meta http-equiv='refresh' content='0; url=?hal=jabatan'>";
 } else{
 echo "<script>alert('Tidak dapat mengubah data')</script>";
 echo mysqli_connect_error();
 }
?>