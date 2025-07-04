<!DOCTYPE html>
<html>
<head>
    <title>Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hubungi Saya</h1>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Pesan:</label><br>
        <textarea name="pesan"></textarea><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Terima kasih, " . htmlspecialchars($_POST["nama"]) . "!</p>";
        echo "<p>Pesan Anda: " . htmlspecialchars($_POST["pesan"]) . "</p>";
    }
    ?>

    <a href="index.php">Beranda</a> | <a href="about.php">Tentang</a>
</body>
</html>
