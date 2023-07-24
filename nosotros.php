<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis distinctio recusandae magni. Nihil nemo incidunt consectetur id saepe reiciendis cum ad quisquam quidem omnis consequuntur eligendi, ipsa consequatur cumque ipsam. Autem beatae dolor sequi quidem magnam voluptate laboriosam</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis distinctio recusandae magni. Nihil nemo incidunt consectetur id saepe reiciendis cum ad quisquam quidem omnis consequuntur eligendi, ipsa consequatur cumque ipsam. Autem beatae dolor sequi quidem magnam voluptate laboriosam Facilis distinctio recusandae magnico Nihil nemo incidunt consectetur.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loagind="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus minima eos eveniet, et quas ea enim asperiores hic odit perferendis, ad repellendus dolore, animi ipsum nisi possimus! Tempora, eveniet veritatis.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loagind="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus minima eos eveniet, et quas ea enim asperiores hic odit perferendis, ad repellendus dolore, animi ipsum nisi possimus! Tempora, eveniet veritatis.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loagind="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus minima eos eveniet, et quas ea enim asperiores hic odit perferendis, ad repellendus dolore, animi ipsum nisi possimus! Tempora, eveniet veritatis.</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>