<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 22</title>
</head>
<body>
  <form action="index-22.php" method="post">
    <!-- NUMERO1 -->
    <label for="txt-numero1">Ingrese un numero:</label><br />
    <input type="number" name="numero1" id="txt-numero1" required="true" /><br />
    <!-- NUMERO2 -->
    <label for="txt-numero2">Ingrese un numero:</label><br />
    <input type="number" name="numero2" id="txt-numero2" required="true" /><br />
    <!-- NUMERO3 -->
    <label for="txt-numero3">Ingrese un numero:</label><br />
    <input type="number" name="numero3" id="txt-numero3" required="true" /><br />
    <!-- NUMERO4 -->
    <label for="txt-numero4">Ingrese un numero:</label><br />
    <input type="number" name="numero4" id="txt-numero4" required="true" /><br />
    <!-- NUMERO5 -->
    <label for="txt-numero5">Ingrese un numero:</label><br />
    <input type="number" name="numero5" id="txt-numero5" required="true" /><br />
    <!-- BOTON -->
    <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
  </form>
  <br />
  <hr />
  <br />
  <?php
    if(isset($_POST['submit'])){
      $num1 = $_POST['numero1'];
      $num2 = $_POST['numero2'];
      $num3 = $_POST['numero3'];
      $num4 = $_POST['numero4'];
      $num5 = $_POST['numero5'];
      
      $numeros = array($num1,$num2,$num3,$num4,$num5);
      $pares = 0;
      $impares = 0;
      
      for ($i=0; $i < count($numeros); $i++) { 
        if(esPar($numeros[$i])) $pares++;
        else $impares++;
      }
      echo "Pares: {$pares}<br>Impares: {$impares}";
    }

    function esPar($a){
      return $a%2==0;
    }
    ?>
</body>
</html>