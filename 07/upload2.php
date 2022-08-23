<?php
    echo <<<_END
    <html><head><title>PHP Form Upload</title></head><body>
    <form method='post' action='upload2.php' enctype='multipart/form-data'>
    Select File: <input type='file' name='filename' size='10'>
    <input type='submit' value='Upload'>
    </form>
    _END;

    if ($_FILES)
    {
        $name = $_FILES['filename']['name'];

        switch ($_FILES['filename']['type'])
        {
            case 'image/jpeg':  $ext = 'jpg'; break;
            case 'image/gif':   $ext = 'jpg'; break;
            case 'image/png':   $ext = 'png'; break;
            case 'image/tiff':  $ext = 'tif'; break;
            default:            $ext = ''; break;
        }

        if ($ext)
        {
            $n = "image.$ext";
            move_uploaded_file($_FILES['filename']['tmp_name'], $n);
            echo "Uploaded image '$name' as '$n':<br>";
            echo "<img src=$n>";
        }
        else echo "'$name' no es un archivo de imagen";        
    }
    else echo "No se ha cargando una imagen";

    echo "</body></html>";
?>