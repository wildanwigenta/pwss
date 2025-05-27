<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $alas = $_POST['alas'] ?? 0;
        $tinggi = $_POST['tinggi'] ?? 0;
        if ($alas > 0 && $tinggi > 0) {
            echo "Luas segitiga: " . (0.5 * $alas * $tinggi);
        } else {
            echo "Masukkan nilai yang valid.";
        }
    }
    ?>
</body>
</html>