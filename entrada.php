<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>25/07/2023</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis distinctio recusandae magni. Nihil nemo incidunt consectetur id saepe reiciendis cum ad quisquam quidem omnis consequuntur eligendi, ipsa consequatur cumque ipsam. Autem beatae dolor sequi quidem magnam voluptate laboriosam.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur similique error porro repudiandae, placeat animi maxime sapiente rem atque saepe, consequuntur perferendis aut tenetur reiciendis quibusdam odit voluptatum dolorem corporis.</p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>