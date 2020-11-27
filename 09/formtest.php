<?php //formtest.php
    echo <<<_END
        <html>
            <head>
                <title>Form Test</title>
            </head>
            <body>
            <form method="post" action="formtest.php">
                ¿Cual es tu nombre?
                <input type="text" name="name">
                <input type="submit">
            </form>
            </body>
        </html>
    _END;
?>
