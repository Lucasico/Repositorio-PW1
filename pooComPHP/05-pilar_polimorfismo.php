<?php
  /*
  POLIMORFISMO
  é utilizado nos casos onde se tem o uso da herança
  e deseja-se sobrescrever métodos, com o uso do 
  polimorfismo.
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

    function trocarMarcha(){

      echo 'Desengatar marcha com o pé e engatar marchar com a mão';

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

      function trocarMarcha(){
        echo 'Desengatar marcha com a mão e engatar marchar com o pé';
      }
  }
  
  $carro = new Car('LUC123', 'Branco');
  $carro->trocarMarcha();
  echo '<hr />';
  $moto = new Moto('ABC321', 'Vermelho');
  $moto->trocarMarcha();
?>
