<?php
if (!defined('INDEX')) die("");

$halaman = isset($_GET['hal']) ? $_GET['hal'] : "dashboard";

// Mendaftar halaman-halaman yang valid
$validHalaman = array("dashboard", "pegawai", "pegawai_tambah", "pegawai_insert","pegawai_hapus", "pegawai_update", "pegawai_edit","jabatan", "jabatan_edit", "jabatan_hapus", "jabatan_insert", "jabatan_tambah", "jabatan_update");

// Memeriksa apakah halaman yang diminta termasuk dalam daftar halaman yang valid
if (in_array($halaman, $validHalaman)) {
    include "content/$halaman.php";
} else {
    // Halaman default jika yang diminta tidak valid
    include "content/default.php";
}
?>
