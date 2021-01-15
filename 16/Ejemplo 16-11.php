<!DOCTYPE html>
<html>
  <head>
    <title>Efecto: hide & show</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <button id='hide'>Hide</button>
    <button id='show'>Show</button>
    <p id='text'>Click en hide o show</p>
    <script>
      $('#hide').click(function() { $('#text').hide('slow','linear')})
      $('#show').click(function() { $('#text').show('slow','linear')})
    </script>
  </body>
</html>
