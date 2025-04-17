<?php

function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

    if (!$db) { // Evalua si no se puede conectar a la Base de Datos
        echo "Error no se pudo conectar a la base de datos"; // mensaje de error
        exit; // detiene la ejecución del script
    }

    return $db; //reportna la instancia de la conexión
}
