<?php //continue.php
    session_start();

    if (isset($_SESSION['nombre']))
    {
        $nombre = htmlspecialchars($_SESSION['nombre']);
        $apellido = htmlspecialchars($_SESSION['apellido']);

        echo "Bienvenido otra vez $nombre.<br>
               Tu nombre completo es $nombre $apellido.<br>";
    }
    else echo "Por favor <a href=Ejemplo 10-5.php>Click aqui</a>
                para ingresar";
?>
