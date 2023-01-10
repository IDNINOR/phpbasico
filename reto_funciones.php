<?php
function obtener_hora(){
    //$mensaje = "Son las 12:08  pm";
    return date("h:i a Y");
}
echo "Hola me podrias decir que horas es: \n";
echo "Claro son las ".obtener_hora();
echo "\n";