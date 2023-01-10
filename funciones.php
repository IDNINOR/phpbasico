<?php 
function get_pokemon(){
    $numero_aleatorio = rand(1,5);
    echo "Numero es: $numero_aleatorio\n";
    switch($numero_aleatorio){
        case 1:
            echo "Pikachu\n"; 
            break;
        case 2:
            echo "Chamander\n"; 
            break;
        case 3:
            echo "Mewtwo\n"; 
            break;
        default: 
        echo "Lo siento no existe pokemon\n";
    }
    
}
for ($i=0; $i <10 ; $i++) { 
    get_pokemon();
}

