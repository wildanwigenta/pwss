<!DOCTYPE html>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
$nim = $nim_pesan = "";
$name_pesan = $email_pesan = "";
$nama = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nim"])) {
        $nim_pesan = "Nim harus diisi";
    } else {
        $nim = htmlspecialchars($_POST["nim"]);
    }
    
    if (empty($_POST["nama"])) {
        $name_pesan = "Nama harus diisi";
    } else {
        $nama = htmlspecialchars($_POST["nama"]);
    }
    
    if (empty($_POST["email"])) {
        $email_pesan = "Email harus diisi";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }
}
?>
<h2>Form Input Data</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    NIM: <input type="number" name="nim">
    <span class="error">* <?php echo $nim_pesan; ?></span>
    <br><br>
    Nama: <input type="text" name="nama">
    <span class="error">* <?php echo $name_pesan; ?></span>
    <br><br>
    Email: <input type="email" name="email">
    <span class="error">* <?php echo $email_pesan; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    echo "<h2>Yang kamu inputkan:</h2>";
    echo "NIM: " . $nim;
    echo "<br>";
    echo "Nama: " . $nama;
    echo "<br>";
    echo "E-Mail: " . $email;
?>
</body>
</html>