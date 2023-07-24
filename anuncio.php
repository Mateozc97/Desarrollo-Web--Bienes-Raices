<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis distinctio recusandae magni. Nihil nemo incidunt consectetur id saepe reiciendis cum ad quisquam quidem omnis consequuntur eligendi, ipsa consequatur cumque ipsam. Autem beatae dolor sequi quidem magnam voluptate laboriosam.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur similique error porro repudiandae, placeat animi maxime sapiente rem atque saepe, consequuntur perferendis aut tenetur reiciendis quibusdam odit voluptatum dolorem corporis.</p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>