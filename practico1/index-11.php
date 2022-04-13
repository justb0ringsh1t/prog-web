<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 11</title>
  </head>
  <body>
    <form action="index-11.php" method="post">
      <!-- LADO AB -->
      <label for="txt-ab">Ingrese el lado AB:</label><br />
      <input type="number" name="ab" id="txt-ab" required="true" min="0" /><br />
      <!-- LADO BC -->
      <label for="txt-bc">Ingrese el lado BC:</label><br />
      <input type="number" name="bc" id="txt-bc" required="true" min="0" /><br />
      <!-- LADO CA -->
      <label for="txt-ca">Ingrese el lado CA:</label><br />
      <input type="number" name="ca" id="txt-ca" required="true" min="0" /><br />
      <!-- BOTON -->
      <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
    </form>
    <br />
    <hr />
    <br />
    <?php
      if(isset($_POST['submit'])){
        $ab = $_POST['ab'];
        $bc = $_POST['bc'];
        $ca = $_POST['ca'];
        $tipo;

        if($ab == $bc && $ab == $ca) $tipo = 'equilatero';
        elseif($ab == $bc || $bc == $ca || $ca == $ab) $tipo = 'isoseles';
        else $tipo='escaleno';
        
        echo "El triangulo es: {$tipo}";
      }
    ?>
  </body>
</html>
