<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/AutoStore/build/css/app.css">
    <title>AutoStore</title>
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : '';?>">
        <div class="contenedor contenido-header">
            <div class="barra">

                <a href="/AutoStore/index.php">
                    <p class="logo">Auto<span class="logo2">Store</span></p>
                </a>

                <div class="mobile-menu">
                    <img src="/autostore/build/img/barras.svg" alt="icono hamburguesa">
                </div>
                <div class="derecha">
<<<<<<< HEAD
                    <img class="dark-mode-button" src="/autostore/build/img/dark-mode.svg" alt="icono dark-mode">
=======
                    <img class="dark-mode-button" src="/AutoStore/build/img/dark-mode.svg" alt="icono dark-mode">
>>>>>>> 9bacfe5ea5e66f7affb578d7074f5563b82e63a1
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>

            </div><!--barra-->
            <?php if($inicio){ ?>
                <h1>AutoSale venta de autos de lujo nuevos y seminuevos</h1>
            <?php } ?>
        </div>
    </header>  