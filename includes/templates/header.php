<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css" />
</head>

<body>
    <header class="header <?php echo isset($inicio) ? 'inicio' : ''; ?> ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices" />
                </a>
                <!-- Fin logo -->

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive" />
                </div>

                <div class="derecha">
                    <img class="dark-mode-button" src="build/img/dark-mode.svg" alt="icono de dark mode" />
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
                <!--Fin navegación-->
            </div>
            <!--Fin barra-->
        </div>
        <!--Fin contenedor-->
    </header>
    <!-- Fin header-->