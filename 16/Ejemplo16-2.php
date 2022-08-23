<!DOCTYPE html>
<html>
  <head>
    <title>Segundo ejemplo jQuery</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <blockquote> Potente y flexible como JavaScript
      con muchas funciones integradas.</blockquote>
    <div id='advert'>Este es un ad</div>
    <p>Este es mi <span class='new'>nuevo</span> website</p>
    <script>
      $('blockquote').css('background', 'lime')
      $('#advert').css('border', '3px dashed red')
      $('.new').css('text-decoration', 'underline')
      $('blockquote, #advert, .new').css('font-weight', 'bold')
    </script>
  </body>
</html>
