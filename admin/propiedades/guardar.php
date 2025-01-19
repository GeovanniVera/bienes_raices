<?php

require '../../includes/funciones.php';
require '../../includes/config/database.php';

//Conexion a la base de datos
$db = conectarDB();



$errores = [];


$titulo = '';
$precio = '';
$imagen = '';
$habitaciones = '';
$estacionamiento = '';
$wc = '';
$id_vendedor='';
$descripcion='';
$creado = '';
//Recibimos y validamos los datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Titulo
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : '';
    if (empty($titulo)) {
        $errores[] = "Debes añadir un titulo.";
    }

    //Precio
    $precio = isset($_POST['precio']) ? mysqli_real_escape_string($db, $_POST['precio']) : 0.0;
    if (empty($precio)) {
        $errores[] = "Debes añadir un precio.";
    } else if (!is_numeric($precio)) {
        $errores[] = "El precio debe ser un numero valido.";
    }

    //imagen
    /*
    if (isset($_POST['imagen'])) {
        if (empty($_POST['imagen'])) {
            $imagen = 'imagen.jpg';
        } else {
            $imagen =  mysqli_real_escape_string($db, $_POST['imagen']);
        }
    } else {
        $imagen = 'imagen.jpg';
    }
        */

    $imagen = $_FILES['imagen']; 
    
    if($imagen['error'] !== UPLOAD_ERR_OK){
        $errores[] = 'La imagen es obligatoria o ocurrió un error al cargarla';
    }

    $medida = 1000 * 1000;

    if($imagen['size'] > $medida){
        $errores[] = 'El tamaño de la imagen es demasiado grande';
    }

    //Habitaciones
    $habitaciones = isset($_POST['habitaciones']) ?  filter_var($_POST['habitaciones'],FILTER_SANITIZE_NUMBER_INT): 0;

    if (empty($habitaciones)) {
        $errores[] = "Debes seleccionar el numero de habitaciones.";
    } elseif (!is_numeric($habitaciones)) {
        $errores[] = "Debes seleccionar un nuemro valido";
    }
    //WC
    $wc = isset($_POST['wc']) ? filter_var($_POST['wc'],FILTER_SANITIZE_NUMBER_INT) : 0;
    if (empty($wc)) {
        $errores[] = "Debes seleccionar el numero de Baños.";
    } elseif (!is_numeric($wc)) {
        $errores[] = "Debes seleccionar un nuemro valido";
    }
    //Estacionamientos
    $estacionamiento = isset($_POST['estacionamiento']) ? filter_var($_POST['estacionamiento'],FILTER_SANITIZE_NUMBER_INT) : 0;
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
    $id_vendedor = isset($_POST['id_vendedor']) ? mysqli_real_escape_string($db,$_POST['id_vendedor']) : 1;
    if(empty($id_vendedor)){
        $errores[] = "Debes de seleccionar un vendedor"; 
    }elseif($id_vendedor <= 0){
        $errores[] = "Vendedor no valido";
    }
    //Descripcion
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db,trim($_POST['descripcion'])) : '';
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

    //---------------------------------Subida de Imagenes-----------------------------------
    //creamos la carpeta
    $carpetaImagenes = '/var/www/html/bienesraices_php/imagenes';

if (!is_dir($carpetaImagenes)) {
    mkdir($carpetaImagenes, 0777, true); 
}

//-----------------------------------Generamos el nombre  de la imagen ---------------------------------
$nombreImagen = md5(uniqid(rand(),true)).'.jpg';


//--------------------------------Subimos la imagen-----------------------------------
move_uploaded_file($imagen['tmp_name'],$carpetaImagenes.'/'.$nombreImagen);

    $query = "insert into propiedades(titulo , precio,
imagen ,habitaciones ,wc ,estacionamientos,creado,id_vendedor,descripcion)
values( '$titulo' , $precio , '$nombreImagen' , $habitaciones , $wc , $estacionamiento , '$creado' , $id_vendedor, '$descripcion'); ";

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
        mysqli_close($db);
        header('location: /bienesraices_php/admin/index.php');
    }
}else{
    $errores_serializados = urlencode(serialize($errores));
    $valores_serializados = urlencode(serialize($_POST));
    header("location: /bienesraices_php/admin/propiedades/crear.php?errores=$errores_serializados&valores=$valores_serializados");

}
