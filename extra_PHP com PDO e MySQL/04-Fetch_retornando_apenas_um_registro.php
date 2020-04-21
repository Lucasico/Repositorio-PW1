<?php
$cdn = 'mysql:host=localhost;dbname=php_com_pdo';
$user = 'root';
$password = '';
try {
  $conection =  new PDO($cdn, $user, $password);

  $query = 'SELECT * FROM usuarios WHERE id = 8';

 $return = $conection->query($query);
  //usa-se o metodo fetch para retorna apenas um objeto
 $exibir = $return->fetch(PDO::FETCH_OBJ);
 echo '<pre>';
  print_r($exibir) . '<br>';
  echo $exibir->nome;
 echo '</ pre>';
    
} catch (\PDOException $e) {
  $message = $e->getMessage();
  $code = $e->getCode();

  echo 'Erro: ' . $message . ' Código: ' . $code;
}
