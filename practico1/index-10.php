<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 9</title>
  </head>
  <body>
    <form action="index-10.php" method="post">
      <!-- NOMBRE -->
      <label for="txt-nombre">Ingrese su nombre:</label><br />
      <input type="text" name="nombre" id="txt-nombre" required="true" /><br />
      <!-- EDAD -->
      <label for="txt-edad">Ingrese su edad:</label><br />
      <input type="number" name="edad" id="txt-edad" required="true" min="0" max="150" /><br />
      <!-- BOTON -->
      <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
    </form>
    <br />
    <hr />
    <br />
    <?php
      if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $edad =  $_POST['edad'];

        if($edad >= 18){
          echo "<p>Nombre: {$nombre}<br>Edad: {$edad}</p>";
        }else{
          echo "<p>No sos mayor de edad</p>";
        }
      }
    ?>
  </body>
</html>
