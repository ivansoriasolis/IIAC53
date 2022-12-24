<?php //formtest2.php
    echo <<<_END
        <form method="post" action="calc.php"><pre>
                 Monto <input type="text" name="inicial">
            Devolución <input type="text" name="mensualidad">
                  Años <input type="text" name="annos" value="25">
               Interés <input type="text" name="rate" value="6">
                       <input type="submit">
    _END;
?>

