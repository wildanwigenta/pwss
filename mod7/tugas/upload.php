<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "files/";
    $fileName = basename($_FILES["pdfFile"]["name"]);
    $targetFile = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Cek apakah file PDF
    if ($fileType == "pdf") {
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            echo "File berhasil diupload. <a href='index.php'>Kembali</a>";
        } else {
            echo "Terjadi kesalahan saat upload.";
        }
    } else {
        echo "Hanya file PDF yang diperbolehkan.";
    }
}
?>
