<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <!-- Main Page -->
    <main class="container section">
        <h2>Conoce Sobre Nosotros</h2>
        <div class="section about-us">
            <div class="img-about">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="webp">
                    <source srcset="build/img/nosotros.jpg" type="jpeg">
                    <img src="build/img/nosotros.jpg" alt="imagen sobre nosotros">
                </picture>
            </div>
            <div class="text-about">
                <p><span>25 años de experiencia</span></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita cum hic quod, libero inventore unde laudantium voluptates omnis cupiditate nulla? Rem, sapiente in eveniet laborum veniam aliquam ducimus perspiciatis magnam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea porro velit molestiae blanditiis debitis nostrum est vero veritatis reiciendis natus alias cum, eum dolor voluptatum aut omnis odit maiores distinctio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui obcaecati omnis totam pariatur inventore fugiat voluptates iusto velit optio ipsa, accusamus quis accusantium molestiae unde suscipit quos quaerat numquam dolor.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quasi ducimus eveniet id repellat mollitia ullam quos quis quod, tenetur excepturi voluptates nobis unde quisquam rerum dolore consectetur quo eos.</p>
            </div>
        </div>
    </main>
    <!-- Main Page End-->
    <section class="container section">
        <h2>Mas Sobre Nosotros</h2>
        <div class="icons-about-us">
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque vitae at esse nesciunt, laborum saepe
                    beatae ducimus consequatur officia molestias accusantium modi libero voluptatibus! Obcaecati ullam
                    quaerat veniam quis quam!</p>=
            </div>
            <div class="icon">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque vitae at esse nesciunt, laborum saepe
                    beatae ducimus consequatur officia molestias accusantium modi libero voluptatibus! Obcaecati ullam
                    quaerat veniam quis quam!</p>=
            </div>
            <div class="icon">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque vitae at esse nesciunt, laborum saepe
                    beatae ducimus consequatur officia molestias accusantium modi libero voluptatibus! Obcaecati ullam
                    quaerat veniam quis quam!</p>=
            </div>
        </div>
    </section>
<?php
    incluirTemplate('footer');
?>