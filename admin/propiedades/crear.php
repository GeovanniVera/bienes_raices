<?php
require '../../includes/funciones.php';
// echo __DIR__;
incluirTemplate('header');

isset($_GET['errores']);
$errores = unserialize(urldecode($_GET['errores']));
?>

<main class="container section">
    <h1>Crear Propiedad</h1>
    <a href="/bienesraices_php/admin/index.php" class="btn btn-green-inline">Volver</a>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <p><?php echo "$error";?></p>
        </div>
    <?php endforeach;?>

    <form action="/bienesraices_php/admin/propiedades/guardar.php" method="post" class="formulario">
        <fieldset>
            <legend>Informacion General de la propiedad</legend>

            <input type="text" name="titulo" id="titulo" placeholder="Titulo de la propiedad:" autofocus pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ\s]+">

            <input type="number" step="0.01" name="precio" id="precio" placeholder="Precio de la propiedad:" pattern="^\d+(\.\d{1,2})?$"
                title="Ingresa un precio válido (solo números, con hasta dos decimales)">

            <label for="imagen">Imagen</label>
            <input type="file" accept="image/jpeg, image/png" name="imagen" id="imagen">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ0-9\s]+"
                title="La descripción solo puede contener letras, números y espacios."></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion Propiedad:</legend>

            <input type="number" name="habitaciones" id="habitaciones" min="0" placeholder="Numero de Habitaciones: " pattern="[1-9]{1}"
                title="Solo se permite un número del 1 al 9.">

            <input type="number" name="wc" id="wc" min="0" placeholder="Numero de Baños" pattern="[1-9]{1}"
                title="Solo se permite un número del 1 al 9.">

            <input type="number" name="estacionamiento" id="estacionamiento" min="0" placeholder="Numero de Estacionamientos: " pattern="[1-9]{1}"
                title="Solo se permite un número del 1 al 9.">

            <label for="fecha">Fecha:</label>
            <input type="date" name="creado" id="fecha">

        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="id_vendedor" id="vendedor">
                <option value="" disabled selected>---Seleccionar Vendedor---</option>
                <option value="1">Geovanni Vera</option>
                <option value="2">Elizabeth Vera</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="btn btn-orange-inline">
    </form>

</main>
<!-- <script>
    // Obtener la fecha actual en formato YYYY-MM-DD
    const today = new Date().toISOString().split('T')[0];
    // Establecer la fecha mínima del input al día de hoy
    document.getElementById('fecha').min = today;
</script> -->
<?php
incluirTemplate('footer');
?>