<?php
// Ahora va en serio el autoload.
// La función del autoload automágicamente recibe un valor por parámetro: El nombre de la clase a cargar.
spl_autoload_register(function($className) {
    // Gracias a que el nombre del archivo que contiene la clase se llama IGUAL que la clase, esto se vuelve
    // bastante simple.
    $filepath = __DIR__ . "/classes/" . $className . ".php";

//    echo "Incluyendo el archivo... " . $filepath . "<br>";

    // Preguntamos si el archivo existe, en cuyo caso lo incluimos.
    if(file_exists($filepath)) {
        require $filepath;
    }
});


