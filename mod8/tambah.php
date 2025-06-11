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
                <td>No. HP :</td>
                <td><input type="text" name="hp"></td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>