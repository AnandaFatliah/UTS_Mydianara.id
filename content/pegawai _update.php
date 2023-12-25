<?php
if (!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];
$error = "";

if ($foto == "") {
    $query = mysqli_query($conn, "UPDATE pegawai SET
        nama_pegawai = '$_POST[nama]',
        jenis_kelamin = '$_POST[jk]',
        tgl_lahir = '$_POST[tanggal]',
        id_jabatan = '$_POST[jabatan]',
        keterangan = '$_POST[keterangan]'
        WHERE id_pegawai='$_POST[id]'");
}

if ($tipefile != "image/jpeg" && $tipefile != "image/jpg" && $tipefile != "image/png") {
    $error = "Tipe file tidak sesuai. Harap upload file gambar (JPG, JPEG, PNG).";
} elseif ($ukuranfile >= 1048576) {
    $error = "Ukuran file lebih dari 1 MB. Harap pilih file yang lebih kecil.";
}

$query = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai='$_POST[id]'");
$data = mysqli_fetch_array($query);

if (file_exists("images/$data[foto]")) unlink("images/$data[foto]");

$ext = strrchr($foto, '.');
$foto = basename($foto, $ext) . time() . $ext;
move_uploaded_file($lokasi, "images/" . $foto);

$query = mysqli_query($conn, "UPDATE pegawai SET
    foto = '$foto',
    nama_pegawai = '$_POST[nama]',
    jenis_kelamin = '$_POST[jk]',
    tgl_lahir = '$_POST[tanggal]',
    id_jabatan = '$_POST[jabatan]',
    keterangan = '$_POST[keterangan]'
    WHERE id_pegawai='$_POST[id]'");

if ($error != "") {
    echo "<script>alert('$error')</script>";
    echo "<meta http-equiv='refresh' content='0; url=?hal=pegawai_edit&id=$_POST[id]'>";
} elseif ($query) {
    echo "<script>alert('Data berhasil diubah')</script>";
    echo "<meta http-equiv='refresh' content='0; url=?hal=pegawai'>";
} else {
    echo "<script>alert('Tidak dapat menyimpan data')</script>";
    echo mysqli_connect_error();
}
?>
