<!DOCTYPE html>
<html>
  <head>
    <title>Evento keypress</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <h2>Presione algunas teclas</h2>
    <div id='result'></div>
    <script>
      $(document).keypress(function(event)
      {
        key = String.fromCharCode(event.which)

        if (key >= 'a' && key <= 'z' ||
            key >= 'A' && key <= 'Z' ||
            key >= '0' && key <= '9')
        {
          $('#result').html('Presionaste: '+ key)
          event.preventDefault()
        }
      }
      )
    </script>
  </body>
</html>
