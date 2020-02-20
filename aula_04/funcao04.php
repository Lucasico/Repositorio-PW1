<?php
//definindo tipo especifico, para
//o parametro das funções do codigo
declare(strict_types=1);
function mult(int $a, int $b):int{
  //o :int{ especifica o tipo de retorno da função}
  return $a * $b;
}
print mult(2,4);
/**
 * tipos em php
 * interge
 * float
 * boolean
 * string
 * object
 * NULL
 * resource
 * ferramentas para debug
 * var_dump($valor) => para variaveis
 * die($a) => da um ok no que queres
 * print_r($array) => para arrays podendo ser de objetos.
 */
?>


