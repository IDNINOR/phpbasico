<?php 
//Serie de Fibonacci//
// 2->1
//3->2
$numero_de_tienda = (int)readline("Numero de tienda: ");
$anterior = 0;
$actual = 1;

for ($i=2; $i <=$numero_de_tienda ; $i++) {
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

 //   echo "temporal: $temporal \n";
 //   echo "actual: $actual \n";
 //   echo "anterior: $anterior \n";
} 
echo "Formas de llegar hay : $actual\n";