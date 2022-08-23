<!DOCTYPE html>
<html>
  <head>
    <title>Effects: Sliding</title>
    <script src='jquery-3.2.1.min.js'></script>
    <style>
      #ball {
        position: relative
      }
      #box {
        width: 640;
        height: 480;
        background: green;
        border: 1px solid #444;
      }
    </style>
  </head>
  <body>
    <div id='box'>
      <img id='ball' src='ball.png'>
    </div>
    <script>
      rebotar()
      function rebotar()
      {
        $('#ball')
          .animate( { left:'270px', top:'380px'}, 'slow', 'linear')
          .animate( { left:'540px', top:'190px'}, 'slow', 'linear')
          .animate( { left:'270px', top:'0px'  }, 'slow', 'linear')
          .animate( { left:'0px',   top:'190px'}, 'slow', 'linear')
      }
    </script>
  </body>
</html>  

