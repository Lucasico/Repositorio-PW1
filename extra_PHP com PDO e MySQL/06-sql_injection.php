<?php
  if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
      $dns = 'mysql:host=localhost;dbname=php_com_pdo';
      $usuario = 'root';
      $senha = '';

      try {
        $conexao = new PDO($dns, $usuario, $senha);

        //query
        //nesta forma é perfeitamente possivel fazer com que a 
        //aplicação esteja vuneravel a injection SQL.
        $query = "SELECT * FROM usuarios WHERE";
        $query .= " email = :usuario ";
        $query .= " AND senha = :senha ";
        //vuneravel
        // $stmt =  $conexao->query($query);

        //tratando vunerabilidade
        //o prepare não execulta a query, até voce da a ordem para isso
        //agora vc vai preparar a query
        $stmt = $conexao->prepare($query);
        //esse valor após ser tratado internamente, pelo metodo bind,
        //removendo qualquer injection sql
        $stmt->bindValue(':usuario', $_POST['usuario']); 
        $stmt->bindValue(':senha', $_POST['senha']);
        //ou seja bind cria uma ligação para com a query definida,
        //aparti de uma variavel que tera o valor encaminhada, pelo post
        //ele internamente trata de analisar sql injections

        //tratada a query agr vc da um execute
        $stmt->execute();
        
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
        print_r($usuario);

      } catch (\PDOException $e) {
        echo 'ERRO: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL-INJECTION</title>
</head>
<body>
    <form method="POST" action="06-sql_injection.php">
      <input type="text" name="usuario" placeholder="usuário"><br><br>
      <input type="password" name="senha" placeholder="senha"><br>

      <button type="submit">ENTRAR</button>
    </form>
</body>
</html>