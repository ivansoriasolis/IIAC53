<!DOCTYPE html>
<html> <!-- jqueryasyncget.htm -->
  <head>
    <title>jQuery Asynchronous GET</title>
    <script src='jquery-3.2.1.min.js'></script>
    <meta charset="utf-8">
  </head>
  <body style='text-align:center'>
    <h1>Cargando una página en un DIV</h1>
    <div id='info'>Esta sentencia sera reemplazada</div>
    <script>
      $.get('urlget.php?url=amazon.com/gp/aw', function(data)
      {
        $('#info').html(data)
      } )
    </script>
  </body>
</html>
