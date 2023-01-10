<?php 
$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capucciono" => 27.5,
    "Mocca" => 24
);


foreach($tiendita_de_cafes as $cafe => $price){
    echo "Actualmente encontre el cafe $cafe \n";
    if($cafe == "Latte"){
        echo "¡Encontramos a Latte!";
        break;

    }
}

foreach($tiendita_de_cafes as $cafe => $price){
    if($cafe == "Recalentado"){
        continue;
    }
    echo "¡El café $cafe es muy rico \n";
}
echo "\n";