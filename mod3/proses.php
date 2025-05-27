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
        $jurusan = $_POST['jurusan'];
        switch ($jurusan) {
            case 'TI':
                echo "Jurusan anda Teknik Informatika <br/>";
                break;
            case 'SI':
                echo "Jurusan anda Sistem Informasi <br/>"; 
                break;
            case 'MI':
                echo "Jurusan anda Manajemen Informatika <br/>";
                break;
            case 'TK':
                echo "Jurusan anda Teknik Komputer <br/>";
                break;
            case 'KA':
                echo "Jurusan anda Komputerisasi Akuntansi <br/>";
                break;
            default:
                echo "jurusan tidak ada <br/>";
                break;
        }

        $nilai = $_POST['angka'];
        echo "Nilai anda: " .$nilai. "<br/>";
        if ($nilai > 100) {
            echo "Nilai Kelebihan";
        } elseif ($nilai > 70) {
            echo "Selamat Anda Lulus Ujian";
        } elseif ($nilai >= 40) {
            echo "Anda Harus ujian lagi";
        } else {
            echo "Maaf, Gagal";
        }
    ?>
</body>
</html>