<?php 
    $username = 'admin';
    $password = 'unajma';

    if (isset($_SERVER['PHP_AUTH_USER']) &&
        isset($_SERVER['PHP_AUTH_PW']))
    {
        if ($_SERVER['PHP_AUTH_USER'] === $username &&
            $_SERVER['PHP_AUTH_PW'] === $password)
            echo "Ahora has ingresado";
        else die("Nombre de usuario o contraseña inválido");
    } 
    else
    {
        header('WWW-Authenticate: Basic realm="Restricted Area"');
        header('HTTP/1.0 401 Unauthorized');
        die("Please enter your username and password");    
    }
?>
