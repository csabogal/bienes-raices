<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro Blog</h1>

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

    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp" />
                <source srcset="build/img/blog3.jpg" type="image/jpeg" />
            </picture>
            <img loading="lazy" src="build/img/blog3.jpg" alt="Imagen de blog" />
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

    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp" />
                <source srcset="build/img/blog4.jpg" type="image/jpeg" />
            </picture>
            <img loading="lazy" src="build/img/blog4.jpg" alt="Imagen de blog" />
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
</main>
<!-- Fin main o contenido principal -->

<?php incluirTemplate('footer'); ?>