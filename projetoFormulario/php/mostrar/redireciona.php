<?php
   $path = $_SERVER['DOCUMENT_ROOT'] . '/dashboard/progWeb1/Repositorio-PW1/projetoFormulario';
   require_once($path . '/php/processar/processar.php');
   
  //require_once($path . "/processar/processar.php");
  $retorno = verificarPostEnviado($_POST);
  verificaRetorno($retorno);
  $protocolo = gerarProtocolo();
  $dataRequerimento = geraData();
  
  function verificaRetorno($retorno){
    foreach($retorno['ERROS'] as $ret){
      if($ret != NULL){
         header('Location:../../index.php');
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

?>