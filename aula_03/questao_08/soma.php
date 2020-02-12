<?php
$somaAte = $_GET["somaAte"];

if($somaAte == 0){
  echo "Valor da soma: $somaAte";
  return -1;
  
}else{
  $i = 0;
  while($i <= $somaAte){
    $i = $i + $somaAte;
  }
  echo "Valor da soma: $i";
}
?>