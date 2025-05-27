<?php 
    $file_baru = fopen("filesaya.txt", "w");
    echo fwrite($file_baru, "UTDI Jl Majapahit 143 yogyakarta");
    fclose($file_baru)
?>