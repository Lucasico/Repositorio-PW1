<?php
  /*
    - As visibilidades dizer o que esta disponivel no sistema
    - controlar a vizibilidade dos metodos e atributos
    - Public-> disponivel para toda aplicação e para outros objetos
    - Protected-> Semelhante ao privado, visivel as classes filhas
    - Private-> disponivel apenas para a propria class, nem as classes
    filhas tem acesso

    private e protect: so são acessados pelos Gets e Sets da propria class

    A herança só herda os metodos/atributos public e protect, entretando
    posso acessar indiretamente os privados da classe pai, atraves de 
    metodos magicos ou metodos normais desde que este sejam publicos
    e estejam iniciados na class pai.
  */
  class Pai{
    private $nome = 'lucas';
    protected $sobrenome = 'bezerra';
    public $humor = 'feliz';

    public function __GET($ATRIBUTO)
    {
      return $this->$ATRIBUTO;
    }

    public function __SET($ATRIBUTO, $VALOR)
    {
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
    //  public function __getFilho($atributo){
    //    return $this->$atributo;
    //  }
  }
 
  $filho = new Filho();
  echo '<pre>';
  print_r($filho);
  echo '<pre />';
  echo '<br>';

  //ao tentar chamar o atributo privado herdado na class ocorre o erro, neste
  //com o método instanciado na class filha 
 // echo $filho->__get('nome');

  //entretanto atravez dos metodos magicos é possivel fazer a chamada deles,
  //desde que os mesmos estejam na class pai.
  echo $filho->__set('nome','juracir');
  echo $filho->__get('nome');
