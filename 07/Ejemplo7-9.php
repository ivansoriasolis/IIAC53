<?php
    if (!rename('testfile2.txt', 'testfile2.new'))
        echo "No se puedo renombrar";
    else echo "Archivo renombrado exitosamente";
?>