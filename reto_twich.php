<?php 

// echo "Ingresa tu salario: ";
// fscanf(STDIN, "%d", $salario);
$salario = readline("cuanto dinero tienes: ");

if($salario>=100){
    echo "Puedes retirar tu dinero";
}
else{
    echo "No puedes retirar tu dinero";
}



