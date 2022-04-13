<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 4</title>
  </head>
  <body>
  <form action="index-4.php" method="post">
      <!-- NOMBRE -->
      <label for="txt-nombre">Ingrese su nombre:</label><br>
      <input type="text" name="nombre" id="txt-nombre" required="true" /><br>
      <!-- FECHA NACIMIENTO -->
      <label for="txt-fechaNac"> Ingrese su fecha de nacimiento: </label><br>
      <input type="date" name="fechaNac" id="txt-fechaNac" required="true" /><br>
      <!-- CANTIDAD DE HIJOS -->
      <label for="txt-cantHijos"> Cantidad de hijos: </label><br>
      <input type="number" name="cantHijos" id="txt-cantHijos" required="true" min="0" /><br>
      <!-- BOTON -->
      <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
    </form>
    <br>
    <hr>
    <br>
    <?php
      if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $fechaNac =  $_POST['fechaNac'];
        $cantHijos =  $_POST['cantHijos'];

        echo '<p>Nombre: '.$nombre.'
        <br>Fecha de Nacimiento: '.$fechaNac.'
        <br>Cantidad de Hijos: '.$cantHijos.'</p>';
      }
    ?>
  </body>
</html>
