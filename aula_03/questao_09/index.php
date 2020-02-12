<?php
echo"<h3> Sorteie números aleatórios de 0 a 50, imprima todos na tela e só pare
 quando o número sorteado for 37</h3>";
 $controle = 37;
 $numeroAleatorio = 0;
 while($numeroAleatorio != $controle){
   $numeroAleatorio = rand(0,50);
   echo"<br> Numero gerado: $numeroAleatorio";
 }


?>