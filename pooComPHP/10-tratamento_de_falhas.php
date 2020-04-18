<?php
  //tente do erro
  try {
    //codigo sensivel a falhas
    echo '<h3> try de erro com cath <h3>';
    //exemplo para força de erro pro cath pegar
    $sql = 'select * from clientes';
    mysql_query($sql);//erro para força o cath
    //pegar o erro
  } catch (Error $e) {
    echo 'Cath do ' . $e;
    //armazenar esses erros em banco de dados para possiveis futuras, tratativas
  }
    //Quando se tem o uso do try e cath o uso do finally se torna opcional
    echo '<h3> Continua com a logica da aplicação normalmente <h3>';

  //-------------------------------------------------------------------------

  //tente da exceção
  try {
    //esse arquivo não existe
    if( !file_exists('require file.php') ){

      throw new Exception("Arquivo indiponivel na data: " . date('d/m/Y H:i:s'), 1);
      //armazenar esses erros em banco de dados para possiveis futuras, tratativas
          
    }
  } catch (Exception $e) {
    echo  'Cath do '. $e;
  }
  //com uso do cath o finally torna-se opcional.
?>