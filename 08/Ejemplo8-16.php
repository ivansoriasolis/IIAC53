<?php 
    function mysql_fix_string($coneccion, $string)
    {
        return $coneccion->real_escape_string($string);
    }
?>