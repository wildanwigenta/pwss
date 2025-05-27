<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <h2>Form Input Nilai Mahasiswa</h2>
    <form method="POST">
        <label>Nama Mahasiswa:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Nilai Pemrograman Web:</label><br>
        <input type="number" name="nilai[p_web]"><br><br>

        <label>Nilai Basis Data:</label><br>
        <input type="number" name="nilai[database]"><br><br>

        <label>Nilai Sistem Operasi:</label><br>
        <input type="number" name="nilai[s_operasi]"><br><br>

        <input type="submit" name="submit" value="Proses Nilai">
    </form>

    <?php
    function hitungRataRata($nilaiArray) {
        $total = 0;
        foreach ($nilaiArray as $nilai) {
            $total += $nilai;
        }
        return $total / count($nilaiArray);
    }

    function tentukanIndeks($rata) {
        if ($rata >= 85) return "A";
        elseif ($rata >= 75) return "B";
        elseif ($rata >= 65) return "C";
        elseif ($rata >= 50) return "D";
        else return "E";
    }

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $nilai = $_POST['nilai'];

        echo "<hr>";
        echo "<h3>Rekapitulasi Nilai Mahasiswa</h3>";
        echo "Nama: $nama <br>";
        echo "NIM: $nim <br><br>";
        echo "<strong>Nilai Mata Kuliah:</strong><br>";

        foreach ($nilai as $matkul => $n) {
            echo ucwords(str_replace('_', ' ', $matkul)) . ": $n <br>";
        }

        $rataRata = hitungRataRata($nilai);
        $indeks = tentukanIndeks($rataRata);

        echo "<br>Rata-rata Nilai: " . number_format($rataRata, 2) . "<br>";
        echo "Nilai Huruf: <strong>$indeks</strong>";
    }
    ?>
</body>
</html>
