<?php 
    include 'koneksi.php';

    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $email   = $_POST['email'];
    $alamat  = $_POST['alamat'];
    $hp      = $_POST['hp'];
    $kodeProdi = $_POST['kodeProdi'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, alamat, email, hp, kodeProdi) 
                            VALUES ('$nim', '$nama', '$alamat', '$email', '$hp', '$kodeProdi')");

    header("location:index.php"); 
?>
