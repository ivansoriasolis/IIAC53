<!DOCTYPE html>
<html>
  <head>
    <title>Modificando el DOM</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <h2>Documento de ejemplo</h2>
    <a href='http://google.com' title='Google'>Visit Google</a>
    <code>
      Esta es la seccion de codigo
    </code>
    <p>
      <button id='a'>Remover la imagen</button>
      <button id='b'>Limpiar el texto</button>
    </p>
    <img id='ball' src='ball.png'>
    <blockquote id='quote' style='border:1px dotted #444; height:20px;'>
      test
    </blockquote>
    <script>
      $('a').prepend('Link: ')
      $("[href^='http']").append(" <img src='link.png'>")
      $('code').before('<hr>').after('<hr>')
      $('#a').click(function() { $('#ball').remove() } )
      $('#b').click(function() { $('#quote').empty() } )
    </script>
  </body>
</html>  
