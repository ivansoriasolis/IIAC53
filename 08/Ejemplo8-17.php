<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    echo "<form action='Ejemplo 8-17.php' method='post'>
    Usuario:<input type='text' name='user'>
    Contraseña:<input type='text' name = 'pass'>
    <input type='submit'>
    </form>";

    $user = mysql_fix_string($conexion, $_POST['user']);
    $pass = mysql_fix_string($conexion, $_POST['pass']);
    $query = "SELECT * FROM users 
              WHERE user='$user' AND pass='$pass'";

    echo $query;

    function mysql_fix_string($coneccion, $string)
    {
        return $coneccion->real_escape_string($string);
    }
?>