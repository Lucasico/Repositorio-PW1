<?php
/**
 * a linguagem PHP é fracamente tipada
 * e permite a redeclaração de variável
 * a qualquer momento.
 */
$nome = "Santos";
function mostrarNome(){
  //so foi alterada dentro do escopo
  //da função
  $nome = "Lucas";
  echo $nome;
}
mostrarNome();
echo " / ";  
echo $nome;
?>