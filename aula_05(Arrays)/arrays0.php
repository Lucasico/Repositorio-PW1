<?php
//podem ser numericos ou associativos
//numerico(sequencial)
$lista_frutas = array("banana","uva","pera","maça",);
echo"<hr>";
  echo"<pre>";
    print_r($lista_frutas);
  echo"</pre>";
echo"<hr>";


echo"<hr>";
  echo"<pre>";
    var_dump($lista_frutas);
  echo"</pre>";
echo"<hr>";

//inserindo de forma bruta
$lista_frutas[] = "Amora";
echo"<hr>";
  echo"<pre>";
    echo "inserindo de forma bruta <br>";
      var_dump($lista_frutas);
    echo"</pre>";
echo"<hr>";

//buscando de forma bruta
echo"<hr>";
  echo"<pre>";
    echo "buscando de forma bruta <br>"; 
    echo $lista_frutas[1];
  echo"</pre>";
echo"<hr>";

/**
 * trabalhando agora com arrays associativos, onde não há uma
 * sequencia de indices. Aqui é explicito a forma/nome dos indices
 * do array
 */

  $lista_clientes = array(
    "cliente01" => "lucas",
    "cliente02" => "marcio",
    "cliente03" => "fabricio",
    "cliente04" => "lucas lavor"
  );
  $lista_clientes['ultimo'] = "De assis";
  echo"<hr>";
    echo"<pre>";
      var_dump($lista_clientes);
    echo"</pre>";
echo"<hr>";

?>