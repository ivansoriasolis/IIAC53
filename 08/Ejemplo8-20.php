<?php 
    function mysql_entities_fix_string($con, $string)
    {
        return htmlentties(mysql_fix_string($con, $string));
    }

    function mysql_fix_string($con, $string)
    {
        return $con->real_escape_string($string);
    }
?>