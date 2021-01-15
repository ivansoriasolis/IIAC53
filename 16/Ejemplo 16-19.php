<!DOCTYPE html>
<html>
  <head>
    <title>Dimensiones</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <p>
      <button id='getdoc'>Obteniendo ancho de documento</button>
      <button id='getwin'>Obteniendo ancho de pagina</button>
      <button id='getdiv'>Obteniendo ancho del div</button>
      <button id='setdiv'>Estableciendo ancho a 150px</button>
    </p>
    <div id='result' style='width:300px; 
height:50px; background:#def;'></div>
    <script>
      $('#getdoc').click(function()
      {
        $('#result').html('Document width: ' + $(document).width())
      } )
      $('#getwin').click(function()
      {
        $('#result').html('Window width: ' + $(window).width())
      } )
      $('#getdiv').click(function()
      {
        $('#result').html('Div width: ' + $('#result').width())
      } )
      $('#setdiv').click(function()
      {
        $('#result').width(150)
        $('#result').html('Div width: ' + $('#result').width())
      } )
    </script>
  </body>
</html>
