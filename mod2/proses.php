<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
</head>
<body>
    File Proses <hr/>
    <?php 
        $nama = $_POST['nama'];
        $nilai = $_POST['angka'];
        echo "Nama : " .$nama. "<br/>";
        echo "Nilai anda: " .$nilai. "<br/>";
    ?>
</body>
</html>