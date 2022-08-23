<?php
    $fh = fopen("testfile.txt", 'r') or
    die("El archivo no existe o no tienes permisos");

    $texto = fread($fh, 3);
    fclose($fh);

    echo $texto;
?>