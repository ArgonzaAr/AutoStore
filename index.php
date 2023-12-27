<?php
   require 'includes/functions.php';
   includeTemplate('header', $inicio = true);
?>
    <main class="contenedor seccion">
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
    </main>
    
    <section class="seccion contenedor">
        <h2>Autos en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                    <picture>
                        <source srcset="<?php echo IMAGENES_URL . 'auto1.webp'?>" type="image/webp">
                        <source srcset="<?php echo IMAGENES_URL . 'auto1.jpg'?>" type="image/jpeg">
                        <img src="<?php echo IMAGENES_URL . 'auto1.jpg'?>" alt="anuncio" loading="lazy">
                    </picture>
                <div class="contenido-anuncio">
                    <h3>Camioneta Audi</h3>
                    <p>Camioneta Audi todo terreno a excelente precio</p>
                    <p class="precio">$560,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono-propiedad" src="<?php echo IMAGENES_URL . 'puerta-del-auto.png'?>" alt="icono puerta" loading="lazy">
                            <p>4</p>
                        </li>
                        <li>
                            <img class="icono-propiedad" src="<?php echo IMAGENES_URL . 'motor-del-coche.png'?>" alt="icono puerta" loading="lazy">
                            <p>1500</p>
                        </li>
                        <li>
                            <img class="icono-propiedad" src="<?php echo IMAGENES_URL . 'velocidad-de-descarga.png'?>" alt="icono puerta" loading="lazy">
                            <p>10,000</p>
                        </li>
                    </ul>
                    <a href="anuncios.html" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--contenido-anuncio-->
            </div><!--anuncio-->
            <div class="anuncio">
                    <picture>
                        <source srcset="<?php echo IMAGENES_URL . 'auto2.webp'?>" type="image/webp">
                        <source srcset="<?php echo IMAGENES_URL . 'auto2.jpg'?>" type="image/jpeg">
                        <img src="<?php echo IMAGENES_URL . 'auto2.jpg'?>" alt="anuncio" loading="lazy">
                    </picture>
                <div class="contenido-anuncio">
                    <h3>Camioneta Audi</h3>
                    <p>Camioneta Audi todo terreno a excelente precio</p>
                    <p class="precio">$560,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono-propiedad" src="<?php echo IMAGENES_URL . 'puerta-del-auto.png'?>" alt="icono puerta" loading="lazy">
                            <p>4</p>
                        </li>
                        <li>
                            <img class="icono-propiedad" src="<?php echo IMAGENES_URL . 'motor-del-coche.png'?>" alt="icono puerta" loading="lazy">
                            <p>1500</p>
                        </li>
                        <li>
                            <img class="icono-propiedad" src="<?php echo IMAGENES_URL . 'velocidad-de-descarga.png'?>" alt="icono puerta" loading="lazy">
                            <p>10,000</p>
                        </li>
                    </ul>
                    <a href="anuncios.html" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--contenido-anuncio-->
            </div><!--anuncio-->
            <div class="anuncio">
                    <picture>
                        <source srcset="<?php echo IMAGENES_URL . 'auto3.webp'?>" type="image/webp">
                        <source srcset="<?php echo IMAGENES_URL . 'auto3.jpg'?>" type="image/jpeg">
                        <img src="<?php echo IMAGENES_URL . 'auto3.jpg'?>" alt="anuncio" loading="lazy">
                    </picture>
                <div class="contenido-anuncio">
                    <h3>Camioneta Audi</h3>
                    <p>Camioneta Audi todo terreno a excelente precio</p>
                    <p class="precio">$560,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono-propiedad" src="<?php echo IMAGENES_URL . 'puerta-del-auto.png'?>" alt="icono puerta" loading="lazy">
                            <p>4</p>
                        </li>
                        <li>
                            <img class="icono-propiedad" src="<?php echo IMAGENES_URL . 'motor-del-coche.png'?>" alt="icono puerta" loading="lazy">
                            <p>1500</p>
                        </li>
                        <li>
                            <img class="icono-propiedad" src="<?php echo IMAGENES_URL . 'velocidad-de-descarga.png'?>" alt="icono puerta" loading="lazy">
                            <p>10,000</p>
                        </li>
                    </ul>
                    <a href="anuncios.html" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--contenido-anuncio-->
            </div><!--anuncio-->
        </div><!--Contenedor-auncios-->
        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra el auto de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.html" class="boton-amarillo-inlineblock">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="<?php echo IMAGENES_URL . 'blog3.webp'?>" type="image/webp">
                        <source srcset="<?php echo IMAGENES_URL . 'blog3.jpg'?>" type="image/jpeg">
                        <img src="<?php echo IMAGENES_URL . 'blog3.jpg'?>" alt="anuncio" loading="lazy">
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
                        <source srcset="<?php echo IMAGENES_URL . 'auto4.webp'?>" type="image/webp">
                        <source srcset="<?php echo IMAGENES_URL . 'auto4.jpg'?>" type="image/jpeg">
                        <img src="<?php echo IMAGENES_URL . 'auto4.jpg'?>" alt="anuncio" loading="lazy">
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
        </section>
        <section class="testimonial">
            <blockquote>La venta fue agradable, quede satisfecho con la atención y la seguridad al momento de realizar contratos, muy recomendable comprar con esta empresa</blockquote>
            <p>- Angel Argonza</p>
        </section>
    </div>

    <?php includeTemplate('footer'); ?>
</body>
</html>