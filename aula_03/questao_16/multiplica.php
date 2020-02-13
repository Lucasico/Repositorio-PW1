<?php
$valor = $_GET['valor'];
$multiplica = 1;
$i = 1;
echo"<h3>Tabulada de multiplicação de $valor</h3>"; 
while($i <= 10){
    $multiplica = $valor * $i;
    echo "<br> $valor X $i = $multiplica";
    $i++;
}
?>