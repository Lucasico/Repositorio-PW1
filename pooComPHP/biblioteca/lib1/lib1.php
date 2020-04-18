<?php

namespace A;

interface CadastroInterface
{
  public function cadastrar();
}

class Pessoa implements CadastroInterface
{
  public $name = 'Bezerra';
  public function __get($name)
  {
    return $this->$name;
  }

  public function cadastrar()
  {
  }
}

?>