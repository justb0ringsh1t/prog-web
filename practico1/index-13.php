<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 13</title>
</head>
<body>
  <form action="index-13.php" method="post">
    <!-- DIA -->
    <label for="txt-dia">Ingrese el dia:</label><br />
    <input type="number" name="dia" id="txt-dia" required="true" /><br />
    <!-- MES -->
    <label for="txt-mes">Ingrese el mes:</label><br />
    <input type="number" name="mes" id="txt-mes" required="true" /><br />
    <!-- AÑO -->
    <label for="txt-anio">Ingrese el año:</label><br />
    <input type="number" name="anio" id="txt-anio" required="true" /><br />
    <!-- BOTON -->
    <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
  </form>
  <br />
  <hr />
  <br />
  <?php
    if(isset($_POST['submit'])){
      $dia = $_POST['dia'];
      $mes = $_POST['mes'];
      $anio = $_POST['anio'];
      
      if(!checkdate($mes, $dia, $anio)) echo "No es una fecha valida";
      elseif($anio%4==0) echo "Es un año bisiesto";
    }
  ?>
</body>
</html>