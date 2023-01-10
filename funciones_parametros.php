<?php
function es_estudiante_legend($puntaje){
    if ($puntaje>=20000){
        echo "Eres un estudiante Legend\n";
    }
    else{
        echo "No eres un estudiante Legend\n";
    }
}
do{
    $puntaje_user = 0;
    echo "Puntaje en Platzi Rank: ";
    fscanf(STDIN, '%d', $puntaje_user);
    es_estudiante_legend($puntaje_user);
    
}while(true);


?>