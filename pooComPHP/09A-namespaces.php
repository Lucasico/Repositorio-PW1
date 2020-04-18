<?php
  //namespace é utilizado para evitar conflitos entre classe
  //com mesmo nome por exemplo, uma biblioteca com classes com mesmo nome
  //este funciona como um diferenciador de nomes

  //A primeiro momento ocorreria um erro por conta dos nomes
  namespace A;
  class Pessoa implements CadastroInterface{
    public $name = 'Bezerra';
    public function __get($name)
    {
      return $this->$name;
    }

    public function cadastrar()
    {
      
    }
  }

  interface CadastroInterface{
    public function cadastrar();
  }
  //agora não existe mais o error!
  namespace B;
class Pessoa implements CadastroInterface
{
  public $name = 'Lucas';
  public function __get($name)
  {
    return $this->$name;
  }

  public function remover()
  {
    
  }
}
interface CadastroInterface
{
  public function remover();
}


//veja que nesta instancia do objeto, sera retornado os elementos
//referentes a ele
$pessoaB = new Pessoa;
print_r($pessoaB);

//agora caso queira os itens referentes ao namespace A devo, referenciar ele
// com \name\name
echo '<br />';
$pessoaA = new \A\Pessoa;
print_r($pessoaA);
?>