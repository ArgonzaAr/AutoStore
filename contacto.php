<?php
   require 'includes/functions.php';
   includeTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/blog1.webp" type="image/webp">
            <source srcset="build/img/blog1.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/blog1.jpg" alt="imagen blog contacto">
        </picture>

        <h2>Llene el formulario de contacto</h2>
        <form class="formulario">
            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu nombre">

                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Tu E-mail">

                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" placeholder="Tu telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" placeholder="Escribe el mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre el automóvil</legend>

                <label for="selection">Vende o Compra</label>
                <select name="" id="selection">
                    <option selected disabled value="">--Seleccione--</option>
                    <option value="Vende">Vende</option>
                    <option value="Compra">Compra</option>
                </select>

                <label for="cantidad">Precio o presupuesto</label>
                <input type="number" id="cantidad" placeholder="Precio o presupuesto">
            </fieldset>

            <fieldset>
                <legend>Información sobre el automóvil</legend>

                <p>¿Cómo desea ser contactado?</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" name="tipo-contacto" id="contactar-telefono">
                    
                    <label for="contactar-correo">E-mail</label>
                    <input type="radio" name="tipo-contacto" id="contactar-correo">
                </div>

                <p>Si eligió teléfono, eliga fecha y hora</p>
                <div class="fecha-hora-contacto">
                    <label for="fecha-contacto">Fecha</label>
                    <input type="date" name="" id="fecha-contacto">

                    <label for="hora-contacto">Hora</label>
                    <input type="time" name="" id="hora-contacto">
                </div>
            </fieldset>

            <input type="submit" value="enviar" class="boton-verde">
        </form>
    </main>

    <?php includeTemplate('footer'); ?>

</body>
</html>