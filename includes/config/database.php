<?php
    declare(strict_types=1);

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', 'root', 'bienes_raices');

    if(!$db){
        echo 'Error no se pudo conectar';
        exit;
    }

    return $db;
}