<?php
// Exiba uma tabela com 10 linhas e 5 colunas;
// tr = linha e td = coluna
// . concatena
echo "<h3> Exiba uma tabela com 10 linhas e 5 colunas </h3>";
for($i = 0; $i < 10; $i++){
  echo "<table>";
    echo "<tr>";
      for($j = 0; $j < 5; $j++){
        echo "<td>"."PHP"."</td>";
      }
     echo "</tr>";
  echo "</table>";
}
?>