<?php 
    $asal = array(
    "Badi"=>"Sleman",
    "Ruli"=>"Bantul",
    "Siska"=>"Kota",
    "Dono"=>"Gunung Kidul");
    echo"Asal Daerah: <hr>";
    foreach($asal as $a => $b){
        echo "$a berasal dari $b <br>";
    }
?>