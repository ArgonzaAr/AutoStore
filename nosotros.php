<?php
   require 'includes/functions.php';
   includeTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen-nosotros">
                <picture>
                    <source srcset="/build/img/header1.webp" type="img/webp">
                    <source srcset="build/img/header1.jpg" type="img/jpeg">
                    <img src="build/img/header1.jpg" alt="imagen nosotros" loading="lazy">
                </picture>
            </div>
            <div class="texto-nosotros">
                <h3>25 años de experiencia</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab perspiciatis, dolore quo voluptatum eveniet inventore maxime adipisci eos vel animi ea officia laudantium placeat eum impedit excepturi neque fugit porro! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur dolorum fugit minus numquam dolor. Ex atque expedita nihil laudantium magni debitis? Facere nihil eligendi ipsa voluptas dignissimos sequi in est! Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Quaerat dolor accusantium error obcaecati cum impedit officiis beatae repellendus laborum libero nihil distinctio quia, corrupti aspernatur recusandae non atque provident saepe. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod rerum corporis blanditiis tempora fuga! Accusantium hic recusandae necessitatibus dignissimos, vel officia iure commodi, sunt voluptatem architecto omnis amet laudantium? Sapiente!</p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="<?php echo IMAGENES_URL . 'icono1.svg'?>" alt="icono seguridad" loading="lazy">
                <h3>seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat voluptate sed quasi iure, esse eaque nihil exercitationem voluptas perferendis ex amet non? Facilis nostrum reiciendis possimus consequuntur Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint molestiae deleniti pariatur.</p>
            </div><!--.icono-->
            <div class="icono">
                <img src="<?php echo IMAGENES_URL . 'icono2.svg'?>" alt="icono seguridad" loading="lazy">
                <h3>precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat voluptate sed quasi iure, esse eaque nihil exercitationem voluptas perferendis ex amet non? Facilis nostrum reiciendis possimus consequuntur Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint molestiae deleniti pariatur.</p>
            </div><!--.icono-->
            <div class="icono">
                <img src="<?php echo IMAGENES_URL . 'icono3.svg'?>" alt="icono seguridad" loading="lazy">
                <h3>a tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat voluptate sed quasi iure, esse eaque nihil exercitationem voluptas perferendis ex amet non? Facilis nostrum reiciendis possimus consequuntur Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint molestiae deleniti pariatur.</p>
            </div><!--.icono-->
        </div><!--.conos-nosotros-->
    </section>

    <?php includeTemplate('footer'); ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>