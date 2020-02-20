<?php
//entender o escopo da função
$nome = "Lucas";
//isso SIM é o certo
//function escreverNome($n)
function escreverNome(){
  //isso não é interesante
  global $nome;
  $nome = "Eva";
  echo $nome;
}
escreverNome();
//escreverNome($nome);
echo $nome;
?>