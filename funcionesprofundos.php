<?php 
/*
function suma($a =1, $b=1){
    echo "La suma de $a + $b es: ".$a+$b."\n";
}
*/

//suma();
/*
$arreglo1 = [1,2,3];
$arreglo2 = [4,5,6];
$resultado = [...$arreglo1, ...$arreglo2];
var_dump($resultado);
*/

/*
function suma($a, $b){
    echo "La suma de $a + $b es: ".$a+$b."\n";
}
$numero1 = [1,2];
$numero2 = [50,20];
$numero3 = [1000,2]; 

suma(...$numero1);
*/

//Parametros dinamicos//
function suma_infinita(...$params){
    $suma = 0;
    foreach ($params as $numero) {
        $suma += $numero;
    }
    echo "la suma es: $suma \n";
}
suma_infinita(1,2);
suma_infinita(1,2,3,4,5);
echo "\n";