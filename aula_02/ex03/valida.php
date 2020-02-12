<?php
$nome  = $_GET['nome'];
$sexo  = $_GET['sexo'];
$idade = $_GET['idade'];

if($sexo == "F" && $idade < 18){
  echo "<h3> acesso proibido para $nome</h3>";
}else{
  echo "<h3> acesso valido para $nome</h3>";
}

?>