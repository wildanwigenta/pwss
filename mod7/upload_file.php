<?php 
    $file = $_FILES['gambar']['tmp_name'];
    $tujuan = $_FILES['gambar']['name'];
    move_uploaded_file($file, $tujuan);
    echo "<h1>File berhasil diupload</h1>";
?>