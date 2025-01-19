<?php

require '../../includes/funciones.php';
require '../../includes/config/database.php';

//Conexion a la base de datos
$db = conectarDB();
$errores = [];
//Recibimos y validamos los datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Titulo
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : '';
    if (empty($titulo)) {
        $errores[] = "Debes añadir un titulo.";
    }

    //Precio
    $precio = isset($_POST['precio']) ? $_POST['precio'] : 0.0;
    if (empty($precio)) {
        $errores[] = "Debes añadir un precio.";
    } else if (!is_numeric($precio)) {
        $errores[] = "El precio debe ser un numero valido.";
    }

    //imagen
    if (isset($_POST['imagen'])) {
        if (empty($_POST['imagen'])) {
            $imagen = 'imagen.jpg';
        } else {
            $imagen =  mysqli_real_escape_string($db, $_POST['imagen']);
        }
    } else {
        $imagen = 'imagen.jpg';
    }

    //Habitaciones
    $habitaciones = isset($_POST['habitaciones']) ? $_POST['habitaciones'] : 0;

    if (empty($habitaciones)) {
        $errores[] = "Debes seleccionar el numero de habitaciones.";
    } elseif (!is_numeric($habitaciones)) {
        $errores[] = "Debes seleccionar un nuemro valido";
    }
    //WC
    $wc = isset($_POST['wc']) ? $_POST['wc'] : 0;
    if (empty($wc)) {
        $errores[] = "Debes seleccionar el numero de Baños.";
    } elseif (!is_numeric($wc)) {
        $errores[] = "Debes seleccionar un nuemro valido";
    }
    //Estacionamientos
    $estacionamiento = isset($_POST['estacionamiento']) ? $_POST['estacionamiento'] : 0;
    if (empty($estacionamiento)) {
        $errores[] = "Debes seleccionar el numero de estacionamientos.";
    } elseif (!is_numeric($estacionamiento)) {
        $errores[] = "Debes seleccionar un nuemro valido";
    }
    //Fecha
    $creado = isset($_POST['creado']) ? $_POST['creado'] : date('y-m-d');
    // Validar que la fecha esté en el formato correcto (YYYY-MM-DD)
    $fechaFormatoValido = DateTime::createFromFormat('Y-m-d', $creado);
    if(empty($creado)){
        $errores[] = "Debes de seleccionar la fecha;";
    }elseif (!$fechaFormatoValido || $fechaFormatoValido->format('Y-m-d') !== $creado) {
        $errores[] = "La fecha no es válida. Debe ser en formato YYYY-MM-DD.";
    }

    //ID
    $id_vendedor = isset($_POST['id_vendedor']) ? $_POST['id_vendedor'] : 1;
    if(empty($id_vendedor)){
        $errores[] = "Debes de seleccionar un vendedor"; 
    }elseif($id_vendedor <= 0){
        $errores[] = "Vendedor no valido";
    }
    //Descripcion
    $descripcion = isset($_POST['descripcion']) ? trim($_POST['descripcion']) : '';
    if (empty($descripcion)) {
        $errores[] = "La descripción es obligatoria.";
    } elseif (strlen($descripcion) > 255) {
        // Verificamos que no exceda los 255 caracteres (ajusta según tus necesidades)
        $errores[] = "La descripción no puede exceder los 255 caracteres.";
    } else {
        // Sanitizamos para evitar caracteres no deseados
        $descripcion = mysqli_real_escape_string($db, $descripcion);
    }
    
}

// debugear($_POST);


//Insertamos los datos

if (empty($errores)) {
    $query = "insert into propiedades(titulo , precio,
imagen ,habitaciones ,wc ,estacionamiento,creado,id_vendedor,descripcion)
values( '$titulo' , $precio , '$imagen' , $habitaciones , $wc , $estacionamiento , '$creado' , $id_vendedor, '$descripcion'); ";

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
        mysqli_close($db);
        header('location: /bienesraices_php/admin/index.php');
    }
}else{
    $errores_serializados = urlencode(serialize($errores));
    header("location: /bienesraices_php/admin/propiedades/crear.php?errores=$errores_serializados");
}
