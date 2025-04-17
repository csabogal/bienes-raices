<?php
// base de datos
require '../../includes/config/database.php';

$db = conectarDB();

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" placeholder="Titulo Propiedad" id="titulo" name="titulo">

            <label for="precio">Precio:</label>
            <input type="number" placeholder="precio Propiedad" id="precio" name="precio">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>
        <!-- Fin grupo de campos información general-->

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">habitaciones:</label>
            <input type="number" placeholder="Ej: 3" id="habitaciones" name="habitaciones" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" placeholder="Ej: 3" id="wc" name="wc" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" placeholder="Ej: 3" id="estacionamiento" name="estacionamiento" min="1" max="9">
        </fieldset>
        <!-- Fin grupo de campos Información Propiedad-->

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="1">Camilo</option>
                <option value="2">Homero</option>
            </select>
        </fieldset>
        <!-- Fin grupo de campos Información Vendedor-->

        <input type="submit" value="Crear propiedad" class="boton boton-verde">
    </form>
    <!-- Fin formulario de creación -->
</main>
<!-- Fin main o contenido principal -->

<?php incluirTemplate('footer'); ?>