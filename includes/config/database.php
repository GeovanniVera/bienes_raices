<?php


function conectarDB() : mysqli
{
    $hostname = 'localhost';
    $username = 'bienesraices_user';
    $password = 'bienesraices_pass';
    $database = 'bienesraices';
    $port = 3306;
    $db = mysqli_connect($hostname,$username,$password,$database,$port);

    if ($db->connect_error) {
        exit("Error de conexión: " . $db->connect_error);
    }

    return $db;
}
