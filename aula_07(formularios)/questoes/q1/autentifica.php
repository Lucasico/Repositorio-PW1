<?php
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);

    if(!isset($_POST['enviar'])){
        header("Location:form.php?msg=erro_campo_vazio");
    }elseif($senha == md5('lucas123') && $login == 'lucas'){
        header("Location: admArea.php");
    }else{
        header("Location:form.php?msg=erro_Login");
    }
?>