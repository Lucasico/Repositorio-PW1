<?php

  class Funcionario{

    //atributos
     public $nome = null;
     public $telefone = null;
     public $numFilhos = 0;

    //overload: é uma forma de fazer get e set mais rapido e dinamico
    //veja que estou dizendo que o atributo x recebe o valor y, ou seja, um set
                  //nome      lucas
    function __set( $atributo, $value ){
      $this->$atributo = $value;
    }

    //veja que estou dizendo que o atribulto X, esta sendo retornado...
    function __get( $atributo ){
      return $this->$atributo;
    }
    
    //métodos
    function resumirCadFunc(){
      $nome = $this->__get('nome');
      $numFilhos = $this->__get('numFilhos');
      return 'Nome: ' . $nome . "<br />" . ' quantidade de filhos: ' . $numFilhos;
      
    } 

    function modificarNumFilhos( $numFilhos ){
      //atributo numFilhos = recebeu $numFilhos
      $this->__set('numFilhos',$numFilhos);

    }

  }

  //criando uma instancia do objeto
  $funcionario = new Funcionario();
                      //atri //valr
  $funcionario->__set('nome','lucas');
  $funcionario->__set('numFilhos',2);
  echo $funcionario->resumirCadFunc();
  echo "<hr />";

?>