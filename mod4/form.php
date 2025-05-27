<!DOCTYPE html>
<html>
<head>
    <title>Form Hitung Usia</title>
</head>
<body>
    <h2>Form Hitung Usia</h2>
    <form action="proses_usia.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" required><br><br>

        <input type="submit" value="Hitung Usia">
    </form>
</body>
</html>
