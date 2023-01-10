<?php

// $escuela = array(
//     "Michi1" => array(
//         "Nombre: " => "Henry",
//         "Ocupacion: " => "Desarrollador Junior",
//         "Color" => "Azul",
//         "Comida" => array(
//             "Comida Favorita" => "",
//             "Comida no Favorita" => "Pan",
//         )

//     ),
// );
// var_dump($escuela);

$escuela = array(
    array(
        "Nombre" => "MichiJose",
        "Ocupacion" => "Desarrollador",
        "Color" => "Azul",
        "Comida" => array(
            "Favoritas" => "Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuates", 
        )
        ),
    array(
        "Nombre" => "MichiSancio",
        "Ocupacion" => "jQuery Developer",
        "Color" => "blanco",
        "Comida" => array(
            "Favoritas" => "Pescado, Pollo",
            "NoFavoritas" => "Atun", 
        )
        ),
        array(
            "Nombre" => "MrMichi",
            "Ocupacion" => "Pro en PHP",
            "Color" => "Gris",
            "Comida" => array(
                "Favoritas" => "Pan",
                "NoFavoritas" => "Queso", 
            )
        )
);

$michisancio = $escuela[1];
//echo "Las comidas favoritas de MichiSancio son: "
//.$escuela[1]['Comida']['Favoritas'];

$mr_michi = $escuela[2]['Color'];
echo "El color favorito de Mr. Michi es: {$mr_michi}";


?>