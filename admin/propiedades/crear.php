<?php
//Base de datos

require '../../includes/config/database.php';

$db = conectarDB();

//consultar base de datos

$consulta = "SELECT * FROM vendedores";
$resultadoCon = mysqli_query($db, $consulta);

//arreglo con mensaje de error
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones ='';
$wc = '';
$estacionamiento = '';
$vendedorId = '';



//Ejecutar codigo despues de que el usuario envia el formulario

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // echo '<prer>';
    // var_dump($_POST);
    // echo '</pre>';

    // echo '<prer>';
    // var_dump($_FILES);
    // echo '</pre>';

    $titulo = mysqli_real_escape_string( $db, $_POST['titulo'] );
    $precio = mysqli_real_escape_string( $db, $_POST['precio'] );
    $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion'] );
    $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones'] );
    $wc = mysqli_real_escape_string( $db, $_POST['wc'] );
    $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento'] );
    $vendedorId = mysqli_real_escape_string( $db, $_POST['vendedor'] );
    $creado = date('Y/m/d');

    //asignar files a una variable;

    $imagen = $_FILES['imagen'];
    var_dump($imagen['name']);



    if (!$titulo) {
        $errores[] = 'Debes añadir un titulo';
    }

    if (!$precio) {
        $errores[] = 'Debes añadir un precio';
    }

    if (strlen(!$descripcion)>50) {
        $errores[] = 'Debes añadir una descripcion y debe tener al menos 50 caracteres';
        echo $descripcion;
    }


    if (!$habitaciones) {
        $errores[] = 'Debes añadir una habitacion';
    }

    if (!$wc) {
        $errores[] = 'Debes añadir un baño';
    }


    if (!$estacionamiento) {
        $errores[] = 'Debes añadir un estacionamiento';
    }

    if (!$vendedorId) {
        $errores[] = 'Debes añadir un vendedor';
    }


    if(!$imagen['name'] || $imagen['error']){
        $errores[] = 'Debes añadir una imagen'; 
    }
    
    //validar imagen por tamaño (1 mg maximo)

    //converti de bites a klbites

    $medida = 1000 * 1000;

    if($imagen['size']> $medida){
        $errores[] = 'La imagen es muy pesada';
    }

    //Revisar el arreglo

    if (empty($errores)) {

        /** SUBIDA DE ARCHIVIS */

        //crear una carpeta

        $carpetaImagenes = '../../imagenes/';

        if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
        }
        
        //Generar un nombre de imagen para que no se sobreescriba

        $nombreImagen = md5(uniqid(rand(), true));

        //subir la imagen

        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen . ".jpg");
   

        //Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedoresId) 
        VALUES('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('location:' . '/admin?registrado=1');
        }
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor">
    <h1 >Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>

        <div class="alerta error">
            <?php echo $error;?>
        </div>

    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion general</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

        </fieldset>


        <fieldset>
            <legend>Informacion de la Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="" selected disabled>-- Sleccione --</option>       
                
                <?php while($row = mysqli_fetch_assoc($resultadoCon)) :?>

                    <option <?php echo $vendedorId === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"><?php echo $row['nombre'] . '' . $row['apellido']; ?></option>

                <?php endwhile; ?>
                
            </select>
        </fieldset>

        <input type="submit" value="Crear propiedad" class="boton boton-verde">

    </form>
</main>

<?php
incluirTemplate('footer');
?>