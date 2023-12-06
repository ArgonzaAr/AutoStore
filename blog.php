<?php
   require 'includes/functions.php';
   includeTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img src="build/img/blog3.jpg" alt="imagen de blog" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Carro deportivo</h4>
                    <p>Escrito el: <span>28/08/23</span> por: <span>Admin</span></p>
                    <p>Consejos para elegir el mejor auto deportivo con los mejores precios y calidad</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/auto4.webp" type="image/webp">
                    <source srcset="build/img/auto4.jpg" type="image/jpeg">
                    <img src="build/img/auto4.jpg" alt="imagen de blog" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Gía para mejorar la autonomía de tu auto</h4>
                    <p class="informacion-meta">Escrito el: <span>12/09/23</span> por: <span>Admin</span></p>
                    <p>Las mejores práctiocas para mejorar la autonomía de tu auto reduciendo el riesgo de futuros problemas</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img src="build/img/blog2.jpg" alt="imagen de blog" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Gía para mejorar la autonomía de tu auto</h4>
                    <p>Escrito el: <span>12/09/23</span> por: <span>Admin</span></p>
                    <p>Las mejores práctiocas para mejorar la autonomía de tu auto reduciendo el riesgo de futuros problemas</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img src="build/img/blog4.jpg" alt="imagen de blog" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Gía para mejorar la autonomía de tu auto</h4>
                    <p class="informacion-meta">Escrito el: <span>12/09/23</span> por: <span>Admin</span></p>
                    <p>Las mejores práctiocas para mejorar la autonomía de tu auto reduciendo el riesgo de futuros problemas</p>
                </a>
            </div>
        </article>
    </main>

    <?php includeTemplate('footer'); ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>