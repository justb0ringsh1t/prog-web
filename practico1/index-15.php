<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 15</title>
</head>
<body>
  <?php
    enum Dia
    {
      case Domingo;
      case Lunes;
      case Martes;
      case Miercoles;
      case Jueves;
      case Viernes;
      case Sabado;
    }

    enum Mes
    {
      case Enero;
      case Febrero;
      case Marzo;
      case Abril;
      case Mayo;
      case Junio;
      case Julio;
      case Agosto;
      case Septiembre;
      case Octubre;
      case Noviembre;
      case Diciembre;
    }

    $mes = Mes::Febrero;
    $dia = Dia::Domingo;

    echo $dia->name.' '.$mes->name;

  ?>
</body>
</html>