<?php
//definindo tipo especifico, para
//o parametro das funções do codigo
//declare(strict_types=1);
function mult($a, int $b):int{
  //o :int{ especifica o tipo de retorno da função}
  return $a . $b;
}
print mult("valor: ",4);
//observe o erro da operação acima trabalhada
?>

