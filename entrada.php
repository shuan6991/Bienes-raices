<?php
    require 'includes/funciones.php';   
    incluirTemplate('header');
?>

<main class="contenedor seccion  contenido-centrado">
    <h1>Guia para la decoracion de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.webp" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
    </picture>

    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

    <div class="resumen-propiedad">
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