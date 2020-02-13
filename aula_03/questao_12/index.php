<?php
//Exiba todos os múltiplos de 3 de 0 a 100;
echo"<h3>Exiba todos os múltiplos de 3 de 0 a 100</h3>";
$i = 0;
while($i <= 100){
  if($i % 3 == 0){
    echo"<br> $i é divisor de 3";
  }
  $i++;
}
?>