<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">

  <title>Upload foto</title>
</head>
<body>
  <span>PROFILE PHOTO</span>
  <div id="photoProfile">
    <div class="photo">
      <?php
          if(isset($_GET['msg'])){
            $acao = $_GET['msg'];
            if($acao == 'ERROR2'){
              $acao = "Erro ao enviar imagem";
              echo "<p>$acao</p>";
            }else{
              $acao = "Imagem não selecionada";
              echo "<p>$acao</p>";
            } 
          }

          if(isset($_GET['imageProfile'])){
            $dir = 'image/';
            echo '<img src="'.$dir.$_GET['imageProfile'].'">';
          }
      ?>
    </div>
  </div>

  <div class="formUploadImage">
    <form action="#" method="POST" enctype="multipart/form-data">
      <samp>Upload photo </samp><input type="file" name="uploadImage">
      <input type="submit" name="submit" value="enviar">
    </form>
  </div>

  <footer class="footer">Developed by Lucas Santos, web developed full stack</div>
</body>
</html>

<?php
  if(isset($_FILES['uploadImage'])){
    if(!$_FILES['uploadImage']['error']){
      
      $retorno = false;
       //O nome original do arquivo na máquina do cliente
       $name = $_FILES['uploadImage']['name'];
      //diretoria a ser salvo
      $dir = 'image/';
      //movendo o arquivo do armazenamento local temporario para o diretorio desejado
      $retorno = move_uploaded_file($_FILES['uploadImage']['tmp_name'],$dir.$name);
      header("Location:index.php?imageProfile=$name");
    }else{
      header("Location:index.php?msg=ERROR1!");
    }
  }
?>

       
    