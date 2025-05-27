<?php 
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];
    if ($operator == "+") {
        $hasil = $number1 + $number2;
    } elseif ($operator == "-") {
        $hasil = $number1 - $number2;
    } elseif ($operator == "*") {
        $hasil = $number1 * $number2;
    } elseif ($operator == "/") {
        $hasil = $number1 / $number2;
    }
    echo "Hasil dari $number1 $operator $number2 = $hasil";
?>