<?php
    $fh = fopen("testfile.txt", 'w') or die("No se pudo crear el archivo");
    $text = <<<_END
    Linea 1
    Linea 2
    Linea 3
    _END;
    
    fwrite($fh, $text) or die("No se pudo escribir el archivo");
    fclose($fh);
    echo "Archivo ‘testfile.txt’ escrito satisfactoriamente";
?>