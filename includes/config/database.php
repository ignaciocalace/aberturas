<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'trabajos', '3306');

    if(!$db) {
        echo "No se pudo conectar";
        exit;
    }
    return $db;
}