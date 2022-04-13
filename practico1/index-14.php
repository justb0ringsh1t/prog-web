<?php
  $entrada = readline("Ingrese a, b y c (separados por espacios): ");
  $valores = explode(" ", $entrada);

  $a = $valores[0];
  $b = $valores[1];
  $c = $valores[2];

  $discriminante = ($b*$b)+(-4*$a*$c);
  $solucion;  

  if($discriminante < 0) 
    $solucion = 'No hay solucion';
  elseif($discriminante == 0) 
    $solucion = 'x1 = ' . (-$b + sqrt($discriminante))/(2*$a);
  else $solucion = 
    'x1=' . (-$b + sqrt($discriminante))/(2*$a) . ' x2=' . (-$b - sqrt($discriminante))/(2*$a);

  echo $solucion;

?>