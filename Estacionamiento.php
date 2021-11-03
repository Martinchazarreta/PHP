<?php
  $ID = $_REQUEST['usuarioid'];
  $PASSWORD = $_REQUEST['password'];
  if($PASSWORD == "EstacionoAQUI" & $ID == "3DEFEBRERO")
  {
    <div class ="titulo"> 
      echo "Hola ". $ID ;
    </div>
      echo "<br>Ingrese cantidad de horas: ";
      echo "<form action='Calculos.php' method='post'>
            <input type='text' name='horas'>
            <input type='submit' value='Enviar'>
            </form>";
      
  }
  if($PASSWORD != "EstacionoAQUI" & $ID == "3DEFEBRERO") 
  {
      echo "Usuario o contraseña incorrecta ". $ID;
  }
?>