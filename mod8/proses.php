<?php 
    include 'koneksi.php';
    $nim = $_POST['nim']; $nama = $_POST['nama']; $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    mysqli_query($koneksi,"insert into mahasiswa
    values('$nim','$nama','$alamat','$hp')");
    header("location:index.php"); 
?>