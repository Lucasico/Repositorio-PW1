<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedidos</title>
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

</head>
<body>  
<div class="container">
       <div class="box">
        <ul>
          <?php
            require_once ( "../validar/variaveis.php" );
            require_once ( "../validar/funcoes.php" );

            formEnviado($_POST);
            gerarMensagensErro($dados);
            $camposVazios;
            foreach($mensagem_erro['ErrosList'] as $erros){
                if($erros != NULL){
                  $camposVazios = $erros;
                  echo"<li>";
                    echo $erros;
                  echo"</li>";              
                }
            }
            
            //se os campos da variavel $camposVazios forem nulos
            if(empty($camposVazios)){
             foreach($dados as $d){
               echo"<pre>";
                  print_r($d);
               echo"</pre>";
             }
            
            }
           
          ?>
        </li>
       </div>
</div>
</body>
</html>

  