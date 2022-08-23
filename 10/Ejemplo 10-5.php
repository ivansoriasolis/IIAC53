<?php //signin.php
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db, $port);

    session_start();  //inicia o recupera una sesion
    if(isset($_SESSION['nombre'])) //verifica si ya hay datos de sesion
        header("Location: continue.php");  //si es asi redirige a donde quieras

    if($conexion->connect_error) die("Error fatal");

    if (isset($_POST['username'])&&
        isset($_POST['password']))
    {
        $un_temp = mysql_entities_fix_string($conexion, $_POST['username']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);
        $query   = "SELECT * FROM usuarios WHERE username='$un_temp'";
        $result  = $conexion->query($query);
        
        if (!$result) die ("Usuario no encontrado");
        elseif ($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_NUM);
            $result->close();

            if (password_verify($pw_temp, $row[3])) 
            {
                //session_start();
                $_SESSION['nombre']=$row[0];
                $_SESSION['apellido']=$row[1];
                header("Location: continue.php"); //redirige a la pagina de inicio
                echo htmlspecialchars("$row[0] $row[1]:
                    hola $row[0], has ingresado como '$row[0]'");
                die ("<p><a href='continue.php'>
              Click para continuar</a></p>");
            }
            else {
                echo "Usuario/password incorrecto <p><a href='signup.php'>
            Registrarse</a></p>";
            }
        }
        else {
          echo "Usuario/password incorrecto <p><a href='signup.php'>
      Registrarse</a></p>";
      }   
    }
    else
    {
      echo <<<_END
      <h1>Iniciar sesion</h1>
      <form action="signin.php" method="post"><pre>
      Usuario  <input type="text" name="username">
      Password <input type="text" name="password">
               <input type="submit" value="INGRESAR">
      </form>
      _END;
    }

    $conexion->close();

    function mysql_entities_fix_string($conexion, $string)
    {
        return htmlentities(mysql_fix_string($conexion, $string));
      }
    function mysql_fix_string($conexion, $string)
    {
        return $conexion->real_escape_string($string);
      }  
?>