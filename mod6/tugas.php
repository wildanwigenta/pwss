<!DOCTYPE html>
<html>
<head>
    <style>.error {color: #FF0000;}</style>
</head>
<body>

<?php
$nim = $nama = $email = "";
$nim_pesan = $name_pesan = $email_pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim   = htmlspecialchars($_POST["nim"]);
    $nama  = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);

    if (empty($nim)) $nim_pesan = "NIM harus diisi";
    elseif (!ctype_digit($nim)) $nim_pesan = "NIM harus angka semua";

    if (empty($nama)) $name_pesan = "Nama harus diisi";
    elseif (preg_match('/\d/', $nama)) $name_pesan = "Nama harus huruf semua";

    if (empty($email)) $email_pesan = "Email harus diisi";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $email_pesan = "Penulisan email belum benar";
}
?>

<h2>Form Input Data</h2>
<form method="post">
    NIM: <input type="text" name="nim" value="<?= $nim ?>">
    <span class="error">* <?= $nim_pesan ?></span><br><br>
    
    Nama: <input type="text" name="nama" value="<?= $nama ?>">
    <span class="error">* <?= $name_pesan ?></span><br><br>
    
    Email: <input type="text" name="email" value="<?= $email ?>">
    <span class="error">* <?= $email_pesan ?></span><br><br>
    
    <input type="submit" value="Submit">
    
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nim_pesan && !$name_pesan && !$email_pesan): ?>
    <h2>Yang kamu inputkan:</h2>
    NIM: <?= $nim ?><br>
    Nama: <?= $nama ?><br>
    Email: <?= $email ?><br>
<?php endif; ?>

</body>
</html>
