<?php

$inicio = true;
include 'includes/templates/header.php';
?>

<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono de seguridad" loading="lazy" />
            <h3>Seguridad</h3>
            <p>
                Vero inventore corporis dolor expedita, eaque laborum ducimus,
                similique eos molestias nam soluta repudiandae repellendus? A
                perferendis totam, esse nisi aspernatur beatae?
            </p>
        </div>
        <!-- Fin Icono -->

        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono de precio" loading="lazy" />
            <h3>Precio</h3>
            <p>
                Vero inventore corporis dolor expedita, eaque laborum ducimus,
                similique eos molestias nam soluta repudiandae repellendus? A
                perferendis totam, esse nisi aspernatur beatae?
            </p>
        </div>
        <!-- Fin Icono -->

        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono de tiempo" loading="lazy" />
            <h3>A Tiempo</h3>
            <p>
                Vero inventore corporis dolor expedita, eaque laborum ducimus,
                similique eos molestias nam soluta repudiandae repellendus? A
                perferendis totam, esse nisi aspernatur beatae?
            </p>
        </div>
        <!-- Fin Icono -->
    </div>
    <!-- Fin iconos nosotros -->
</main>
<!-- Fin main o contenido principal -->

<section class="contenedor seccion">
    <h2>Casas y Departametos en Venta</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp" />
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="Anuncio" />
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>
                    Casa en el lago con excelente vista, acabados de lujo a un
                    excelente precio
                </p>
                <p class="precio">$3'000.000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"
                            alt="icono estacionamiento" />
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!-- Fin contenido anuncio -->
        </div>
        <!-- Fin anuncio -->

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp" />
                <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="Anuncio" />
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa terminados de lujo</h3>
                <p>
                    Casa en el lago con excelente vista, acabados de lujo a un
                    excelente precio
                </p>
                <p class="precio">$3'000.000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"
                            alt="icono estacionamiento" />
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!-- Fin contenido anuncio -->
        </div>
        <!-- Fin anuncio -->

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp" />
                <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="Anuncio" />
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa con Piscina</h3>
                <p>
                    Casa en el lago con excelente vista, acabados de lujo a un
                    excelente precio
                </p>
                <p class="precio">$3'000.000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"
                            alt="icono estacionamiento" />
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!-- Fin contenido anuncio -->
        </div>
        <!-- Fin anuncio -->
    </div>
    <!-- Fin contenedor anuncios -->
    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver todas</a>
    </div>
</section>
<!-- Fin sección anuncios -->

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>
        Llena el formulario de contacto y un asesor se pondrá en contacto
        contigo a la brevedad
    </p>
    <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
</section>
<!-- Fin sección contactar -->

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp" />
                    <source srcset="build/img/blog1.jpg" type="image/jpeg" />
                </picture>
                <img loading="lazy" src="build/img/blog1.jpg" alt="Imagen de blog" />
            </div>
            <!-- imagen de blog -->

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                </a>
                <p class="informacion-meta">
                    Escrito el: <span>20/10/2024</span> por: <span>Admin</span>
                </p>
                <p>
                    Consejos para contruir una terraza en el techo de tu casa con los
                    mejores materiales y ahorrando dinero
                </p>
            </div>
            <!-- fin texto entrada de blog -->
        </article>
        <!-- Fin entrada de blog -->

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp" />
                    <source srcset="build/img/blog2.jpg" type="image/jpeg" />
                </picture>
                <img loading="lazy" src="build/img/blog2.jpg" alt="Imagen de blog" />
            </div>
            <!-- imagen de blog -->

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                </a>
                <p class="informacion-meta">
                    Escrito el: <span>20/10/2024</span> por: <span>Admin</span>
                </p>
                <p>
                    Maximiza el espacio en tu hogar con esta guia, aprende a combinar
                    muebles y colores para darle vida a tu espacio
                </p>
            </div>
            <!-- fin texto entrada de blog -->
        </article>
        <!-- Fin entrada de blog -->
    </section>
    <!-- Fin contenido del blog -->

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y
                la casa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>- Camilo Sabogal López</p>
        </div>
        <!-- fin testimonial -->
    </section>
    <!-- fin testimoniales  -->
</div>
<!-- fin seccion inferior -->

<?php include 'includes/templates/footer.php'; ?>