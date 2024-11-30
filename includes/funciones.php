<?php 
//Usaremos las Constantes definidas en app
require 'app.php';

function incluirTemplate(string $nombre,bool $inicio=false){
    include TEMPLATES_URL."/{$nombre}.php";
}