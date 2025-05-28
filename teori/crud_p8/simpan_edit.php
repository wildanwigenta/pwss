<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idEdit=$_POST['id_pegawai'];
  $namaEdit = $_POST['nama'];
  $alamatEdit = $_POST['alamat'];
  $id_jabatanEdit=$_POST['id_jabatan'];


  $sql = "UPDATE pegawai SET  nama='$namaEdit', alamat='$alamatEdit',id_jabatan='$id_jabatanEdit'
  WHERE  id_pegawai='$idEdit'"; 


  if ($koneksi->query($sql) === TRUE) {
   include "daftar_pegawai.php"; 
  } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
  }
}
  //$koneksi->close(); //baris ini bila aplikasi rekam dan baca TERPISAH
?>
