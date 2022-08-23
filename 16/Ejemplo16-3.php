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
      $('#clickme').dblclick( aparece )

      function aparece()
        {  
          $('#result').html('<h1>Has hecho click</h1>')
        }    
      
    </script>
  </body>
</html>
