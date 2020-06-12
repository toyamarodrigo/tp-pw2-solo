<?php
function cortar($productos, $maximo = 33)
{

  $cantidad = strlen($productos);

  if ($cantidad > $maximo) {
    $maximo = $maximo - 3;
    $a = cut_html(substr($productos, 0, $maximo));
    $a .= "..."; //$a = $a . "...";
    return $a;
  } else {
    return $productos;
  }
}

function cut_html($productos)
{
  $a = $productos;

  while ($a = strstr($a, '&')) {
    $b = strstr($a, ';');
    if (!$b) {
      $nb = strlen($a);
      return substr($productos, 0, strlen($productos) - $nb);
    }
    $a = substr($a, 1, strlen($a) - 1);
  }
  return $productos;
}

?>