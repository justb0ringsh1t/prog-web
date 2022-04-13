<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 24</title>
</head>
<body>
  <form action="index-24.php" method="post">
    <!-- NUMERO -->
    <label for="txt-numero">Ingrese el numero a calcular la factorial:</label><br />
    <input type="number" name="numero" id="txt-numero" required="true" /><br />
    <!-- BOTON -->
    <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
  </form>
  <br>
  <hr>
  <br>
  <?php
    if(isset($_POST['submit'])){
      $num = $_POST['numero'];
      echo factorial($num);
    }

    function factorial($a){
      if($a == 0) return 1;
      else return $a * factorial($a-1);
    }
  ?>
</body>
</html>