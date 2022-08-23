<!DOCTYPE html>
<html>
  <head>
    <title>Evento: submit</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <form id='form'>
      Nombre: <input id='nombre' type='text' name='nombre'><br>
      Apellido: <input id='apellido' type='text' name='apellido'><br>
      <input type='submit'>
    </form>
    <script>
      $('#form').submit(function()
      {
        if ($('#nombre').val() == '' ||
            $('#apellido').val() == '')
        {
          alert('Por favor ingresa ambos nombres')
          return false
        }
      })
    </script>
  </body>
</html>

