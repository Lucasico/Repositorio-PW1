<?php
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  $soma = $num1 + $num2;
  if($soma > 20){
    $soma = $soma + 8;
    echo $soma;
  }else if($soma <= 20){
    $soma = $soma - 5;
    echo $soma;
  }

?>