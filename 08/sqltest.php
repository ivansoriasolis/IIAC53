<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);

    if ($conexion->connect_error) die ("Fatal error");

    if (isset($_POST['delete']) && isset($_POST['isbn']))
    {   
        $isbn = get_post($conexion, 'isbn');
        $query = "DELETE FROM classics WHERE isbn='$isbn'";
        $result = $conexion->query($query);
        if (!$result) echo "BORRAR falló"; 
    }

    if (isset($_POST['author']) &&
        isset($_POST['title']) &&
        isset($_POST['category']) &&
        isset($_POST['year']) &&
        isset($_POST['isbn']) )
    {
        $author = get_post($conexion, 'author');
        $title = get_post($conexion, 'title');
        $category = get_post($conexion, 'category');
        $year = get_post($conexion, 'year');
        $isbn = get_post($conexion, 'isbn');
        $query = "INSERT INTO classics VALUE" .
            "('$author', '$title', '$year', '$category', '$isbn')";
        $result = $conexion->query($query);
        if (!$result) echo "INSERT falló <br><br>";
    }

    echo <<<_END
    <form action="sqltest.php" method="post"><pre>
        Author <input type="text" name="author">
        Title  <input type="text" name="title">
        Category <input type="text" name="category">
        Year <input type="text" name= "year">
        ISBN <input type="text" name= "isbn">
             <input type="submit" value="ADD RECORD">
    </pre></form>
    _END;

    $query = "SELECT * FROM classics";
    $result = $conexion->query($query);
    if (!$result) die ("Falló el acceso a la base de datos");

    $rows = $result->num_rows;

    for ($j = 0; $j < $rows; $j++)
    {
        $row = $result->fetch_array(MYSQLI_NUM);

        $r0 = htmlspecialchars($row[0]);
        $r1 = htmlspecialchars($row[1]);
        $r2 = htmlspecialchars($row[2]);
        $r3 = htmlspecialchars($row[3]);
        $r4 = htmlspecialchars($row[4]);

        echo <<<_END
        <pre>
        Author $r0
        Title $r1
        Category $r3
        Year $r2
        ISBN $r4
        </pre>
          </pre>
        <form action='sqltest.php' method='post'>
        <input type='hidden' name='delete' value='yes'>
        <input type='hidden' name='isbn' value='$r4'>
        <input type='submit' value='BORRAR REGISTRO'></form>
        _END;
    }

    $result->close();
    $conexion->close();

    function get_post($con, $var)
    {
        return $con->real_escape_string($_POST[$var]);
    }
?>