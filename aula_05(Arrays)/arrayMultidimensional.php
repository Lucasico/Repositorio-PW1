<?php
/**
 * Arrays multidimensionais são formas em que tenho arrays dentro de arrays,
 * de forma analoga a matrizes em C.
 */
$listaCoisas = [];
$listaCoisas["frutas"] = array('banana','maça','abacaxi');
$listaCoisas["pessoas"] = array('João', 'maria','seu zé');
echo"<pre>";
    var_dump($listaCoisas);
echo "</pre>";
echo"<hr>";
//uma outra forma de arrays multidimensionais
  $listaClientes = [];
  $listaClientes["adimplente"] = array(
   "cliente01" => $cliente01 = array(
      "nome"=>"Lucas",
      "idade"=>21,
      "sexo"=>"M",
    ),
    "cliente02" => $cliente02 = array(
      "nome"=>"marcio",
      "idade"=>20,
      "sexo"=>"M",
    ),
  );

  $listaClientes["inadimplentes"] = array(
    "cliente01" => $cliente01 = array(
      "nome"=>"Fabricio",
      "idade"=>21,
      "sexo"=>"M",
    ),
    "cliente02" => $cliente02 = array(
      "nome"=>"De Assis",
      "idade"=>21,
      "sexo"=>"M",
    ),

  );
  echo"<pre>";
    echo"Clientes adimplentes<br>";
    var_dump($listaClientes['adimplente']);
  echo "</pre>";
  echo"<pre>";
    echo"Clientes inadimplentes<br>";
    var_dump($listaClientes['inadimplentes']);
  echo "</pre>"
?>