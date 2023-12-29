<?php
    require '../../includes/config/database.php';
    require '../../includes/functions.php';

    $db = conectDb('localhost', 'root', 'mysql5', 'autostore');
    //arreglo para los errores.
    $errores = [];

    //Validar el método post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //almacenar datos del post
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $banio = $_POST['banio'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedor = $_POST['vendedor'];

        //validar errores
        if(!$titulo){
            $errores[] = 'El título de la propiedad no puede ir vacío';
        }
        if(!$precio){
            $errores[] = 'El precio no puede ir vacío';
        }
        if(strlen($descripcion) < 20){
            $errores[] = 'La descripción no puede ir vacía y tiene que ser mayor a 20 carácteres';
        }
        if(!$habitaciones){
            $errores[] = 'Las habitaciones no pueden ir vacías';
        }
        if(!$banio){
            $errores[] = 'Los baños no pueden ir vacíos';
        }
        if(!$estacionamiento){
            $errores[] = 'El estacionamiento no puede ir vacío';
        }
        if(!isset($vendedor)){
            $errores[] = 'El vendedor no puede ir vacío';
        }
    }

    includeTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/AutoStore/admin/index.php" class="button boton-verde">Inicio</a>
        <?php foreach($errores as $error):?>
            <div class="alerta error"><?php echo $error ?></div>
        <?php endforeach; ?>
        <form action="" method="POST" class="formulario">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpg, image/png">

                <label for="descripcion">Descripción:</label>
                <input type="number" id="descripcion" name="descripcion" placeholder="Precio Propiedad">
            </fieldset>
            
            <fieldset>
                <legend>Información de la Propiedad</legend>
                
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" min="1" max="9" placeholder="Ej:3">
                
                <label for="banio">Baños:</label>
                <input type="number" id="banio" name="banio" min="1" max="9" placeholder="Ej:3">
                
                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" min="1" max="9" placeholder="Ej:3">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                
                <label for="vendedor">Vendedor:</label>
                <select name="vendedor" id="vendedor">
                    <option value="0" selected>Selecciona un Vendedor</option>
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