<?php
// Exiba a soma de todos os múltiplos de 7 de 0 a 10000;
echo"<h3>Exiba a soma de todos os múltiplos de 7 de 0 a 10000;</h3>";
$i = 0;
$somaDivisor = 0;
while($i <= 1000){
  if($i % 7 == 0){
    $somaDivisor = $somaDivisor + $i;
    echo"<br> soma dos multiplos de 7: $somaDivisor";
  }
  $i++;
}
?>