<?php
require_once ("funcionesEjercicio1.php");
$direccionCarpetaImagenes = "imagenes/";
$nombreDeImagenDeseado = $_POST["nombreDeImagen"];



if ($_FILES["imagenSubida"]["error"] > 0) {
    header("Location: ejercicio1.php");
    exit();
} else {
    $nombreDeImagenSubida = $_FILES["imagenSubida"]["name"];

    $nombreDeImagenCambiado = funcionCambiarNombreImagen($nombreDeImagenSubida, $nombreDeImagenDeseado);

    $destino = $direccionCarpetaImagenes . $nombreDeImagenCambiado;

    move_uploaded_file(
        $_FILES["imagenSubida"]["tmp_name"],
        $destino
    );

    header("Location: ejercicio1.php");
    exit();
}
/*if(isset($_POST) && array_key_exists('submitBtn',$_POST))
{
    $direccionImagenes = "imagenes/";
    $nombreDeLaImagen = $_POST["nombreDeImagen"];

    if ($_FILES["imagenSubida"]["error"] > 0) {
        echo "el archivo se subio erroneamente";
        header("Location: ejercicio1.php");
        exit();
    } else {
        $destino = $direccionImagenes . $_FILES["imagenSubida"]["name"];
        move_uploaded_file(
            $_FILES["imagenSubida"]["tmp_name"],
            $destino
        );
    }
}
else
{
    //do nothing
}*/
?>