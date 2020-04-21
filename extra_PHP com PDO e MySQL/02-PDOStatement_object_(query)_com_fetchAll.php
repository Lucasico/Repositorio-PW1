<?php
try {
  $dns = 'mysql:host=localhost;dbname=php_com_pdo';
  $usuario = 'root';
  $senha = '';

  $conexao = new PDO($dns, $usuario , $senha);

  $query = 'select * from usuarios';
  //PdoStatement
  $statement =  $conexao->query($query);
  //me retorna todos os registros da consulta
  $retorno = $statement->fetchAll();
  echo "<pre>";
    print_r($retorno);
  echo "<pre />";

  //so para teste arrayExterno na posição 0 e arrayInterno na posição 'email';
  print_r($retorno[0]['email']);

} catch (\ PDOException $e) {
  $codigo = $e->getCode();
  $mensagemErro = $e->getMessage();
  echo 'Erro: ' . $mensagemErro . '<br />' . ' Codigo: ' . $codigo;
}

?>