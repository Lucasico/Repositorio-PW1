<?php

  class Funcionario{

    //atributos
     private $nome = null;
     private $telefone = null;
     private $numFilhos = 0;

    //get e set

    //setando valores aos atributos
    function setNome($nome){
      $this->nome = $nome;
    }

    function setTelefone($telefone){
      $this->telefone = $telefone;
    }

    function setNumFilhos($numFilhos){
      $this->numFilhos = $numFilhos;
    }

    //retornando valores dos atributos
    function getNome(){
      return $this->nome;
    }

    function getNumFilhos(){
      return $this->numFilhos;
    }

    function getTelefone(){
      return $this->telefone;
    }

    //métodos
    function resumirCadFunc(){
      $nome = $this->getNome();
      $numFilhos = $this->getNumFilhos();
      return 'Nome: ' . $nome . "<br />" . ' quantidade de filhos: ' . $numFilhos;
    } 

    function modificarNumFilhos($numFilhos){
      //atributo numFilhos = recebeu $numFilhos
      $this->setNumFilhos($numFilhos);
      $nome = $this->getNome();
      $numFilhos = $this->getNumFilhos();
      return 'O funcionario ' . $nome . ' tem: ' . $numFilhos . ' filhos';

    }

  }
  //criando uma instancia do objeto
  $funcionario = new Funcionario();
  $funcionario->setNome('Lucas');
  $funcionario->setNumFilhos(2);
  echo $funcionario->modificarNumFilhos(4);
  
  echo "<hr />";
?>