<?php 
$edades =[18,22,40,34];

//Count --> Contar cantidad de datos de arreglo// 
echo count($edades);
echo "\n";

//Push --> Agregar dato a arreglo en la cola//
array_push($edades, 13);
print_r($edades);
var_dump($edades);

//is_array --> True o False si es un array//
$esto_no_es_un_arreglo = "";
var_dump(is_array($esto_no_es_un_arreglo));

//explode --> Conventir String a un arreglo//
$lista_de_frutas = "fresa-cereza-manzana";
$lista_de_frutas_array = explode("-",$lista_de_frutas);
var_dump($lista_de_frutas_array);

//implode --> Conventir arreglo a String//
$lista_de_frutas_array = ["fresa","cereza","manzana"];
$lista_de_frutas = implode(",",$lista_de_frutas_array);
var_dump($lista_de_frutas);