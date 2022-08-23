<?php 
    if(isset($_COOKIE['usuario']))
    {
        echo "Bienvenido otra vez".$_COOKIE['usuario'];
        die("Gracias");
    }

    if (isset($_SERVER['PHP_AUTH_USER']) &&
        isset($_SERVER['PHP_AUTH_PW']))
    {
        echo "Bienvenido Usuario: " .  
             htmlspecialchars($_SERVER['PHP_AUTH_USER']).
             "Password: " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
        echo '<form method="POST" action="Ejemplo 10-1.php">
             <input type="submit" name="logout" value="Logout"></form>';
        
        setcookie('ubicacion', 'USA', time() + 60 * 60 * 24 * 7, '/');
        setcookie('usuario',htmlspecialchars($_SERVER['PHP_AUTH_USER']), time() + 60 * 60 * 24 * 7, '/');

        if(isset($_COOKIE['ubicacion']))
            echo $_COOKIE['ubicacion'];

        if (isset($_POST['logout']))
        {   
            header('HTTP/1.0 401 Unauthorized');
            setcookie('ubicacion', 'USA', time() -4325252, '/');
            die("Saliste"); 
        }           
    } 
    else
    {
        header('WWW-Authenticate: Basic realm="protected area"');
        die("Please enter your username and password");    
    }
?>
