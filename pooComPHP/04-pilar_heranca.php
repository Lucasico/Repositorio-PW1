<?php
  /*
    para se utilizar a herança deve-se ser possivel abstrair
    caracteristicas comuns entre os elementos constituintes
    das classes filhas
    vantagens: reutilizável, manuntenção
  */
  class veiculo{

    public $plate = null;
    public $color = null;

    function acelerar(){

      echo 'Acelerar';

    }

    function freiar(){

      echo 'Parando';

    }

  }

  class Car extends veiculo{

      function __construct($plate, $color){
        $this->plate = $plate;
        $this->color = $color;
      }

      public $sunroof = true;

      function abrirTetoSolar(){
        echo 'abrir teto solar';
      }

      function alterarPosicaoVolante(){
        echo 'alterar posição do volante';
      }
  }

  class Moto extends veiculo{

      function __construct($plate, $color){
        $this->plate = $plate;
        $this->color = $color;
      }

      public $contraPesoGuidao = true;

      function empinar(){
        echo 'Segura pião';
      }
  }
  
  $carro = new Car('LUC123', 'Branco');
  $moto = new Moto('ABC321', 'Vermelho');

  echo '<pre>';
    print_r($carro);
    print_r($moto);
  echo '<pre />';

  echo '<hr>';

  echo $carro->abrirTetoSolar() . '<br />';
  echo $carro->alterarPosicaoVolante() . '<br />';
  echo $carro->acelerar() . '<br />';
  echo $carro->freiar() . '<br />';

  echo '<hr>';

  echo $moto->empinar() . '<br />';
  echo $moto->acelerar() . '<br />';
  echo $moto->freiar() . '<br />';
?>