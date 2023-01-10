<?php 

$usernames = ["Pepito123","Mr.Michi","RataxMain"];
do{
    $username = readline("Ingresar nuevo usuario: ");
    echo "\n";
}while(in_array($username,$usernames));