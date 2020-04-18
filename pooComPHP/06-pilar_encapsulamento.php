<?php
  /*
    - As visibilidades dizer o que esta disponivel no sistema
    - controlar a vizibilidade dos metodos e atributos
    - Public-> disponivel para toda aplicação e para outros objetos
    - Protected-> Semelhante ao privado, visivel as classe filhas
    - Private-> disponivel apenas para a propria class, nem as classes
    filhas tem acesso

    private e protect: so são acessados pelos Gets e Sets da propria class,
    sendo assim metodos publicos que alteram privados é possivel.
  */
  class Pai{
    private $nome = 'lucas';
    protected $sobrenome = 'bezerra';
    public $humor = 'feliz';

      PUBLIC FUNCTION __GET($ATRIBUTO){
       RETURN $this->$ATRIBUTO;
      }

      PUBLIC FUNCTION __SET($ATRIBUTO, $VALOR){
        $this->$ATRIBUTO = $VALOR;
     }

      private function executarMania(){
        echo 'Assoviar';
      }

    protected function responder(){
      echo 'oii';
    }
    /*
      funciona como se fosse uma interface
      chamando um método publico para se 
      chamar um privado ou protect
    */
    public function executarAcao(){
      $this->executarMania();
    }
  }

  class Filho extends Pai{

  }
  $pai = new Pai();
  //utilizando a sobrecarga o proprio PHP, se responsabiliza por pega e passar
  //o get e set
  //com isso não precisa disso: echo $pai->get('nome') ou set.
  echo $pai->nome . '<br />';
  $pai->nome = 'lucio';
  //
  $pai->executarAcao();