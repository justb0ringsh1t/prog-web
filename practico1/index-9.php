<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 9</title>
  </head>
  <body>
    <form action="index-9.php" method="post">
      <!-- NUMERO 1 -->
      <label for="txt-numero1">Ingrese su número:</label><br />
      <input type="number" name="numero1" id="txt-numero1" required="true" /><br />
      <!-- NUMERO 2 -->
      <label for="txt-numero2">Ingrese otro número:</label><br />
      <input type="number" name="numero2" id="txt-numero2" required="true" /><br />
      <!-- BOTON -->
      <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
    </form>
    <br />
    <hr />
    <br />
    <?php
      if(isset($_POST['submit'])){
        $a = $_POST['numero1'];
        $b =  $_POST['numero2'];

        if($a == 0){
          echo "<p>El divisor no puede ser 0</p>";
        }else{
          echo "<p>Dividir {$a} entre {$b} da como resultado " . ($a/$b) . " con resto " . ($a%$b) . "</p>";
        }
      }
    ?>
  </body>
</html>
