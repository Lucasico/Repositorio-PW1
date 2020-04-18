<?php

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
?>