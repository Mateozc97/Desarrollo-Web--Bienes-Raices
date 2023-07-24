<?php

function conectarDB() : mysqli{
    // Define la variable $db como un objeto conexión
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

    // Si la conexión no es exitosa, imprime un mensaje de error y termina el script
    if(!$db){
        echo "No fue posible la conexión a la BD";
        exit;
    }

    // Devuelve el objeto conexión
    return $db;
}

