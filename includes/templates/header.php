<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>
    <!-- Header Start-->
    <header class="header <?php echo isset($inicio) ? 'inicio' : '' ?>">
        <div class="container header-content">
            <!-- Bar-->
            <div class="bar">
                <a href="/bienesraices_php/index.php"><img src="build/img/logo.svg" alt="image Logo"height="50px"></a>
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="menu">
                </div>
                <div class="right">
                    <img src="build/img/dark-mode.svg" alt="dark button" class="dark-mode-btn">
                    <!-- Navigation Bar-->
                    <nav class="navigation-bar">
                        <a href="aboutus.php">Nosotros</a>
                        <a href="advertisements.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contact.php">Contacto</a>
                    </nav>
                    <!-- Navigation Bar End -->
                </div>
            </div>
            <!-- Bar End -->
        </div>
    </header>
    <!-- Header End -->