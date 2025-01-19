<?php


function conectarDB() : mysqli
{
    $hostname = 'localhost';
    $username = 'usuariobr';
    $password = 'rootbr';
    $database = 'bienesRaices';
    $port = 3307;
    $db = mysqli_connect($hostname,$username,$password,$database,$port);

    if ($db->connect_error) {
        exit("Error de conexión: " . $db->connect_error);
    }

    return $db;
}
