<?php
session_start();
$userName = $_POST['username'];
$password = $_POST['password'];
include "koneksi.php";
$data = $konek->query(
    "SELECT id, username, password, nama FROM admin WHERE username='$userName' 
    AND password='$password'"
);

//ambil data
$ketemu = $data->fetch_assoc();
if ($ketemu) {
    $_SESSION['namaUser'] = $ketemu['username'];
    $_SESSION['namaLengkap'] = $ketemu['nama'];
    header("Location:welcome.php");
    exit();
} else {
    echo "<label>Gak Ketemu </label>";
    echo "<a href='index.php'>Kembali</a>";
}
