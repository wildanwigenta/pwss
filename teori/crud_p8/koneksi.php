<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwssdb"; 


// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($koneksi->connect_error) {
  die("Gagal Bro : " . $koneksi->connect_error);
}
?>
