<?php
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  //isset serve para verificar se existe
  if(!isset($_POST['enviar'])){
      header("Location: index.html");
  }
  if($login == "lucas" && $senha == "lucas123"){
     header("Location: adminArea.php");
  }else{
     header("Location: index.html");
  }
    

?>
