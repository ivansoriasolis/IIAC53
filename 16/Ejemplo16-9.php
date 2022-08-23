<!DOCTYPE html>
<html>
  <head>
    <title>Evento: manejo avanzado de mouse</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <h2 id='test'>Pasa el mouse encima</h2>
    <script>
      $('#test').mouseenter(function() { $(this).html('Hey, deja de tocar!')})
      $('#test').mouseleave(function() { $(this).html('Donde te fuiste?')})
    </script>
  </body>
</html>

