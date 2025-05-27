<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head> 
<body>
<h2>Nama Mahasiswa</h2> 
<form action="mahasiswa.php" method="post"> 
    <ol> 
        <?php 
            for($a=1;$a<=9;$a++) { 
                echo "<li> <input type='text' name='mahasiswa[$a]' /> </li>";
            }
        ?> 
    </ol> 
    <input type="submit" value="TAMPILKAN" /> 
</form>    
</body>
</html>