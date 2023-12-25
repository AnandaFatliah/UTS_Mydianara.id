<?php
if (!defined('INDEX')) die("");

if (file_exists("images/$_GET[foto]")) unlink("images/$_GET[foto]");

$query = mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'");

if ($query) {
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<meta http-equiv='refresh' content='0; url=?hal=pegawai'>";
} else {
    echo "<script>alert('Tidak dapat menghapus data')</script>";
    echo mysqli_connect_error();
}
?>
