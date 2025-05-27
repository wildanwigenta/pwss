<?php
$namFile = $_FILES['file']['name'];
$tampung_file = $_FILES['file']['tmp_name'];

$dirUpload = "file/";
$folder_anda = move_uploaded_file($tampung_file, $dirUpload.$namFile);

if ($folder_anda) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namFile."'>".$namFile."</a>";
} else {
    echo "Upload Gagal!";
}
?>