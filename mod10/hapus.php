<?php
include_once 'database.php';
include_once 'pegawai.php';
$database = new Database();
$db = $database->getConnection();
$pegawai = new Pegawai($db);
if (isset($_GET['id'])) {
    $pegawai->id_pegawai = $_GET['id'];
    if ($pegawai->delete()) {
        echo "<script>alert('Data pegawai berhasil dihapus!');
window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data pegawai.');
window.location.href='index.php';</script>";
    }
} else {
    die('ERROR: ID tidak ditemukan.');
}
?>