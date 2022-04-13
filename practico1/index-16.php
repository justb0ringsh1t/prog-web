<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 16</title>
  </head>
  <body>
    <form action="index-16.php" method="post">
      <!-- PAIS -->
      <label for="txt-pais">Ingrese un pais:</label><br />
      <input type="text" name="pais" id="txt-pais" required="true" /><br />
      <!-- BOTON -->
      <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
    </form>
    <br />
    <hr />
    <br />
    <?php
      if(isset($_POST['submit'])){
        $pais = $_POST['pais'];

        switch($pais){
          case 'Argentina':
            echo 'Buenos Aires';
            break;
          case 'Brasil':
            echo 'Brasilia';
            break;
          case 'Paraguay ':
            echo 'Asuncion';
            break;
          case 'Uruguay':
            echo 'Montevideo';
            break;
          case 'Venezuela':
            echo 'Caracas';
            break;
          default:
            echo "Error, {$pais} no pertenece al Mercosur";
            break;
        }
      }
    ?>
  </body>
</html>