<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
</head>
<body>
    Hasil: <hr/>
    <?php 
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $hasil = $number1 + $number2;
        echo $number1. " + " .$number2. " = " .$hasil;
    ?>
</body>
</html>