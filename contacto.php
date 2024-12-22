<?php
    require 'includes/funciones.php';   
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="buils/img/destacada3.jpg" type="image/jpeg">
        <img src="build/img/destacada3.jpg" alt="imagen contacto">
    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form class="formulario">
        <fieldset>
            <legend>Informacion Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" placeholder="Tu Nombre">

            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="Tu Email">

            <label for="telefono">E-mail</label>
            <input type="tel" id="telefono" placeholder="Tu Telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>

        </fieldset>

        <fieldset>
            <legend>Informacion sobre la propiedad</legend>
            <label for="vende-compra">Vende o Compra</label>
            <select>
                <option selected disabled>--Seleccione--</option>
                <option value="compra">Compra</option>
                <option value="vende">Vende</option>
            </select>
            <label for="precio-presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu Precio o Presupuesto" id="precio-presupuesto">

        </fieldset>

        <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input type="radio" name="contacto" value="telefono" id="contactar-telefono">
                <label for="contactar-email">E-mail</label>
                <input type="radio" name="contacto" value="email" id="contactar-email">
            </div>

            <p>Si eligio telefono, elija la fecha y la hora para ser contactado</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">

            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00">

        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');

?>