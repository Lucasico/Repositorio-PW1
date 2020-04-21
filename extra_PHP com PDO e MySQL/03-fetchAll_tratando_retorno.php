<?php
$cdn = 'mysql:host=localhost;dbname=php_com_pdo';
$user = 'root';
$password = '';
try {
  $conection =  new PDO($cdn, $user, $password);

  $query = 'select * from usuarios';

 $return = $conection->query($query);

 //aula 03 - tratar possiveis retornos no fetchAall
 //retorno numerico e associativo = fetchAll() ou fetchAll(PDO::FETCH_BOTH)
 //retorno numerico = fetchAll(PDO::FETCH_NUM)
 //retorno associativo = fetchAll(PDO::FETCH_ASSOC)
 //retorno de objeto = fetchAll(PDO::FETCH_OBJ)

 $exibir = $return->fetchAll(PDO::FETCH_OBJ);
 echo '<pre>';
  print_r($exibir);
 echo '</ pre>';
 //tipos diferentes de retorno
 //1 - array com indices associativos
    //echo $exibir[1]['email'];
 //2 - array com indices numericos
    //echo $exibir[1][1];
 //3 - array com retorno de objetos
    //echo $exibir[1]->email;
    
} catch (\PDOException $e) {
  $message = $e->getMessage();
  $code = $e->getCode();

  echo 'Erro: ' . $message . ' Código: ' . $code;
}
 
?>