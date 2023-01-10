<?php

function clear(){
    if(PHP_OS === "WINNT"){
        system("cls");
    }
    else{
        system("clear");
    }
}

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor"
, "Piloto", "Baldosa", "Terremoto", "Asteroide",
"Gallo","Platzi"];

//definir una constante//
define("MAX_ATTEMPS", 6);

echo "JUEGO AHORCADO \n\n";

//Inicialiamos el juego//
$choosen_word = $possible_words[rand(0,9)];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("",$word_length, "_");
$attemps = 0;

do{

echo "Palabra de $word_length letras \n\n";
echo $discovered_letters."\n\n";

//Pedimos a usuario que escriba
$player_letter = readline("Escribe una letra: ");
$player_letter = strtolower($player_letter);
//Validar si la letra es parte de la palabra//
if(str_contains($choosen_word, $player_letter)){
    //Verificamos todas las ocurrencias de esta letra para reemplazarla//
    $offset = 0;
    while(
        ($letter_possition=strpos($choosen_word, $player_letter, $offset))
        !== false){
        $discovered_letters[$letter_possition] = $player_letter;
        $offset = $letter_possition+1;
    }
}
else{
    clear();
    $attemps++;
    echo "Letra incorrecta, Te quedan ".(MAX_ATTEMPS-$attemps). " intentos";
    sleep(2);
}
clear();
}while($attemps<MAX_ATTEMPS && $discovered_letters!=$choosen_word);
clear();

if($attemps<MAX_ATTEMPS)
echo "Felicidades, Ganaste";
else
echo "No adivinaste la palabra\n";
echo "La palabra es: $choosen_word \n";
echo "Tu descubriste: $discovered_letters \n";
echo "\n";