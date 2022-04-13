<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 18</title>
</head>
<body>
  <?php
    for($i = 0; $i <= 100; $i++)
      echo ($i % 2 != 0) ? $i . " " : "";

    echo '<br><hr><br>';

    for($i = 0; $i <= 100; $i++)
      echo ($i % 2 == 0) ? $i . " " : "";
  ?>
</body>
</html>