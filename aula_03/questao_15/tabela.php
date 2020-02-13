<?php
$linhas = $_GET['linhas'];
$colunas = $_GET['colunas'];
for($i = 0; $i < $linhas; $i++){
  echo "<table>";
    echo "<tr>";
      for($j = 0; $j < $colunas; $j++){
        echo "<td>"."PHP"."</td>";
      }
     echo "</tr>";
  echo "</table>";
}

?>