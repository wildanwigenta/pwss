<?php
include 'koneksi.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $id_jabatan=$_POST['id_jabatan'];


  $sql = "INSERT INTO pegawai (id_pegawai, nama, alamat,id_jabatan) 
  VALUES (null,'$nama', '$alamat','$id_jabatan')";


  if ($koneksi->query($sql) === TRUE) {
    //echo "Data berhasil disimpan."; //baris ini untuk aplikasi rekam baca terpisah
	include "daftar_pegawai.php"; //baris ini untyk aplikasi rekam dan baca terpadu
  } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
  }


  //$koneksi->close();
}
?>
