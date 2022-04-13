<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 20</title>
</head>
<body>
  <form action="index-20.php" method="post">
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
      $factorial = 1;

      for ($i=$num; $i > 1; $i--) 
        $factorial *= $i;
        
      echo $factorial;
      
    }
  ?>
</body>
</html>