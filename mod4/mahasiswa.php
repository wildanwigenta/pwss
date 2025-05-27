<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
</head>
<body>
<h2>Menampilkan Daftar Nama Mahasiswa</h2> 
<ol> 
    <?php 
        $array_mahasiswa = $_POST['mahasiswa']; 
            for($a=1;$a<=9;$a++) { 
            echo "<li>".$array_mahasiswa [$a]."</li>"; 
        } 
    ?> 
</ol>
</body>
</html>