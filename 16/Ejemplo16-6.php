<!DOCTYPE html>
<html>
  <head>
    <title>Eventos click y dbclick</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <h2>Click y doble click en los botones</h2>
    <button class='myclass'>Boton 1</button>
    <button class='myclass'>Boton 2</button>
    <button class='myclass'>Boton 3</button>
    <button class='myclass'>Boton 4</button>
    <button class='myclass'>Boton 5</button>
    <script>
      $('.myclass').click(  function() { $(this).slideUp()})
      $('.myclass').dblclick(function() { $(this).hide()})
    </script>
  </body>
</html>
