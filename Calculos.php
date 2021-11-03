<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Diseño.css">
    </head>
    <body>
    <PARK> Estacionamiento Nueva Pompeya </PARK>
<?php
  $HORAS = $_REQUEST['horas'];
  if($HORAS <= 2)
  {
      $TOTAL=$HORAS*300;
  }
  if($HORAS >= 3 & $HORAS <= 5)
  {
      $TOTAL= 600 + ($HORAS-2)*200;
  }
  if($HORAS > 5)
  {
      $TOTAL= 1200 + ($HORAS-5)*150;
  }
  " echo " <RIGHT> <br> <br> ¡Hola,  el monto a pagar es de: $TOTAL!</RIGHT> " ;"
?>        
    </body>
</html>
