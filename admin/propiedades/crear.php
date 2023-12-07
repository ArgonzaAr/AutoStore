<?php
    require '../../includes/config/database.php';

    $db = conectDb('localhost', 'root', 'arg0nza', 'autostoreasdfas');

    require '../../includes/functions.php';
    includeTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/AutoStore/admin/" class="button boton-verde">Inicio</a>
        <form action="" class="formulario">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpg, image/png">

                <label for="descripcion">Descripción:</label>
                <input type="number" id="descripcion" placeholder="Precio Propiedad">
            </fieldset>
            
            <fieldset>
                <legend>Información de la Propiedad</legend>
                
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" min="1" max="9" placeholder="Ej:3">
                
                <label for="banio">Baños:</label>
                <input type="number" id="banio" min="1" max="9" placeholder="Ej:3">
                
                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" min="1" max="9" placeholder="Ej:3">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                
                <label for="vendedor">Vendedor:</label>
                <select name="vendedor" id="vendedor">
                    <option value="0" selected disabled>Selecciona un Vendedor</option>
                    <option value="Angel">Ángel</option>
                    <option value="Karen">Karen</option>
                </select>
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
    <?php includeTemplate('footer')?>
</body>
</html>