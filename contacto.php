<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <labeL for="nombre">Nombre</labeL>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <labeL for="email">E-mail</labeL>
                <input type="email" placeholder="Tu Email" id="email">

                <labeL for="telefono">Teléfono</labeL>
                <input type="tel" placeholder="Tu Teléfono" id="telefono">

                <labeL for="mensaje">Mensaje:</labeL>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <labeL for="opciones">Vende o Compra</labeL>
                <select name="" id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <labeL for="presupuesto">Precio o Presupuesto</labeL>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-temail">Email</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora</p>

                <labeL for="fecha">Fecha:</labeL>
                <input type="date" id="fecha">

                <labeL for="hora">Hora:</labeL>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>

    </main>

<?php
    incluirTemplate('footer');
?>