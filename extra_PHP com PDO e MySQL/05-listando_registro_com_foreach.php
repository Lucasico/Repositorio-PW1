<?php
$cdn = 'mysql:host=localhost;dbname=php_com_pdo';
$user = 'root';
$password = '';
try {
  $conection =  new PDO($cdn, $user, $password);

  $query = 'SELECT * FROM usuarios';

 // $return = $conection->query($query);
  
  // $list_return = $return->fetchAll(PDO::FETCH_OBJ);

  // //forma de recuperação utilizando foreach
  // foreach ($list_return as $key => $value) {
  //   echo $value->nome;
  //   echo "<hr>";
  // }

  //outra forma que acho menos elegante
  foreach ($conection->query($query) as $key => $value) {
    print_r($value['email']);
    echo '<hr>';
  }

} catch (\PDOException $e) {
  $message = $e->getMessage();
  $code = $e->getCode();

  echo 'Erro: ' . $message . ' Código: ' . $code;
}
