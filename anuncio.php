<?php
    require 'includes/funciones.php';   
    incluirTemplate('header');
?>

<main class="contenedor seccion  contenido-centrado">
    <h1>Casa en Vente frente al bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.webp" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono-casa" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono-casa" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono-casa" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p>4</p>
            </li>
        </ul>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, architecto a maxime ex assumenda expedita
            veritatis, iusto magnam accusantium culpa quis! Quasi magnam exercitationem iure esse nam eum facere
            perferendis.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero magni sit repellat, commodi, maxime
            possimus adipisci reiciendis et sint voluptate praesentium fuga exercitationem aliquam. Soluta
            necessitatibus dolorum optio quo aliquid.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, doloremque? Impedit a ullam error
            veniam harum ipsum. Repellendus explicabo id consequatur ipsam, eos, cupiditate iure facilis corporis
            voluptas assumenda ratione.
        </p>
    </div>
</main>

<?php
incluirTemplate('footer');

?>