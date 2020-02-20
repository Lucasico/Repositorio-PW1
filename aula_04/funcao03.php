<?php
/**
 * Passagem de parametro
 * para funções em PHP, muito similar a C
 */
$nome = "Lucas";
function  escreverNome($n){
  $n = "Bezerra";
  print $n;
  //para retornar vazio
  //return;
}
print $nome;
escreverNome($nome);


?>