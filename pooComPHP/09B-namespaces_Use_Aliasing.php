<?php
  //Agora temos dentro deste contexto, essas duas bibliotecas
  require './biblioteca/lib1/lib1.php';
  require './biblioteca/lib2/lib2.php';
  //estou agora implicitamente requerendo o arquivo da biblioteca da lib1.php
  //lembrando o que se é importado são unicamente classe ou interfaces,
  //até por que seus métodos estão dentro da class, que por sua vez
  //extends outras classes ou implement interfaces
  use A\Pessoa;
  //para utilizar a lib2.php, como ambas tem o mesmo nome deve-se dar um
  //apelido para esta
  use B\Pessoa as PessoaB;

  $c = new Pessoa;
  print_r($c);

  echo '<br />';

  $b = new PessoaB;
  print_r($b);

?>