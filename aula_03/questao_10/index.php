<?php
echo "<h3> Sorteie números aleatórios de 0 a 100, vá somando os números 
sorteados e imprimindo cada soma na tela. Só pare quando passar de 1.000</h3>";
$somaAleatorio = 0;
$quantSoma = 1 ;
while($somaAleatorio <= 1000){
  $numeroAleatorio = rand(0,100);
  $somaAleatorio = $somaAleatorio + $numeroAleatorio;
  echo "<br>$quantSoma ºsoma aleatoria: $somaAleatorio";
  $quantSoma++;
}
?>