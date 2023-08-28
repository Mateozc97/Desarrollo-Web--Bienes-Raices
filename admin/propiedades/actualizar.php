<?php

    // mostrar errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require '../../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth){
        header('Location: /');
    }

    //Validad la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /admin/index.php');
    }

    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    //Obtener los datos de la propiedad
    $consulta = "SELECT * FROM propiedades WHERE id = $id";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado);

    //Consulta para obtener los vendedores de la BD
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    //Arreglo con mensajes de errores
    $errores = [];

    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedorId= $propiedad['vendedorId'];
    $imagenPropiedad = $propiedad['imagen'];

    //Ejecturar el código después de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        // exit;

        $titulo = mysqli_real_escape_string( $db, $_POST['titulo'] );
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
        $wc = mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento= mysqli_real_escape_string($db, $_POST['estacionamiento']);
        $vendedorId= mysqli_real_escape_string($db, $_POST['vendedor']);
        $creado = date('Y/m/d');

        //Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }

        if(!$precio){
            $errores[] = "El precio es obligatorio";
        }

        if( strlen($descripcion) < 50 ){
            $errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres";
        }

        if(!$habitaciones){
            $errores[] = "El número de habitaciones es obligatorio";
        }

        if(!$wc){
            $errores[] = "El número de baños es obligatorio";
        }

        if(!$estacionamiento){
            $errores[] = "El número de estacionamientos es obligatorio";
        }

        if(!$vendedorId){
            $errores[] = "Elige un vendedor";
        }

        //Validad por tamaño(100 kb maximo)
        $medida = 1000 * 1000;
        
        if($imagen['size'] > $medida ){
            $errores[] = "La imagen es muy pesada";
        }


        //echo "<pre>";
        //var_dump($errores);
        //echo "</pre>";

        //Revisar que el array de errores este vacio
        if(empty($errores)){

            //Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }

            $nomnbreImagen = '';
            
            // /** SUBIDA DE ARCHIVOS */

            if($imagen['name']){
                //Eliminar la imagen previa
                unlink($carpetaImagenes.'/'.$propiedad['imagen'].'.jpg');

                //Generar un nombre unico
                $nomnbreImagen = md5( uniqid(rand(), true) );
                
                //Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nomnbreImagen . ".jpg");
            }else{
                $nomnbreImagen = $propiedad['imagen'];
            }

            //Insertar en la base de datos
            $query = " UPDATE propiedades SET titulo = '$titulo', precio = '$precio', imagen = '$nomnbreImagen', descripcion = '$descripcion', habitaciones = $habitaciones, wc = $wc, estacionamiento = $estacionamiento, vendedorId = $vendedorId WHERE id = $id ";

            // echo $query;
            
            $resultado = mysqli_query($db, $query);

            if($resultado){
                //Redireccionar al usuario
                header('Location: /admin/index.php?resultado=2');
            }
        }


    }

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin/index.php" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="Titulo">Título</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen" >

                <img src="/imagenes/<?php echo $imagenPropiedad ?>.jpg" class="imagen-small">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento"  placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">-- Seleccione --</option>
                    <?php  while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido'] ?> </option>
                    <?php endwhile  ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">

        </form>
    </main>

<?php
    incluirTemplate('footer');
?>