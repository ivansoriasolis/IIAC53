<?php 
    function mysql_entities_fix_string($con, $string)
    {
        return htmlentties(mysql_fix_string($con, $string));
    }

    function mysql_fix_string($con, $string)
    {
        if (get_magic_quotes_gpc())
            $string = stripslashes($string);
        return $con->real_escape_string($string);
    }
?>

