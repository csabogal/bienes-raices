<?php include 'includes/templates/header.php'; ?>

<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen de Contacto" />
    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form class="formulario">
        <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu Nombre" id="nombre" />

            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Email" id="email" />

            <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Tu Teléfono" id="telefono" />

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>
        </fieldset>
        <!-- Fin fieldset sobre información personal -->

        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="opciones">Vende o Compra</label>
            <select id="opciones">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="vende">Vende</option>
                <option value="compra">Compra</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto" />
        </fieldset>
        <!-- Fin fieldset sobre información de la propiedad -->

        <fieldset>
            <legend>Contacto</legend>

            <p>¿Cómo desea ser contactado?</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input type="radio" name="contacto" value="telefono" id="contactar-telefono" />

                <label for="contactar-email">E-mail</label>
                <input type="radio" name="contacto" id="contactar-email" value="email" />
            </div>

            <p>Si eligió teléfono, elija la fecha y hora</p>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" />

            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00" />
        </fieldset>
        <!-- Fin filset sobre contacto -->

        <input type="submit" value="Enviar" class="boton-verde" />
    </form>
    <!-- Fin formulario -->
</main>
<!-- Fin main o contenido principal -->

<?php include 'includes/templates/footer.php'; ?>