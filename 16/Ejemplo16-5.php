<!DOCTYPE html>
<html>
  <head>
    <title>Eventos blur y focus</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <h2>Click dentro y fuera de los campos</h2>
    <input id='first'><input><input><input>
    <script>
      $('#first').focus()
      $('input').focus(function () { $(this).css('background', '#ff0')})
      $('input') .blur(function () { $(this).css('background', '#aaa')})   
    </script>
  </body>
</html>

