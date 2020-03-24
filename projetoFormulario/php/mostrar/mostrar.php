<?php

  require_once("../processar/processar.php");
  $retorno = verificarPostEnviado($_POST);
  verificaRetorno($retorno);
  $protocolo = gerarProtocolo();
  $dataRequerimento = geraData();
  
  
  function verificaRetorno($retorno){
      foreach($retorno['ERROS'] as $ret){
          if($ret != NULL){
            header('Location:../../index.php?error');
          }
      }
  }

  function gerarProtocolo(){
    $protocolo = rand(3, 100000);
    return $protocolo;
  }

  function geraData(){
    return date('d/m/o');
  }

  include "header.php";
  include "form.php";
  include "footer.php";
?>