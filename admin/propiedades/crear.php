<?php
    require '../../includes/config/database.php';
    require '../../includes/functions.php';

    $db = conectDb('localhost', 'root', '', 'auto_store');

    //traer registros de bd para Vendedores

    $consulta = 'SELECT V_ID, V_NOMBRE, V_APELLIDO FROM vendedores';

    $resultado = mysqli_query($db, $consulta);
    //arreglo para los errores.
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $banio = '';
    $estacionamiento = '';
    $vendedorId = '';

    //Validar el método post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //almacenar datos del post
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $banio = $_POST['banio'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];
        $datecreate = date('Y-m-d');

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
        if(!isset($vendedorId)){
            $errores[] = 'El vendedor no puede ir vacío';
        }
    }

    if(empty($errores)){
        $query = "INSERT INTO propiedades (V_ID, P_TITULO, P_PRECIO, P_DESCRIPCION, P_HABITACIONES, P_BANIO, P_DATECREATE) VALUES ('$vendedorId', '$titulo', $precio, '$descripcion', $habitaciones, $banio, $datecreate);";

        $resultado = mysqli_query($db, $query);

        if($resultado){
            echo 'Insertado Correctamente';
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
                <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>" placeholder="Titulo Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" value="<?php echo $precio; ?>" placeholder="Precio Propiedad">
                
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $descripcion; ?></textarea>
            </fieldset>
            
            <fieldset>
                <legend>Información de la Propiedad</legend>
                
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" min="1" max="9" placeholder="Ej:3" value="<?php echo $habitaciones; ?>">
                
                <label for="banio">Baños:</label>
                <input type="number" id="banio" name="banio" min="1" max="9" placeholder="Ej:3" value="<?php echo $banio; ?>">
                
                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" min="1" max="9" placeholder="Ej:3" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                
                <label for="vendedor">Vendedor:</label>
                <select name="vendedor" id="vendedor">
                    <option value="0" selected>Selecciona un Vendedor</option>
                     <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                        <option <?php echo ($vendedorId == $vendedor['V_ID']) ? 'selected' : ' ' ?> value="<?php echo $vendedor['V_ID'] ?>"><?php echo $vendedor['V_NOMBRE'] . ' ' . $vendedor['V_APELLIDO'] ?></option>
                    <?php endwhile; ?>
                </select>
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
    <?php includeTemplate('footer')?>
</body>
</html>