<!DOCTYPE html>
<html>
  <head>
    <title>Eventos jQuery</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <button id='clickme'>Click me</button>
    <p id='result'>Este es un parrafo</p>
    <script>
      $('#clickme').click(function()
      {
        $('#result').html('Has hecho click')
      }
      )
    </script>
  </body>
</html>
