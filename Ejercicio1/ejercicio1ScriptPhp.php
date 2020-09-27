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

    if(isset($_POST['submitBtn1'])){
        header("Location: ejercicio1.php");
        exit();
    }else{
        header("Location: ../Ejercicio2/ejercicio2.php");
        exit();
    }

}
?>