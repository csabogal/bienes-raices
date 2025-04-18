<?php
// base de datos
require '../../includes/config/database.php';
$db = conectarDB();

// consultar vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Arreglo con mensaje de errores
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';


// Ejecutar el código después de que el usuario envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {




    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date('Y/m/d');

    // Asignar files hacia una variable
    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }

    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }

    if (strlen($descripcion) < 50) {
        $errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres";
    }

    if (!$habitaciones) {
        $errores[] = "El número de habitaciones es obligatorio";
    }

    if (!$wc) {
        $errores[] = "El número de baños es obligatorio";
    }

    if (!$estacionamiento) {
        $errores[] = "El número de estacionamientos es obligatorio";
    }

    if (!$vendedorId) {
        $errores[] = "Elige un vendedor";
    }

    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = "La imagen es obligatoria";
    }

    // Validar por tamaño (1mb máximo)
    $medida = 1000 * 1000;

    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy grande";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";


    // revisar que el arreglo de errores esté vacío
    if (empty($errores)) {

        /** SUBIR ARCHIVOS */

        // Crear carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        // generar un nombre aleatorio para la imagen
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        // Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);


        // Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId') ";

        // probar el query para saber si está ok
        // echo $query; 

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // si re insertó correctamente, redirecciona al usuario
            header('Location: /admin');
        }
    }
}







require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>


    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" placeholder="Titulo Propiedad" id="titulo" name="titulo" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" placeholder="precio Propiedad" id="precio" name="precio"
                value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>
        <!-- Fin grupo de campos información general-->

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">habitaciones:</label>
            <input type="number" placeholder="Ej: 3" id="habitaciones" name="habitaciones" min="1" max="9"
                value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input type="number" placeholder="Ej: 3" id="wc" name="wc" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" placeholder="Ej: 3" id="estacionamiento" name="estacionamiento" min="1" max="9"
                value="<?php echo $estacionamiento; ?>">
        </fieldset>
        <!-- Fin grupo de campos Información Propiedad-->

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">-- Seleccione --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?>
                    value="<?php echo $vendedor['id']; ?>">
                    <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>
        <!-- Fin grupo de campos Información Vendedor-->

        <input type="submit" value="Crear propiedad" class="boton boton-verde">
    </form>
    <!-- Fin formulario de creación -->
</main>
<!-- Fin main o contenido principal -->

<?php incluirTemplate('footer'); ?>