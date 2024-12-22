<?php


//variable para el condicional de alertas
$registrado = $_GET['registrado'];

// importar base de datos
require '../includes/config/database.php';
$bd = conectarDB();

//Escribir un quey
$query = "SELECT * FROM propiedades";

//Consutar la base  de datos
$resultado = mysqli_query($bd, $query);

//incluye un template

require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor">
    <h1>administrador de bienes raices</h1>

    <?php if ($registrado === '1'): ?>
        <p class="alerta exito">
            Anuncio creado correctamente
        </p>
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

    <table  class="propiedades">
        <thead>
            <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
            </tr>            
        </thead>

        <tbody> <!--Mostrar los resultados -->
            <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td>1</td>
                <td>Casa en la playa</td>
                <td><img class="imagen-tabla" src="/imagenes/0d6e3bdcf08141d6368177b406fe24fb.jpg" alt=""></td>
                <td>$1200000</td>
                <td>
                    <a href="" class="boton-rojo-block">Eliminar</a>
                    <a href="" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>

          <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php

// cerrar la conexion de la base de datos
incluirTemplate('footer');
?>