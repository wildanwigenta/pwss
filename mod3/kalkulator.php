<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form name="form" action="prosesK.php" method="post">
        <input type="text" name="number1" id="number">
        <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="number2" id="number">
        <input type="submit" value="=">
    </form>
</body>
</html>