<?php 

$asientos_disponibles = -4;
$es_hijo_de_tom_holland = false;

if($asientos_disponibles >0)
    echo "Puedes ver la pelicula";
else if($es_hijo_de_tom_holland == false)
    echo "No te creo, pero puedes ver la pelicula";
else
    echo "No puedes ver la pelicula";
    echo "\n";
