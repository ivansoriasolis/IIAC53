<!DOCTYPE html>
<html> <!-- jqueryasyncpost.htm -->
  <head>
    <title>jQuery Asynchronous Post</title>
    <script src='jquery-3.2.1.min.js'></script>
    <meta charset="utf-8">
  </head>
  <body style='text-align:center'>
    <h1>Cargando una pagina en un DIV</h1>
    <div id='info'>Esta sentencia sera remplazada</div>
    <script>
      $.post('urlpost.php', { url : 'amazon.com/gp/aw' }, 
        function(data) {
          $('#info').html(data)
      } )
    </script>
  </body>
</html>



