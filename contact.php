<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>
    <!-- Header Start-->
    <header class="header">
        <div class="container header-content">
            <!-- Bar-->
            <div class="bar">
                <a href="/"><img src="build/img/logo.svg" alt="image Logo"height="50px"></a>
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
            <!-- title header-->
            <!-- <h1>Venta de casas y departamentos exclusivos de Lujo</h1> -->
        </div>
    </header>
    <!-- Header End -->
    <!-- Main Page -->
    <main class="container section">
        <h2>Contacto</h2>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="imagen de contacto">
        </picture>
        <h2>Llene El Formulario de contacto</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu Nombre" autofocus>

                <label for="email">Correo</label>
                <input type="email" id="email" placeholder="Tu Correo Electronico">

                <label for="Telefono">Telefono</label>
                <input type="tel" id="Telefono" placeholder="Tu Telefono">

                <label for="Telefono">Mensaje</label>
                <textarea name="Mensaje" id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Sobre La Propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select name="opciones" id="opciones">
                    <option value="" disabled selected>---Seleccionar---</option>
                    <option value="Compra">Comprar</option>
                    <option value="Vende">Vender</option>
                </select>

                <label for="precio">Precio</label>
                <input type="number" id="Precio" placeholder="Tu Precio" step="0.01">
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contact-phone">Telefono</label>
                    <input name="contacto" type="radio" value="Telefono" id="contact-phone">
                    
                    <label for="contact-email">Correo</label>
                    <input name="contacto" type="radio" value="Correo" id="contact-email">
                </div>

                <p>Si eligio telefono eliga la fecha y la hora para ser contactado</p>

                <label for="Fecha">Fecha</label>
                <input type="date" id="Fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="btn-green">
        </form>
    </main>
    <!-- Main Page End-->
    <!-- Footer Start -->
    <footer class="footer section">
        <div class="container footer-container">
            <!-- Navigation Bar-->
            <nav class="navigation-bar">
                <a href="aboutus.php">Nosotros</a>
                <a href="advertisements.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contacto</a>
            </nav>
            <!-- Navigation Bar End -->
        </div>
        <p class="copyright">
            Todos los derechos reservados 2024 &copy;
        </p>
    </footer>
    <!-- Footer End -->
    <script src="build/js/bundle.min.js"></script>
</body>

</html>