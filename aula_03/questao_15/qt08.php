<?php

$nl = $_GET['linhas'];
$nc = $_GET['colunas'];

for($i = 0; $i <= $nl; $i++){
  echo "<table>";
    echo "<tr>";
      for($j = 0; $j <= $nc; $j++){
        echo '<td> |Lógica| </td>';
      }
    echo "<tr/>";
  echo "<table/>";
}

?>