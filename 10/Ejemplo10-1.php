<?php 
    if (isset($_SERVER['PHP_AUTH_USER']) &&
        isset($_SERVER['PHP_AUTH_PW']))
    {
        echo "Bienvenido Usuario: " .  
             htmlspecialchars($_SERVER['PHP_AUTH_USER']).
             "Password: " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
        echo '<form method="POST" action="Ejemplo10-1.php">
             <input type="submit" name="logout" value="Logout"></form>';
        
        setcookie('ubicacion', 'USA', time() + 60 * 60 * 24 * 7, '/');
        echo $_COOKIE['ubicacion'];

        if (isset($_POST['logout']))
        {   //header('WWW-Authenticate: Basic realm="protected area"');
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