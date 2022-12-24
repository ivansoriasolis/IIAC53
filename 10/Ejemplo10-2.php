<?php 
$username = 'admin';
$password = 'unajma';
    if (isset($_SERVER['PHP_AUTH_USER']) &&
        isset($_SERVER['PHP_AUTH_PW']))
    {
        if ($_SERVER['PHP_AUTH_USER'] === $username &&
            $_SERVER['PHP_AUTH_PW'] === $password)
            echo "Bienvenido Usuario: " .  
                htmlspecialchars($_SERVER['PHP_AUTH_USER']).
                "Password: " . htmlspecialchars($_SERVER['PHP_AUTH_PW']).
                '<form method="POST" action="Ejemplo10-2.php">
                <input type="submit" name="logout" value="Logout">
                </form>';
        else 
        {
            header('HTTP/1.0 401 Unauthorized');
            die("Nombre de usuario o contraseña inválido");
        }
            
        if (isset($_POST['logout']))
        {   
            header('HTTP/1.0 401 Unauthorized');
            die("Saliste"); 
        }
    } 
    else
    {
        header('WWW-Authenticate: Basic realm="protected area"');
        die("Please enter your username and password");    
    }
?>