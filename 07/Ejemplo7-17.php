<?php
    $cmd = "dir";

    exec(escapeshellcmd($cmd), $output, $status);

    if ($status) echo "Fallo el comando Exec";
    else
    {
        echo "<pre>";
        foreach($output as $line) echo htmlspecialchars("$line\n");
        echo "</pre>";
    }
?>