<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi</title>
</head>

<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>TAMBAH DATA MAHASISWA</h3>

    <?php
    include 'koneksi.php';
    $query = "SELECT kodeProdi, namaProdi FROM prodi";
    $result = mysqli_query($koneksi, $query);
    ?>

    <form method="post" action="proses.php">
        <table>
            <tr>
                <td>NIM :</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email"></td>
            <tr>
                <td>No. HP :</td>
                <td><input type="text" name="hp"></td>
            </tr>
            <tr>
                <td>Program Studi :</td>
                <td>
                    <select name="kodeProdi">
                        <option value="">-- Pilih Prodi --</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['kodeProdi'] . "'>" . $row['namaProdi'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>

</body>

</html>
