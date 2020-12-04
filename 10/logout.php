<?php //logout.php
    session_start();

    if (isset($_SESSION['nombre']))
    {
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];

        destroy_session_and_data();

        echo "Sesión terminada <a href='signin.php'>Ingresar</a>.<br>";
    }
    else echo "Por favor <a href='signin.php'>Click aqui</a>
                para ingresar";

    function destroy_session_and_data()
    {
        //session_start();
        $_SESSION = array();
        setcookie(session_name(), '', time()-2592000, '/');
        session_destroy();
    }
?>
