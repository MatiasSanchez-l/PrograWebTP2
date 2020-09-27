<?php
function funcionCambiarNombreImagen($nombreDeImagenSubida , $nombreDeImagenDeseado){
    $imagenTipoArchivo = strtolower(pathinfo($nombreDeImagenSubida,PATHINFO_EXTENSION));
    switch ($imagenTipoArchivo){
        case "jpg":
           return $nombreDeseadoDeLaImagen = $nombreDeImagenDeseado . ".jpg";
            break;
        case "png":
           return $nombreDeseadoDeLaImagen = $nombreDeImagenDeseado . ".png";
            break;
        case "jpeg":
           return $nombreDeseadoDeLaImagen = $nombreDeImagenDeseado . ".jpeg";
            break;
        case "gif":
           return $nombreDeseadoDeLaImagen = $nombreDeImagenDeseado . ".gif";
            break;
        default:
            header("Location: ejercicio1.php");
            exit();
    }
}

function funcionCargarImagenes(){
    $dirireccion = 'imagenes';
    $archivoExtencion = array(
        'jpg',
        'jpeg',
        'png',
        'gif'
    );
    $dir_contenidos = scandir($dirireccion);

    foreach ($dir_contenidos as $archivo) {
        $tipoDeArchivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));

        if (in_array($tipoDeArchivo, $archivoExtencion) == true) {
            echo '<img src="'. $dirireccion . '/'. $archivo. '" />';
        }
    }
}