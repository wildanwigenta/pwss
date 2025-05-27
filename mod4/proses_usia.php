<!DOCTYPE html>
<html>

<head>
    <title>Hasil Hitung Usia</title>
</head>

<body>
    <h2>Hasil Perhitungan Usia</h2>

    <?php
        function hitungUsia($tgl_lahir)
        {
            $lahir = new DateTime($tgl_lahir);
            $sekarang = new DateTime();
            $selisih = $sekarang->diff($lahir);
            return "{$selisih->y} Tahun {$selisih->m} Bulan {$selisih->d} Hari";
        }

        if ($_POST) {
            $nama = $_POST['nama'];
            $tgl = $_POST['tanggal_lahir'];
            $usia = hitungUsia($tgl);

            echo "<h3>Hasil:</h3>";
            echo "Nama: $nama<br>";
            echo "Tanggal Lahir: ".date('d-m-Y', strtotime($tgl))."<br>";
            echo "Usia: $usia";
        } else {
            echo "Form belum diisi. <a href='form_usia.php'>Kembali</a>";
        }
    ?>

</body>
</html>