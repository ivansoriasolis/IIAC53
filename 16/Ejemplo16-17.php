<!DOCTYPE html>
<html>
  <head>
    <title>El DOM: attr</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <h2>Documento ejemplo</h2>
    <p>
      <a id='link' href='http://google.com' title='Google'>
        Visita Google
      </a></p>
    <script>
      $('#link').text('Visita Yahoo!')
      $('#link').attr( {href:'http://yahoo.com', title:'Yahoo!'})
      alert('El nuevo HTML es:\n'+ $('p').html())
    </script>
  </body>
</html>  
