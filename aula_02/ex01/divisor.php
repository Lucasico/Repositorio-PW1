<?php
  $divisor = $_GET['divisor'];
  $retorno = "Sim é divisivel";
  if($divisor % 5 == 0 || $divisor % 10 == 0 || $divisor % 2 == 0){
    echo $retorno; 
  }else{
    echo "Não é divisivel";
  }
?>