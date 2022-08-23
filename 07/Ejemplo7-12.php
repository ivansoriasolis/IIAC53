<?php
    $fh = fopen("testfile.txt", 'r+') or die("Falló la apertura del archivo");
    $texto = fgets($fh);

    if (flock($fh, LOCK_EX))
    {
        fseek($fh, 0, SEEK_END);
        fwrite($fh, "$texto") or die("No se puede escribir el archivo");
        flock($fh, LOCK_UN);
    }
    
    fclose($fh);
    echo "Archivo actualizado exitosamente";
?>