<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan</title>
</head>

<body>
    <?php
    $arr_jurusan = array(
        "TI" => "Teknik Informatika",
        "SI" => "Sistem Informasi",
        "MI" => "Manajemen Informatika",
        "KA" => "Komputer Akuntansi",
        "TK" => "Teknik Komputer"
    );
    ?>
    <h2>JURUSAN ANDA</h2>
    <form action="proses.php" method="post">
        Nama: <br /> <input type="text" name="nama" /> <br />
        Jurusan: <br />
        <select name="jurusan">
            <?php
            foreach ($arr_jurusan as $kode => $nama_jurusan) {
                echo "<option value='$kode'>$nama_jurusan</option>";
            }
            ?>
        </select> <br /><br />
        <input type="submit" value="TAMPILKAN" />
    </form>
</body>

</html>