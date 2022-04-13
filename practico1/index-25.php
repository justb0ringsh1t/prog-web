<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 25</title>
</head>
<body>
  <form action="index-25.php" method="post">
    <!-- NUMERO -->
    <label for="txt-numero1">Ingrese el numero:</label><br />
    <input type="number" name="numero1" id="txt-numero1" required="true" /><br />
    <!-- NUMERO2 -->
    <label for="txt-numero2">Ingrese el exponente:</label><br />
    <input type="number" name="numero2" id="txt-numero2" required="true" /><br />
    <!-- BOTON -->
    <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
  </form>
  <br>
  <hr>
  <br>
  <?php
    if(isset($_POST['submit'])){
      $base = $_POST['numero1'];
      $exponente = $_POST['numero2'];

      echo potencia($base, $exponente); 
    }

    function potencia($base, $exponente){
      $resultado = 1;
      if($exponente != 1) for ($i=0; $i < $exponente; $i++) $resultado *= $base;   
      return $resultado;
    }
  ?>
</body>
</html>