<?php
include('koneksi.php');
$nim=$_GET['nim'];
$query = "delete from mahasiswa where nim='$nim'";
$hasil = mysqli_query($koneksi,$query);
if($hasil)
header("location:index.php");
 else
 echo' HAPUS Gagal';
?>