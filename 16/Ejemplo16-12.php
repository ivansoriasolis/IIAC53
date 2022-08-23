<!DOCTYPE html>
<html>
  <head>
    <title>Efecto: toggle</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <button id='toggle'>Toggle</button>
    <p id='text'>Click el boton toggle</p>
    <script>
      $('#toggle').click(function() { $('#text').toggle('slow','linear')})
    </script>
  </body>
</html>
