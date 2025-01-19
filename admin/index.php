<?php
    require '../includes/funciones.php';
    // echo __DIR__;
    incluirTemplate('header');
?>

<main class="container section">
    <h1>Administrador de Bienes Raices</h1>
    <a href="/bienesraices_php/admin/propiedades/crear.php" class="btn btn-green-inline">Nueva Propiedad</a>
</main>

<?php
    incluirTemplate('footer');
?>