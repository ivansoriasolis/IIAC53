<!DOCTYPE html>
<html>
  <head>
    <title>Effects: Sliding</title>
    <script src='jquery-3.2.1.min.js'></script>
  </head>
  <body>
    <button id='slideup'>slideUp</button>
    <button id='slidedown'>slideDown</button>
    <button id='slidetoggle'>slideToggle</button>
    <div id='para' style='background:#def'>
      <h2>POEMA 20</h2>
      <p>Puedo escribir los versos más tristes esta noche.
        Escribir, por ejemplo: » La noche está estrellada,
        y tiritan, azules, los astros, a lo lejos».    
        El viento de la noche gira en el cielo y canta.
        Puedo escribir los versos más tristes esta noche.
        Yo la quise, y a veces ella también me quiso.
        En las noches como ésta la tuve entre mis brazos.
        La besé tantas veces bajo el cielo infinito.</p>
    </div>
    <script>
      $('#slideup')    .click(function() { $('#para').slideUp(    'slow') })
      $('#slidedown')  .click(function() { $('#para').slideDown(  'slow') })
      $('#slidetoggle').click(function() { $('#para').slideToggle('slow') })
    </script>
  </body>
</html>   
