<?php
    require 'includes/funciones.php';   
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>

            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi perspiciatis iure velit numquam
                laudantium, error quae nobis quo commodi optio ab autem saepe magni perferendis! Sequi magni dolorem
                dignissimos enim?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum sequi ab, eos eveniet vero
                impedit perspiciatis quas ea voluptas eaque labore nemo consequuntur consectetur vitae deleniti,
                quibusdam error. Consequuntur?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, illo sit animi nulla repudiandae
                doloremque. Nobis nulla possimus perferendis accusamus accusantium doloribus tempore recusandae,
                repudiandae aspernatur maiores pariatur praesentium porro?
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum numquam, molestiae reprehenderit
                adipisci rem, minima quibusdam natus expedita, quia corrupti magni doloremque assumenda exercitationem illo
                sapiente! Aut eos ipsum atque.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod temporibus odio quisquam ut veritatis
                ipsa possimus, inventore consequatur ullam ab, esse, praesentium numquam. Minus non temporibus
                provident iste dolore odit.
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Mas Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis sapiente maxime itaque
                quia?
                Reprehenderit, quam exercitationem doloremque, quaerat cum perferendis nemo suscipit animi eius non
                eaque eos quidem maxime.
            </p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, sit nisi labore tempora veniam
                sapiente voluptatum voluptatem beatae neque repudiandae nobis nam recusandae pariatur accusantium
                debitis. Facere repellat vitae quae.
            </p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="icono a tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quidem, nesciunt assumenda enim,
                reiciendis ipsam autem dolorem eligendi architecto iure reprehenderit. Excepturi commodi quis
                consequuntur vel explicabo eum eaque enim?
            </p>
        </div>
    </div><!--cierre iconos nosotros-->
</section>

<?php
incluirTemplate('footer');

?>