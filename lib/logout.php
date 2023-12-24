<?php
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke main.html setelah logout
header("Location: main.html");
exit();
?>
