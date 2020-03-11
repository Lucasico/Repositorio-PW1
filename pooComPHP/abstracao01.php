<?php

  class Funcionario{

    //atributos
     public $nome = null;
     public $telefone = null;
     public $numFilhos = 0;


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
      $this->numFilhos = $numFilhos;

    }

  }
  //criando uma instancia do objeto
  $funcionario = new Funcionario();
  $funcionario->setNome('Lucas');
  $funcionario->setNumFilhos(2);
  echo $funcionario->resumirCadFunc();
  echo "<hr />";
?>