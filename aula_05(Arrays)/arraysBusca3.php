<?php
//os metodos são: in_array(), array_search();
//in_array()  -> retorna true ou false para a existencia do elemento
//array_search() -> retorna o indice do valor pesquisado

/**
 * como funciona ambos: recebem dois parametros o primeiro o valor que
 * deseja referente ao elemento que deseja buscar, o segundo referente
 * ao array onde a busca deve acontecer
 * exemplo: array_search("elemento", array);
 */

$frutas = array(
  'banana',
  'maça', 
  'macaxeira',
  'uva'
);

echo"<pre>";
  print_r($frutas);
echo"</pre>";

//----------------------------------------
echo (array_search('banana',$frutas));
echo"<br>";
echo (in_array('banana',$frutas));
//-----------------------------------------

//agora para arrays multidimensionais

$listaCoisas = ["frutas" => $frutas];
echo "<hr>";
echo"<pre>";
  print_r($listaCoisas);
echo"</pre>";
                                    //array e indice
$resultado = in_array('macaxeira', $listaCoisas['frutas']);
echo($resultado);
echo "<br>";
$resultado = array_search('uva', $listaCoisas['frutas']);
echo($resultado);
?>