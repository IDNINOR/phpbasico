<?php
//Arreglo asociativo mostrando con '--';
$edades = array(
    "Carlos" => 20,
        "Mr.michi" => 18,
        "Juan" => 40,
);

echo "la edad de Mr. michi es: ".$edades["Mr.michi"];

//Arreglo asociativo mostrando con "--";
$cafes = array(
    "Capuccino" => 40,
    "Latte" => 49,
    "Americano" => 70,
);

echo "El precio del cafe Americano es de: {$cafes['Americano']}";

$personas = array (
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),
    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    ),
);

echo "La información de Mr.Michi es: Edad: " 
.$personas["Mr.Michi"]["edad"]." Apelldo: "
.$personas["Mr.Michi"]["apellido"];