<?php //formtest.php
    echo <<<_END
        <html>
            <head>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <!--Import materialize.css-->
                <!-- Compiled and minified CSS -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            
                <!-- Compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            </head>
            <body>
            <form method="post" action="formtest.php">
                ¿Cual es tu nombre?
                <input type="text" name="name">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
                </button>
            </form>
            </body>
            <script type="text/javascript" src="js/materialize.min.js"></script>
        </html>
    _END;
?>