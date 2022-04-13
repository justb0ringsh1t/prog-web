<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 12</title>
  </head>
  <body>
    <form action="index-12.php" method="post">
      <fieldset>
        <legend>Obligatorios</legend>
        <!-- OBLIGATORIO1 -->
        <label for="txt-obligatorio1">Ingrese la nota del primer obligatorio:</label><br />
        <input type="number" name="obligatorio1" id="txt-obligatorio1" required="true" min="0" max="10" /><br />
        <!-- OBLIGATORIO2 -->
        <label for="txt-obligatorio2">Ingrese la nota del segundo obligatorio:</label><br />
        <input type="number" name="obligatorio2" id="txt-obligatorio2" required="true" min="0" max="10" /><br />
        <!-- OBLIGATORIO3 -->
        <label for="txt-obligatorio3">Ingrese la nota del tercer obligatorio:</label><br />
        <input type="number" name="obligatorio3" id="txt-obligatorio3" required="true" min="0" max="10" /><br />
      </fieldset>
      <!-- PRUEBA -->
      <label for="txt-prueba">Ingrese la nota de la prueba:</label><br />
      <input type="number" name="prueba" id="txt-prueba" required="true" min="0" max="50" /><br />
      <!-- SEGUNDO OBLIGATORIO -->
      <label for="txt-segObligatorio">Ingrese la nota del otro obligatorio:</label><br />
      <input type="number" name="segObligatorio" id="txt-segObligatorio" required="true" min="0" max="20" /><br />
      <!-- BOTON -->
      <input type="submit" value="Mostrar" id="btn-submit" name="submit" />
    </form>
    <br />
    <hr />
    <br />
    <?php
      if(isset($_POST['submit'])){
        $ob1 = $_POST['obligatorio1'];
        $ob2 = $_POST['obligatorio2'];
        $ob3 = $_POST['obligatorio3'];
        $prueba = $_POST['prueba'];
        $segOb = $_POST['segObligatorio'];

        $total = $ob1 + $ob2 + $ob3 + $prueba + $segOb;

        if($total >= 70) echo "Juicio: Exonerado";
        else echo "Jucio: Se fue a examen";
        
      }
    ?>
  </body>
</html>
