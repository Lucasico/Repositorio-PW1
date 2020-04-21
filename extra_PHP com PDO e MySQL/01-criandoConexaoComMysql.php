<?php
  /*
    parametros 
    1 - data source name = driver de conexão
    2 - usuario do banco
    3 - senha do usuario
  */

  $dns = 'mysql:host=localhost;dbname=php_com_pdo';
  $user = 'root';
  $password = '';
  try {
   $conexao = new PDO($dns, $user, $password);

   //Aula 02 executando instruções SQL, atravez do método execs
  //obs.: Só é recomendado utilizar este comando quando a nossa 
  //aplicação tenha a logica por criação de tabelas.

   $query = 'create table usuarios(
      id int not null primary key auto_increment,
      nome varchar(50) not null,
      email varchar(100) not null,
      senha varchar(32) not null
   )';
   //para criar a estrutura da tabela é me retornado um 0
   //para buscas table me retorna um 0
   //agora pra update ou delete, insert é me retornado o total de linhas da modificação
   $retorno = $conexao->exec($query);
   //outro teste
  $query = 'insert into usuarios(
               nome, email, senha
           ) values (
               "Lucas Bezerra",
               "lucasico85@gmail.com",
              "123adm"
   )';
   $retorno = $conexao->exec($query);

  $query = 'insert into usuarios(
               nome, email, senha
           ) values (
               "paulo Bezerra",
               "paulo123@gmail.com",
              "123adm2"
   )';
  $retorno = $conexao->exec($query);

  $query = 'insert into usuarios(
               nome, email, senha
           ) values (
               "Joao Bezerra",
               "Joao@gmail.com",
              "123adm1"
   )';
  $retorno = $conexao->exec($query);
   echo $retorno;
  } catch (PDOException $e) {   
      //percebe-se que todos os atributos são privado, logo
      //para acessa-los deve utilizar metodos publico, quais?
      //php.net->pdo->pdoException, logo
      $codigo = $e->getCode();
      $mensagemErro = $e->getMessage();
      echo 'Erro: ' . $mensagemErro . '<br />' . ' Codigo: ' . $codigo;
      //posso armazenar o erro, para possivel correção
      //posso criar uma class para retorno de erros personalizados
      //posso redirecionar o cliente para uma outra tela, para simplesmente não quebrar a aplicação
      //posso inserir links uteis e por ai vai
   
  }

?>