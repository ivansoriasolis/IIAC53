<?php
    $fh = fopen("testfile.txt",'r') or
    die("El archivo no existe o no tienes permisos");

    $linea = fgets($fh);
    fclose($fh);
    echo $linea;
?>