<?php
 if(!defined('INDEX')) die("");
 $halaman = array("dashboard", "jabatan", "jabatan_edit", "jabatan_hapus", "jabatan_insert", "jabatan_tambah", "jabatan_update");
 if(isset($_GET['hal'])) $hal = $_GET['hal'];
 else $hal = "dashboard";
 foreach($halaman as $h){
 if($hal == $h){
 include "content/$h.php";
 }
 }
?>