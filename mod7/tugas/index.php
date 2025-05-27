<!DOCTYPE html>
<html>
<head>
    <title>Upload & Download PDF</title>
</head>
<body>
    <h2>Upload File PDF</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Pilih file PDF:
        <input type="file" name="pdfFile" accept="application/pdf" required>
        <input type="submit" value="Upload">
    </form>

    <h2>Daftar File PDF</h2>
    <ul>
        <?php
        $dir = "files/";
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    echo "<li><a href='$dir$file' download>$file</a></li>";
                }
            }
        } else {
            echo "Folder tidak ditemukan.";
        }
        ?>
    </ul>
</body>
</html>
