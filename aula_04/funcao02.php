<?php
/**
 * a linguagem PHP é fracamente tipada
 * e permitite redeclaração de variavel
 * a qualquer momento.
 */
$nome = "Lucas";
function mostrarNome(){
  //so foi alterada dentro do escopo
  //da função
  $nome = "Santos";
  echo $nome;
}
mostrarNome();
echo " / ";  
echo $nome;
?>