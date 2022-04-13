<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 5</title>
  </head>
  <body>
    <form action="index-5.php" method="post">
      <!-- NOMBRE -->
      <label for="txt-nombre">Ingrese su nombre:</label><br />
      <input type="text" name="nombre" id="txt-nombre" required="true" /><br />
      <!-- APELLIDO -->
      <label for="txt-apellido">Ingrese su apellido:</label><br />
      <input type="text" name="apellido" id="txt-apellido" required="true" /><br />
      <!-- BOTON -->
      <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
    </form>
    <br />
    <hr />
    <br />
    <?php
      if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $apellido =  $_POST['apellido'];

        echo '<p>'.$nombre.' '.$apellido.'</p>';
        echo '<p>'.strtoupper($nombre[0]).'.'.strtoupper($apellido[0]).'</p>';
        echo '<p>'.$nombre.' tiene '.strlen($nombre).' caracteres y '
        .$apellido.' tiene '.strlen($apellido).' caracteres</p>';
      }
    ?>
  </body>
</html>
